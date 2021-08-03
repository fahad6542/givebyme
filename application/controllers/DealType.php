<?php
class DealType extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
                if (! $this->session->userdata('userdata'))
                {
                    redirect('login'); // the user is not logged in, redirect them!
                }
                $this->load->model('DealType_model');
                $this->load->model('User');
                $this->load->helper('url_helper');
	}
        
        //for admin only
        public function create() {
            $user = $this->session->userdata('userdata');
            
            if ($user['usertype']=="admin") {
                $query = $this->db->query("SELECT * FROM dealtype WHERE status=1");
                $data['dealLst']=$query->result_array();
                
                $this->load->view('admin_dashboard/header');
                $this->load->view('admin_dashboard/DealType/create',$data);
                $this->load->view('admin_dashboard/footer');
            }else{
                $this->session->set_flashdata('info', 'Sorry your access denied.');
                redirect(base_url());
            }
        }
        
        public function save() {
            $user = $this->session->userdata('userdata');
            
            if ($user['usertype']=="admin") {
                $dtOnj = new DealType_model();
                $dtOnj = $dtOnj->copyDealType( $this->input->post());
                $dtOnj->status=1;
                $dtOnj->position=0;
                
                if ($this->db->insert('dealtype',$dtOnj)) {
                    $this->session->set_flashdata('success', 'Deal Type Added.');
                    redirect("DealType/create/");
                }else{
                    $this->session->set_flashdata('error', 'Unable to save.');
                    redirect("DealType/create/");
                }

            }else{
                $this->session->set_flashdata('info', 'Sorry your access denied.');
                redirect(base_url());
            }
        }
        
        public function edit($id) {
            $user = $this->session->userdata('userdata');
            
            if ($user['usertype']=="admin") {
                $query = $this->db->query("SELECT * FROM dealtype WHERE status=1");
                $data['dealLst']=$query->result_array();
                
                $query = $this->db->query("SELECT * FROM dealtype WHERE id=".$id);
                
                //print_r($query->row_array()); die();
                $data['dealType']=$query->row_array();
                
                $this->load->view('admin_dashboard/header');
                $this->load->view('admin_dashboard/DealType/edit',$data);
                $this->load->view('admin_dashboard/footer');
            }else{
                $this->session->set_flashdata('info', 'Sorry your access denied.');
                redirect(base_url());
            }
        }
        
        public function update() {
           $user = $this->session->userdata('userdata');
            
            if ($user['usertype']=="admin") {
                $dtOnj = new DealType_model();
                $dtOnj = $dtOnj->copyDealType( $this->input->post());
                $dtOnj->status=1;
                $dtOnj->position=0;
                
                $this->db->where('id', $dtOnj->id);
        
                //print_r($dtOnj); die();
            if ($this->db->update('dealtype', $dtOnj)) {
                //echo $this->db->last_query();                die();
                    $this->session->set_flashdata('success', 'Deal Type updated.');
                    redirect("DealType/create/");
                }else{
                    $this->session->set_flashdata('error', 'Unable to update.');
                    redirect("DealType/create/");
                }

            }else{
                $this->session->set_flashdata('info', 'Sorry your access denied.');
                redirect(base_url());
            }
        }
        
        public function delete($id) {
            $user = $this->session->userdata('userdata');
            
            if ($user['usertype']=="admin") {
                if($this->db->delete('dealtype', array('id' => $id))){
                    $this->session->set_flashdata('success', 'Deal Type Deleted.');
                    redirect("DealType/create/");
                } else {
                    $this->session->set_flashdata('error', 'Unable to delete.');
                    redirect("DealType/create/");    
                }
            }else{
                 $this->session->set_flashdata('info', 'Sorry your access denied.');
                redirect(base_url());
            }
        }


        //give user to choose the account
    public function choose()
    {  
        $query = $this->db->query("SELECT * FROM dealtype WHERE status=1");
        $data['dealTypes']=$query->result_array();
        
        $this->load->view('user_dashboard/header1');
        $this->load->view('user_dashboard/dealType/choose',$data);
        $this->load->view('user_dashboard/footer');
    }
    
    public function set($id=False){
        
        if ($id!=False) {
            $user = $this->session->userdata('userdata');
            $obj = new User();
            $obj->copyUser($user);
            $obj->deal_type=$id;
            //echo "<pre>";
            if ($obj->update($obj)) {
                //print_r($obj); die();
                $user['deal_type']=$id;
                $this->session->set_userdata('userdata', $user);
                if ($user['deal_type']==1) {
                    redirect('Company');
                } elseif($user['deal_type']==2) {
                    redirect('UserProjects');
                }else{
                    redirect('/');
                }
                    
            }else{
                $this->session->set_flashdata('error', 'Error Updating User Record.');
                redirect('DealType/choose');
            }
        } else {
            $this->session->set_flashdata('error', 'No offer selected.');
            redirect('DealType/choose');				
        }
            
    }
}