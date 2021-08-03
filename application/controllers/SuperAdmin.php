<?php
class SuperAdmin extends CI_Controller
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
		if ($user['usertype'] == "admin") {
			
			$sql = "SELECT COUNT(*) AS totalProjects FROM `projects`";
			$query = $this->db->query($sql);
         	$data['pCount']=$query->row_array();

         	$sql = "SELECT COUNT(*) AS totalDonors FROM `transactions`";
			$query = $this->db->query($sql);
         	$data['tD']=$query->row_array();

			$this->db->select_sum('total');
			$this->db->from('transactions');
			$query = $this->db->get();
			$data['total_investment'] = $query->row_array()['total'];

			$query = "SELECT COUNT(DISTINCT pid) AS 'count' FROM transactions";
			$project_count_result = $this->db->query($query)->row_array()['count'];
			$data['project_count'] = $project_count_result;

			$last_investment = $this->db->order_by('tid', "desc")->limit(1)->get('transactions')->row_array();
			$data['user_data'] = $this->session->userdata('userdata');
			$data['last_investment'] = $last_investment;

			$this->load->view('admin_dashboard/header');
			$this->load->view('admin_dashboard/index', $data);
			$this->load->view('admin_dashboard/footer');

		} else if ($user['usertype'] == "user") {
			redirect('dashboard');
		} else {
			$this->load->view('login');
		}
	}
}
?>
