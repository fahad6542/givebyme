<?php

/* 
 * Added by Fahad
 * fields must match the database  * 
 */
class Bank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (! $this->session->userdata('userdata'))
                {
                    redirect('login'); // the user is not logged in, redirect them!
                }
                
        $this->load->helper('form');
        $this->load->model('Bank_model');
        $this->load->helper('url_helper');
    }
    
	public function index($pid=0)
        {
            $user = $this->session->userdata('userdata');
            $whereClause=array('userId' => $user["uid"],
                'project'=>$pid);
            $query = $this->db->get_where('bank_account_info', $whereClause);
            $data= $query->row_array();
            if ($data['id']>0) {
                 redirect("Bank/edit/".$data['id']);
            }else{
                redirect("Bank/create/".$pid);
            }
           
        }

        public function create($pid=0) {
            $user = $this->session->userdata('userdata');
        
            $sql = "SELECT pid,title,pro_type,status \n"
            . "FROM projects \n"
            . "WHERE added_by=".$user["uid"] . " AND pid=".$pid;
            $query = $this->db->query($sql);
        
        if ($query->num_rows()>0) {
            
            $data['project']=$project=$query->row_array();
            $partialViewData["currentTab"]="bankAccount";
            $partialViewData["project"]=(array)$project;
            $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);
          
            $this->load->view('user_dashboard/header');
            $this->load->view('user_dashboard/bankinfo/create', $data);
            $this->load->view('user_dashboard/footer');
        } else {
            $this->session->set_flashdata('error', 'Unable to find your offer');
            redirect("my-dashboard");
        }
        }
        
        public function save() {
            $bInfo = new Bank_model();
            $bInfo->copyBankInfo($this->input->post());
        
            $user = $this->session->userdata('userdata');
            $bInfo->userId=$user["uid"];
            
            $bInfo->account_type=2; //Business
            
            if ($this->db->insert('bank_account_info',$bInfo)) {
                $this->session->set_flashdata('success', 'Bank Info added.');
                $id=$this->db->insert_id();
                redirect("Bank/edit/".$id);
            }else{
                $this->session->set_flashdata('error', 'Unable to save.');
                redirect("Bank/create/".$bInfo->project);
            }
        }
        
        public function edit($id) {
             $user = $this->session->userdata('userdata');
            $query = $this->db->get_where('bank_account_info', array('userId' => $user["uid"], 'id' => $id,));
            $data["Item"]=$bInfo= $query->row_array();
            
            $partialViewData["currentTab"]="bankAccount";
             $sql = "SELECT pid,title,pro_type,status \n"
            . "FROM projects \n"
            . "WHERE added_by=".$user["uid"] . " AND pid=".$bInfo["project"];
            $query = $this->db->query($sql);
        
            $partialViewData["project"]=$query->row_array();
            $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);
          
            $this->load->view('user_dashboard/header');
            $this->load->view('user_dashboard/bankinfo/edit', $data);
            $this->load->view('user_dashboard/footer');
            
        }
        
        public function update() {
            $bInfo = new Bank_model();
            $bInfo->copyBankInfo($this->input->post());
        
            $user = $this->session->userdata('userdata');
            $bInfo->userId=$user["uid"];
            
            $bInfo->account_type=2; //Business
            
            $this->db->where('id', $bInfo->id, 'userId',$user["uid"]);
        
        
            if ($this->db->update('bank_account_info', $bInfo)) {
                
                $this->session->set_flashdata('success', 'Bank Info updated');
                redirect("Bank/index");
            }else{
                
                $this->session->set_flashdata('error', 'Unable to edit.');
                redirect("Bank/edit");
            }
        }
}
