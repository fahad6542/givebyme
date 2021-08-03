<?php
/*
Added By Fahad
 *  */
class Member extends CI_Controller
{
    public function __construct()
    {
         parent::__construct();
         if (! $this->session->userdata('userdata'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        }
        $this->load->helper('form');
        $this->load->model('Member_model');
        $this->load->model('Company_model');
        $this->load->helper('url_helper');
    }
    
    //Display create form
    public function create($pid=0){
        $user = $this->session->userdata('userdata');
        
         $sql = "SELECT pid,title,pro_type,status \n"
        . "FROM projects \n"
        . "WHERE added_by=".$user["uid"] . " AND pid=".$pid;
        $query = $this->db->query($sql);
        
        if ($query->num_rows()>0) {
            
            $data['project']=$project=$query->row_array();
            $data['memberList'] = array();
            $result = $this->db->query("SELECT * FROM member WHERE added_by=".$user["uid"]." AND project=".$project["pid"]);

            if ($result) {
                $data['memberList'] = $result->result_array();
            }
            $partialViewData["currentTab"]="member";
            $partialViewData["project"]=(array)$project;
            $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);


            $this->load->view('user_dashboard/header');
            $this->load->view('user_dashboard/member/create', $data);
            $this->load->view('user_dashboard/footer');
            
        }else{
            $this->session->set_flashdata('error', 'Unable to find your offer');
            redirect("/my-dashboard");
        }
    }
    
    public function save(){
        $member = new Member_model();
        $member->copyMember($this->input->post());
        
        $user = $this->session->userdata('userdata');
      
        $member->status=1;
        $member->added_by=$user["uid"];
        
//upload image
        $config1['upload_path']          = './uploads/members/';
        $config1['allowed_types']        = 'gif|jpg|png';
        $config1['max_size']             = 2000;
        $config1['max_width']            = 1024;
        $config1['max_height']           = 768;
        $config1['file_name']            = $member->mname;

        $this->load->library('upload',$config1);
        
        if ( ! $this->upload->do_upload('photo'))
        {
            $this->session->set_flashdata('error', 'Unable to save. Due to '.$this->upload->display_errors());
            redirect("member/create/".$member->project);
        }
        
        $data = array('upload_data' => $this->upload->data());
        $member->photo=$data["upload_data"]["file_name"];
        
        if ($this->db->insert('member',$member)) {
            $this->session->set_flashdata('success', 'Team member added.');
            redirect("member/create/".$member->project);
        }else{
            $this->session->set_flashdata('error', 'Unable to save.');
            redirect("member/create/".$member->project);
        }
         
    }
    
    public function remove($id) {
        $user = $this->session->userdata('userdata');
        $sql="SELECT * FROM member WHERE added_by=".$user["uid"]." AND id=".$id;
        $res = $this->db->query($sql);
        $dataMember = $res->row_array();
        
	$file= './uploads/members/'.$dataMember["photo"];
        //print_r($dataDocument); die();
        $this->db->where('id', $id);
        $result=$this->db->delete('member');
        if ($result) {
            if (file_exists($file)) {
               unlink($file);
            }
            $this->session->set_flashdata('success', 'Team member deleted.');
            redirect("member/create/".$dataMember["project"]);
        }else{
            $this->session->set_flashdata('error', 'Unable to delete.');
            redirect("member/create/".$dataMember["project"]);
            
        }
        
    }
        
}