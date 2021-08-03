<?php
class Invest extends CI_Controller
{
	public function index($id=0)
	{
		$industries_result = $this->main_model->getAllRecords('industries');
		$data['industries'] = $industries_result->result_array();
                $where=array("status"=>1);
                if ($id!=0) {
                    $where=array("pro_type"=>$id,"status"=>1);
                }
                
		$result = $this->main_model->getWhere('projects',$where);
        $data['projects'] = $result->result_array();
		$this->load->view('header1', $data);
		$this->load->view('invest', $data);
		$this->load->view('footer');
	}

	function viewBy()
	{
		$industries_result = $this->main_model->getAllRecords('industries');
		$data['industries'] = $industries_result->result_array();
		$industryId = $this->uri->segment(3);
		$query = "SELECT * FROM `projects` WHERE `industries` LIKE '%" . $industryId . "%'";
		$result = $this->db->query($query);
		$data['projects'] = $result->result_array();
		$this->load->view('header1', $data);
		$this->load->view('invest', $data);
		$this->load->view('footer');
	}

	function details()
	{
            $industries_result = $this->main_model->getAllRecords('industries');
            $data['industries'] = $industries_result->result_array();
            
            $data['team']=array();
            $data['document']=array();
            $data['causes']=array();
            $data['stripePlans']=array();
            $data['relatedProjects']=array();

            //$result = $this->main_model->getWhere('projects', array("pid" => $this->uri->segment(3)));
            $sql = "SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type \n"
                . "FROM `projects` AS p \n"
                . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"
                . "INNER JOIN user ON p.added_by = user.uid\n";
            
            $sql=$sql." WHERE p.status=1 AND p.pid = ".$this->uri->segment(3) ." ";
            
            $result= $this->db->query($sql);
            $pcData= $result->row_array();
            $data['project']=$pcData; 

            if ($pcData["pid"]>0) {
                //categories or industries
                $cSql = "SELECT industryName FROM `industries` WHERE iid IN (".$pcData["industries"].")";
                $result= $this->db->query($cSql);
                $data['categories']=$result->result_array();

            if ($pcData['pro_type']=="organization") {
                //causes / Awareness
                $cSql = "SELECT name FROM `cause` WHERE cid IN (".$pcData["cid"].")";
                $result= $this->db->query($cSql);
                $data['causes']=$result->result_array();
            }

                //Team data
                $tsql = "SELECT *  FROM `member` WHERE `project` = ".$pcData["pid"];// . " OR  added_by=".$pcData["added_by"];
                $result= $this->db->query($tsql);
                $data['team']=$result->result_array();

                //documents
                $dsql = "SELECT *  FROM `document` WHERE `project` = ".$pcData["pid"];// . " OR  added_by=".$pcData["added_by"];
                $result= $this->db->query($dsql);
                $data['document']=$result->result_array();

                if ($pcData['pro_type']=="organization") {
                
                    //retreving stripe plans
                     require_once('application/libraries/stripe-php/init.php');
                    \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));

                    $data['stripePlans']=\Stripe\Plan::all(["product" => $pcData["pid"]]);
                    //stripe plans ends
                }

             //related Projects
                $sql = "SELECT p.pid,p.title,p.images,p.projectValue,p.pro_type,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type \n"
                . "FROM `projects` AS p \n"
                . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"
                . "INNER JOIN user ON p.added_by = user.uid\n";
            
                $sql=$sql." WHERE p.status=1 AND p.pid <> ".$pcData["pid"] ." AND  ( ";
                $whereClause="";
                $whereClause.=" p.title LIKE '%" .  $this->db->escape_like_str($pcData["title"])."%' \n";
            
                if (!is_null($pcData["industries"])) {
                    $projectIndustries = explode(",", $pcData['industries']);
                    foreach ($projectIndustries as $value) {
                        $whereClause.=" OR FIND_IN_SET (".$value.",p.industries)>0\n";    
                    } 
                }
            
                $whereClause.=" OR p.country LIKE '%" . $pcData["country"]."%' \n";

                $whereClause.= "OR p.location LIKE '%".$pcData["location"]."%' \n";
                
                $sql=$sql.$whereClause.") ORDER BY p.title ";
               //echo $sql;
                $recSet=$this->db->query($sql);
                $data['relatedProjects'] = $recSet->result_array();
                //related projects ends
            }

            $this->load->view('header1', $data);
            if ($pcData['pro_type']=="organization") {
                $this->load->view('org_detail', $data);
            }else{
                $this->load->view('project_detail', $data);
            }
            $this->load->view('footer');
	}
        
        public function installments() {
            
            $user = $this->session->userdata('userdata');
            if ($user['account_type'] == 1) {
                $data = array(
                            "pid" => $this->input->post("pid"),
                            "cid" => $this->input->post("cid"),
                            "investAmount" => $this->input->post("investAmount"));
                
                $this->load->view('investor/header');
                $this->load->view('investor/installments/create', $data);
                $this->load->view('investor/footer');

            } else {
                redirect("login");
    
            }
        }
}
?>

