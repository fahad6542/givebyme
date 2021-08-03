<?php
class Donation extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
                if (! $this->session->userdata('userdata'))
                {
                    redirect('login'); // the user is not logged in, redirect them!
                }
	}
        
    public function index($pid=0)
    {
        $user = $this->session->userdata('userdata');
       
           $sql = "SELECT projects.title,projects.projectValue,transactions.* FROM transactions \n"

        . "INNER JOIN projects ON transactions.pid=projects.pid\n"

        . "WHERE projects.added_by=".$user["uid"]."  \n";

        if ($pid>0) {
           $sql .= " AND projects.pid=".$pid;
        }
        $sql .= "ORDER BY projects.pid";

        $query = $this->db->query($sql);
        $data['transactions']=$query->result_array();
            
            
            $this->load->view('user_dashboard/header');
            $this->load->view('user_dashboard/Donation/index', $data);
            $this->load->view('user_dashboard/footer');
    }
}
?>

