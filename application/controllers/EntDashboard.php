<?php
//Investors Dashboard
class EntDashboard extends CI_Controller
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
            
            $sql = "SELECT COUNT(*) AS Donors,SUM(total) AS tDonation FROM `transactions`\n"

    . "WHERE pid IN (SELECT pid AS total FROM `projects` WHERE added_by=".$user["uid"]." AND status=1)";

            $query = $this->db->query($sql);

            $data['investment']=$query->row_array();
            
            $sql=" SELECT Count(*) AS totalPro, SUM(projectValue) AS totalAmount FROM `projects` WHERE added_by=".$user["uid"];
            $query = $this->db->query($sql);
            $data['pro']=$query->row_array();
            
            
            $this->load->view('user_dashboard/header');
            $this->load->view('user_dashboard/EntDashboard', $data);
            $this->load->view('user_dashboard/footer');
        }
}