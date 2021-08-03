<?php
class Transections extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
                if (! $this->session->userdata('userdata'))
                {
                    redirect('login'); // the user is not logged in, redirect them!
                }
	}
        
    public function index()
    {
        $user = $this->session->userdata('userdata');
       
        $projects_result = $this->main_model->getAllRecords('projects');
        $data['projects'] = $projects_result->result_array();
        if ($user['usertype'] == "admin") {
            $transections_result = $this->main_model->getAllRecords('transactions');
            $data['transactions'] = $transections_result->result_array();
        } else {
            $transections_result = $this->main_model->getWhere('transactions', array(
                "uid" => $user['uid']
            ));
            $data['transactions'] = $transections_result->result_array();
        }
        
        if ($user['usertype'] == "admin") {
            $this->load->view('admin_dashboard/header');
            $this->load->view('user_dashboard/transaction', $data);
            $this->load->view('admin_dashboard/footer');
        }elseif ($user["account_type"]==1) {
            $this->load->view('investor/header');
            $this->load->view('user_dashboard/transaction', $data);
            $this->load->view('investor/footer');
        }else{
            $this->load->view('user_dashboard/header');
            $this->load->view('user_dashboard/transaction', $data);
            $this->load->view('user_dashboard/footer');
        }
    }
}
?>

