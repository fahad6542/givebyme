<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * Controller for User
 * Visible after login
 * This is basically Compain 
 * Comapain Types (pro_type) Project and Company
 * --Mirrior of project Table
 * 
 * Added By Fahad
 */
class Company extends CI_Controller
{

    //private $upload;

    public function __construct()
    {
        parent::__construct();
        if (! $this->session->userdata('userdata'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        }
        $this->load->model('Project_model');
        $this->load->helper('form');
        $this->load->model('Country_model');
        $this->load->model('User');
        $this->load->helper('url_helper');
        $this->load->helper(array('form', 'url'));
    }
   
     public function index($pro_type="company") {
        $user = $this->session->userdata('userdata');
        
        $sql = "SELECT p.pid,p.title,p.status,p.images,p.projectValue,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime \n"

        . "FROM `projects` AS p \n"

        . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"

        . "WHERE p.status=1 AND p.added_by=".$user["uid"]." AND p.pro_type='".$pro_type."' ORDER BY p.pid DESC";

      $result = $this->db->query($sql);
            

        if (count($result->result_array())<1) {
            redirect("Company/create/".$pro_type);
        }
        $data['industries'] = $this->getIndustryies();
        $data['projects'] = $result->result_array();

        $partialViewData["currentTab"]=$pro_type;
        $proObj=new Project_model();
        $proObj->pid=0;
        $proObj->pro_type=$pro_type;
        $partialViewData["project"]=(array)$proObj;
        $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);
        $data["project"]=(array)$proObj;
        
        $this->load->view('user_dashboard/header');
        if ($pro_type=="organization") {
            $this->load->view('user_dashboard/company/index_org', $data);
        }else{
            $this->load->view('user_dashboard/company/index', $data);
        }
        
        $this->load->view('user_dashboard/footer');
        
    }
    //Display company form
    public function create($pro_type="company"){
        
        $sql="SELECT * FROM industries WHERE status=1";
        if ($pro_type=="organization") {
            $sql.=" AND childOf=33";
        }
        $query = $this->db->query($sql);
        $data['industries'] = $query->result_array();
        
        if ($pro_type=="organization") {
            $sql="SELECT * FROM cause";
            $query = $this->db->query($sql);
            $data['causes'] = $query->result_array();
        }

        $sql="SELECT * FROM dealtype WHERE status=1";
        $query = $this->db->query($sql);
        $data['dealTypes']=$query->result_array();
        
        $couList=new Country_model();
        $data["couList"]=$couList->getRows();
       
        $partialViewData["currentTab"]=$pro_type;
        $proObj=new Project_model();
        $proObj->pid=0;
        $proObj->pro_type=$pro_type;
        $partialViewData["project"]=(array)$proObj;
        $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);
                
        $this->load->view('user_dashboard/header');
        if ($pro_type=="project") {
            $this->load->view('user_dashboard/company/create_project', $data);
        }elseif ($pro_type=="organization") {
            $this->load->view('user_dashboard/company/create_org', $data);
        }else{
            $this->load->view('user_dashboard/company/create', $data);
        }
        $this->load->view('user_dashboard/footer');
    }
    
    public function save(){
        $user = $this->session->userdata('userdata');
    
        $this->form_validation->set_rules('title', 'Project Name', 'required');
        //$this->form_validation->set_rules('description', 'Description');

       // if ($this->form_validation->run() == false) {
         //       $this->loadView();
       // } else {
             $proObj=new Project_model();
             $proObj = $proObj->copyProject( $this->input->post());

                $images = $this->uploadImages(rand());
                $proObj->images=$images;

                if ($this->input->post("industries")) {
                     $industry = implode(',', $this->input->post("industries"));
                     $proObj->industries=$industry;
                }else{
                    $proObj->industries=0;
                }
               

                $proObj->added_by=$user["uid"];

                 if (!empty($_FILES['logo']['name'][0])) {
                    
                    ////////////////////Logo Upload/////////////////////
                    $config1['upload_path']          = './assets/uploads/logo/';
                    $config1['allowed_types']        = 'gif|jpg|png';
                    $config1['max_size']             = 1000;
                    $config1['max_width']            = 1024;
                    $config1['max_height']           = 768;
                    $config1['file_name']           = $proObj->title;

                    $this->load->library('upload',$config1);

                    if ( ! $this->upload->do_upload('logo'))
                    {       
                            $this->session->set_flashdata('error',$this->upload->display_errors());
                            redirect("company/create");
                    }
                }
                $data = array('upload_data' => $this->upload->data());
                $proObj->logo=$data["upload_data"]["file_name"];

               $result = $this->main_model->insert('projects', $proObj);
               $pid=$this->db->insert_id();
                if ($result) {

                    //saving to stripe
                    if ($proObj->pro_type=="organization") {
                        require_once('application/libraries/stripe-php/init.php');
                        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
                        \Stripe\Product::create([
                          "id"=>$pid,
                          "name" => $proObj->title,
                          "type" => "service",
                          "metadata" => array("URL"=>base_url("campaign/detail/".$pid))
                        ]);

                       //adding plan
                        $plans=$this->input->post("plan");

                        foreach ($plans as $key => $value) {
                            if ($value>0) {
                                $plan = \Stripe\Plan::create([
                                    'product' => $pid,
                                    'nickname' => 'Plan'.($key+1),
                                    'interval' => 'month',
                                    'currency' => 'usd',
                                    'amount' => $value*100,
                                ]);
                            }
                          
                        }
                    }
                    //saving to stripe ends
                        $this->session->set_flashdata('success', ' Campaign Added.');
                        //redirect('document/create/'.$pid);
                        //redirect('Company/index/company');
                        redirect('Bank/index/'.$pid);
                } else {
                        $this->session->set_flashdata('error', 'Unable to process your request');
                }
       // }
    }
   
    function edit($id) {
        $user = $this->session->userdata('userdata');

        $where=array('added_by' => $user["uid"], 'pid' => $id,);
        $vURL="user_dashboard";
        $data['causes']=array();
        
        if ($user['usertype'] == "admin") {
           $where=array('pid' => $id,);
            $vURL="admin_dashboard";
        }

        

        $query = $this->db->get_where('projects', $where);
        $data["companyItem"]=$proObj= $query->row_array();
        
        $data['industries'] = $this->getIndustryies();
        
        if ($proObj["pro_type"]=="organization") {
            $sql="SELECT * FROM cause";
            $query = $this->db->query($sql);
            $data['causes'] = $query->result_array();
        }

        $query = $this->db->query("SELECT * FROM dealtype WHERE status=1");
        $data['dealTypes']=$query->result_array();
        
        $couList=new Country_model();
        $data["couList"]=$couList->getRows();
        
        $partialViewData["currentTab"]=$proObj["pro_type"];
        
        $partialViewData["project"]=(array)$proObj;
        $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);

        $this->load->view($vURL.'/header');
        if ($proObj["pro_type"]=="company") {
            $this->load->view('user_dashboard/company/edit', $data);
        }else if ($proObj["pro_type"]=="organization") {
             $this->load->view('user_dashboard/company/edit_org', $data);
        }else{
            $this->load->view('user_dashboard/company/edit_project', $data);
        }
        $this->load->view($vURL.'/footer');
    }
    
    function update() {
        $user = $this->session->userdata('userdata');
        // echo "<pre>";        print_r($this->input->post());
       $proObj=new Project_model();
       $proObj = $proObj->copyProject( $this->input->post());

       $industry = implode(',', $this->input->post("industries"));
       $proObj->industries=$industry;

       $proObj->added_by=$user["uid"];

       
       ///upload images
       
       if (!empty($_FILES['projectImages']['name'][0])) {
          // print_r($_FILES['projectImages']);
            $images = $this->uploadImages(rand());
            if (!empty($this->input->post("img"))) {
                $images=$images .",". implode(",", $this->input->post("img"));
            }
            $proObj->images=$images;
       }
                ////////////////////Logo Upload/////////////////////

                
        if (!empty($_FILES['newlogo']['name'])) {
            $config1['upload_path']          = './assets/uploads/logo/';
            $config1['allowed_types']        = 'gif|jpg|png';
            $config1['max_size']             = 100;
            $config1['max_width']            = 1024;
            $config1['max_height']           = 768;
            $config1['file_name']           = $proObj->title;

            $this->load->library('upload',$config1);

            if ( ! $this->upload->do_upload('newlogo'))
            {
                    $this->session->set_flashdata('error',$this->upload->display_errors());
                    //echo "<pre>";
                    //print_r($this->upload->display_errors()); die();
                    $this->load->view('Company');
            }
            $data = array('upload_data' => $this->upload->data());
            $proObj->logo=$data["upload_data"]["file_name"];

        }
        
        $proObj->added_by=$user["uid"];
        
        $this->db->where('pid', $proObj->pid, 'added_by',$user["uid"]);
        
        if ($this->db->update('projects', $proObj)) {
            //$this->session->set_flashdata('success',$proObj->pro_type.' Info Updated');
            $this->session->set_flashdata('success','Campaign Info Updated');
            if ($user['usertype'] == "admin") {
                redirect("projects");
            }else{
                redirect("Company/index/".$proObj->pro_type);
            }
        }else{
            $this->session->set_flashdata('error','Sorry unable to update Info.');
            redirect("Campaign/edit/".$proObj->pid);
        }
        
    }
    
    function deleteCampaign($id){
        $user = $this->session->userdata('userdata');

        $proObj=new Project_model();
        $where=array("added_by" =>$user["uid"],"pid" => $id);
        $query = $this->db->get_where('projects', $where);
        $proObj= $query->row_array();
        $proObj["status"]=2;//deletedByuser

        $this->db->where('pid', $proObj["pid"], 'added_by',$user["uid"]);
        if ($this->db->update('projects', $proObj)) {
            $this->session->set_flashdata('success','Deleted Successfuly.');
            if ($user['usertype'] == "admin") {
                redirect("projects");
            }else{
                redirect("Company/index/".$proObj["pro_type"]);
            }
        }else{
            $this->session->set_flashdata('error','Sorry unable to delete.');
            redirect("Campaign/edit/".$proObj["pid"]);
        }
    }

    function delete($id){
        $user = $this->session->userdata('userdata');
        $where=array("added_by" =>$user["uid"],
                       // "status"=>1,
                        "pro_type"=>"company",
            "pid" => $id);
        
        $result = $this->main_model->remove('projects', $where);
            if ($result) {
                    $this->session->set_flashdata('success', 'Campaign Deleted');
                    $this->viewProjects();
            }
    }
        
        //stripe related
    function plans($pid=0){
        $user = $this->session->userdata('userdata');

        $data['stripePlans']=array();
        $data['project']=array();

        $vURL="user_dashboard";
        
        if ($user['usertype'] == "admin") {
            $vURL="admin_dashboard";
        }

       $sql = "SELECT `pid`,`title`,`pro_type`,`images`,`added_by`,`logo` FROM `projects`";
       
       $sql=$sql." WHERE added_by = ".$user["uid"]." AND pid=". $pid ." ";
            
        $result= $this->db->query($sql);
        //echo "<pre>";
        //print_r($result); die();
        if ($result->num_rows()>0) {
            $pcData= $result->row_array();
            $data['project']=$pcData;
            
            //retreving stripe plans
             require_once('application/libraries/stripe-php/init.php');
            \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));

            $data['stripePlans']=\Stripe\Plan::all(["product" => $pcData["pid"]]);
            //stripe plans ends

            $this->load->view($vURL.'/header');
            $this->load->view('user_dashboard/company/org_plan', $data);
            $this->load->view($vURL.'/footer');
         

        }else{
            $this->session->set_flashdata('error','Sorry no campaign found.');
            redirect("Company/index/organization");
        }
        

    }

    function subscribers($planId=0){
        $user = $this->session->userdata('userdata');

        $data['stripeSubscribers']=array();
        $data['project']=array();
        $stripeSubscribers=array();
        $error="";
        $msg="";

        $vURL="user_dashboard";
        
        if ($user['usertype'] == "admin") {
            $vURL="admin_dashboard";
        }


        require_once('application/libraries/stripe-php/init.php');
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
        
        try {
           $stripeSubscribers=\Stripe\Subscription::all(['plan' => $planId]);
        } catch (\Stripe\Error\InvalidRequest $e) {
          // Invalid parameters were supplied to Stripe's API
          $body = $e->getJsonBody();
          $err  = $body['error'];
          $error.="Error! ".$err['message'];
          $msg="No such plan found.";
        } catch (\Stripe\Error\Authentication $e) {
          // Authentication with Stripe's API failed
          // (maybe you changed API keys recently)
            $body = $e->getJsonBody();
          $err  = $body['error'];

          $error.="Error! ".$err['message'];
          $msg="Authentication with Stripe's API failed";
        } catch (\Stripe\Error\ApiConnection $e) {
          // Network communication with Stripe failed
          $error.="Error! ".$err['message'];
          $msg="Network communication with Stripe failed";
        } catch (\Stripe\Error\Base $e) {
          // Display a very generic error to the user, and maybe send
          // yourself an email
          $body = $e->getJsonBody();
          $err  = $body['error'];

          $error.="Error! ".$err['message'];
          $msg="Stripe error code 6  /  ".$err['code'];// ".$e;
        } catch (Exception $e) {
          // Something else happened, completely unrelated to Stripe
          $body = $e->getJsonBody();
          $err  = $body['error'];

          $error.="Error! ".$err['message'];
          $msg="Unknown error try again.";
        }

        if ($msg!="") {
            $this->session->set_flashdata('error', $msg);
            redirect("Company/index/organization");
        }else{
        
            $data['stripeSubscribers']=$stripeSubscribers;
       
            $this->load->view($vURL.'/header');
            $this->load->view('user_dashboard/company/org_subscribers', $data);
            $this->load->view($vURL.'/footer');
       
        }
    }

    //helper functions
    function getIndustryies()
    {
            $result = $this->main_model->getAllRecords('industries');
            return $result->result_array();
    }

    function set_upload_options($projectName, $index)
	{
		$path = "./assets/uploads/projects/";
		if (!is_dir($path)) {
			mkdir($path, 0777, true);
		}
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name'] = 'lavni_' . $projectName . '_' . $index;
		$config['overwrite'] = false;
		return $config;
	}

	function uploadImages($projectName)
	{
		//$path = "assets/uploads/projects/";
		$this->load->library('upload');
		$dataInfo = array();
		$files = $_FILES;
		$cnt = count($_FILES['projectImages']['name']);
		for ($i = 0; $i < $cnt; $i++) {
			$_FILES['projectImages']['name'] = $files['projectImages']['name'][$i];
			$_FILES['projectImages']['type'] = $files['projectImages']['type'][$i];
			$_FILES['projectImages']['tmp_name'] = $files['projectImages']['tmp_name'][$i];
			$_FILES['projectImages']['error'] = $files['projectImages']['error'][$i];
			$_FILES['projectImages']['size'] = $files['projectImages']['size'][$i];
			$this->upload->initialize($this->set_upload_options($projectName, $i + 1));
				// $this->upload->do_upload();
			$this->upload->do_upload('projectImages');
			$data = $this->upload->data();
			$dataInfo[$i] = "assets/uploads/projects/" . $data['file_name'];
		}
		$images = implode(',', $dataInfo);
		return $images;
	}

        
	
}
