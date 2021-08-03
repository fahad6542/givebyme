<?php
class AccountType extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
                
                if (! $this->session->userdata('userdata'))
                {
                    redirect('login'); // the user is not logged in, redirect them!
                }
                
                $this->load->model('Account_type_model');
                $this->load->model('User');
                $this->load->helper('url_helper');
	}
     
        //give user to choose the account
    public function choose()
    {  
        $data['accTypes'] = $this->Account_type_model->get();
        
        $this->load->view('user_dashboard/header1');
        $this->load->view('user_dashboard/AccountType/choose',$data);
        $this->load->view('user_dashboard/footer');
    }
    
    public function set($id=0){
        echo $id;
        if ($id!=0) {
            $user = $this->session->userdata('userdata');
            $obj = new User();
            $obj->copyUser($user);
            $obj->account_type=$id;
           // print_r($obj); die();
            if ($obj->update($obj)) {
                $user['account_type']=$id;
                $this->session->set_userdata('userdata', $user);
                redirect('dashboard');
                /*
                if($obj->account_type==1) {
                    redirect('dashboard');
                }else{
                    //go and add company
                    redirect('DealType/choose');
                } */  
            }else{
                $this->session->set_flashdata('error', 'Error Updating User Record.');
                redirect('AccountType/choose');
            }
        } else {
            $this->session->set_flashdata('error', 'No account type selected.');
            redirect('AccountType/choose');				
        }
            
    }
}

