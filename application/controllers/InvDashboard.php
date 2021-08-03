<?php
//Investors Dashboard
class InvDashboard extends CI_Controller
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
            $sql="SELECT count(*) AS total,sum(inv_amount) AS amount FROM `investment` WHERE status=1 AND u_id=".$user["uid"];
            $query = $this->db->query($sql);
            $data['accepted_inv']=$query->row_array();
            
            $sql="SELECT count(*) AS total,sum(inv_amount) AS amount FROM `investment` WHERE status=2 AND u_id=".$user["uid"];
            $query = $this->db->query($sql);
            $data['pending_inv']=$query->row_array();
            
            $sql="SELECT count(*) AS total,sum(inv_amount) AS amount FROM `investment`  WHERE status=0 AND u_id=".$user["uid"];
            $query = $this->db->query($sql);
            $data['rejec_Inv']=$query->row_array();
            
            $this->load->view('investor/header');
            $this->load->view('investor/InvDashboard', $data);
            $this->load->view('investor/footer');
        }
}