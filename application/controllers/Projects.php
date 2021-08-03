<?php
class Projects extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
                if (! $this->session->userdata('userdata'))
                {
                    redirect('login'); // the user is not logged in, redirect them!
                }
		$this->load->helper('form');
	}

	public function index()
	{
		$user = $this->session->userdata('userdata');
		if ($user) {
			$this->viewProjects();
		} else {
			$this->load->view('login');
		}
	}

	public function loadView()
	{
            $user = $this->session->userdata('userdata');
		$data['industries'] = $this->getIndustryies();
                $sql = "SELECT * FROM `dealtype` WHERE  status=1 ORDER BY position";
                $query = $this->db->query($sql);
                $data['dealTypes']=$query->result_array();
                
                if ($user['usertype']=="admin") {
                    $this->load->view('admin_dashboard/header');
                    $this->load->view('admin_dashboard/add_project', $data);
                    $this->load->view('admin_dashboard/footer');
                } else {
                    $this->load->view('user_dashboard/header');
                    $this->load->view('admin_dashboard/add_project', $data);
                    $this->load->view('user_dashboard/footer');
                }
		
	}

	function addNewProject()
	{
		$user = $this->session->userdata('userdata');
		if ($user) {
			$this->form_validation->set_rules('title', 'Project Name', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
				// $this->form_validation->set_rules('industries', 'Industry', 'required');
				// $this->form_validation->set_rules('country', 'country', 'required');
				// $this->form_validation->set_rules('investmentType', 'Investment Type', 'required');
				// $this->form_validation->set_rules('minimumInvestment', 'Minimum Investment', 'required');
				// $this->form_validation->set_rules('yearOfConstruction', 'Years Of Construction', 'required');

			if ($this->form_validation->run() == false) {
				$this->loadView();
			} else {
				$images = $this->uploadImages($this->input->post("title"));
				$industry = implode(',', $this->input->post("industries"));
				$paymentMethod = implode(',', $this->input->post("paymentMethod"));
				$data = array(
					"title" => $this->input->post("title"),
					"description" => $this->input->post("description"),
                                        "pro_type" => "project",
					"industries" => $industry,
					"images" => $images,
					"location" => $this->input->post("location"),
					"country" => $this->input->post("country"),
					"partner" => $this->input->post("partner"),
					"assetClass" => $this->input->post("assetClass"),
					"contractor" => $this->input->post("contractor"),
					"investmentType" => $this->input->post("investmentType"),
					"investmentCategory" => $this->input->post("investmentCategory"),
					"projectValue" => $this->input->post("projectValue"),
					"estimatedReturn" => $this->input->post("estimatedReturn"),
					"minimumInvestment" => $this->input->post("minimumInvestment"),
					"maximumInvestments" => $this->input->post("maximumInvestments"),
					"dividendBasis" => $this->input->post("dividendBasis"),
					"paymentMethod" => $paymentMethod,
					"numberOfRooms" => $this->input->post("numberOfRooms"),
					"yearOfConstruction" => $this->input->post("yearOfConstruction"),
					"yearOfReConstruction" => $this->input->post("yearOfReConstruction"),
					"durationForComplete" => $this->input->post("durationForComplete"),
					"noOfFloors" => $this->input->post("noOfFloors"),
					"yieldFor1stYear" => $this->checkEmpty($this->input->post("yieldFor1stYear")),
					"yieldFor2ndYear" => $this->checkEmpty($this->input->post("yieldFor2ndYear")),
					"yieldFor3rdYear" => $this->checkEmpty($this->input->post("yieldFor3rdYear")),
					"projectedIRR" => $this->checkEmpty($this->input->post("projectedIRR")),
					"grossIncome" => $this->checkEmpty($this->input->post("grossIncome")),
					"netIncom" => $this->checkEmpty($this->input->post("netIncom")),
					"totalExpenses" => $this->checkEmpty($this->input->post("totalExpenses")),
					"totalDividendYield" => $this->checkEmpty($this->input->post("totalDividendYield"))
				);
				// print_r($data);
				// exit;
				$result = $this->main_model->insert('projects', $data);
				if ($result) {
					$this->session->set_flashdata('success', 'Project Added.');
					redirect('new-project');
				} else {
					$this->session->set_flashdata('error', 'Unable to process your request');
				}
			}
		} else {
			$this->load->view('login');
		}
	}

	function getIndustryies()
	{
		$result = $this->main_model->getAllRecords('industries');
		return $result->result_array();
	}

	function viewProjects($status=1)
	{
                $sql = "SELECT p.pid,p.title,p.industries,p.status,p.images,p.projectValue,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime \n"

        . "FROM `projects` AS p \n"

        . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"

        . " ORDER BY p.pid DESC";

                $query = $this->db->query($sql);
                $data['projects']=$query->result_array();
		
		$data['industries'] = $this->getIndustryies();
		
		$this->load->view('admin_dashboard/header');
		$this->load->view('admin_dashboard/projects', $data);
		$this->load->view('admin_dashboard/footer');
	}

	function editIndustry()
	{
	}
        
        //status disable
	function remove()
	{
            $this->db->where('pid', $this->uri->segment(3));
            $result=$this->db->update('projects',array('status'=>0) );
            
		if ($result) {
			$this->session->set_flashdata('info', 'Project Disabled');
			$this->viewProjects();
		}
	}
        
        //status enabled
	function enableStatus()
	{
            $this->db->where('pid', $this->uri->segment(3));
            $result=$this->db->update('projects',array('status'=>1) );
            
		if ($result) {
			$this->session->set_flashdata('success', 'Status updated');
			$this->viewProjects();
		}
	}

        //status disable
	function disableStatus()
	{
            $this->db->where('pid', $this->uri->segment(3));
            $result=$this->db->update('projects',array('status'=>0) );
            
		if ($result) {
			$this->session->set_flashdata('success', 'Status updated');
			$this->viewProjects();
		}
	}
        
	function edit()
	{
		$data['industries'] = $this->getIndustryies();
		$result = $this->main_model->getWhere('projects', array(
			"pid" => $this->uri->segment(3)
		));
		$data['project'] = $result->row_array();
                
                $query = $this->db->query("SELECT * FROM dealtype WHERE status=1");
                $data['dealTypes']=$query->result_array();
        
		$this->load->view('admin_dashboard/header');
		$this->load->view('admin_dashboard/edit_project', $data);
		$this->load->view('admin_dashboard/footer');
	}

	function update()
	{
		$industry = implode(',', $this->input->post("industries"));
		$paymentMethod = implode(',', $this->input->post("paymentMethod"));
		$data = array(
			"title" => $this->input->post("title"),
			"description" => $this->input->post("description"),
			"industries" => $industry,
			"location" => $this->input->post("location"),
			"country" => $this->input->post("country"),
			"partner" => $this->input->post("partner"),
			"assetClass" => $this->input->post("assetClass"),
			"contractor" => $this->input->post("contractor"),
			"investmentType" => $this->input->post("investmentType"),
			"investmentCategory" => $this->input->post("investmentCategory"),
			"projectValue" => $this->input->post("projectValue"),
			"estimatedReturn" => $this->input->post("estimatedReturn"),
			"minimumInvestment" => $this->input->post("minimumInvestment"),
			"maximumInvestments" => $this->input->post("maximumInvestments"),
			"dividendBasis" => $this->input->post("dividendBasis"),
			"paymentMethod" => $paymentMethod,
			"numberOfRooms" => $this->input->post("numberOfRooms"),
			"yearOfConstruction" => $this->input->post("yearOfConstruction"),
			"yearOfReConstruction" => $this->input->post("yearOfReConstruction"),
			"durationForComplete" => $this->input->post("durationForComplete"),
			"cellingHeight" => $this->input->post("cellingHeight"),
			"noOfFloors" => $this->input->post("noOfFloors"),
			"yieldFor1stYear" => $this->checkEmpty($this->input->post("yieldFor1stYear")),
			"yieldFor2ndYear" => $this->checkEmpty($this->input->post("yieldFor2ndYear")),
			"yieldFor3rdYear" => $this->checkEmpty($this->input->post("yieldFor3rdYear")),
			"projectedIRR" => $this->checkEmpty($this->input->post("projectedIRR")),
			"grossIncome" => $this->checkEmpty($this->input->post("grossIncome")),
			"netIncom" => $this->checkEmpty($this->input->post("netIncom")),
			"totalExpenses" => $this->checkEmpty($this->input->post("totalExpenses")),
			"totalDividendYield" => $this->checkEmpty($this->input->post("totalDividendYield"))
		);
		if ($_FILES['projectImages']) {
			$images = $this->uploadImages($this->input->post("title"));
			$data['images'] = $images;
		}
		$pid = $this->uri->segment(3);
		$result = $this->main_model->update('projects', 'pid', $pid, $data);
		if ($result) {
			$this->session->set_flashdata('success', 'Project updated');
			$this->viewProjects();
				// $this->load->view('admin_dashboard/projects');
		} else {
			$this->session->set_flashdata('error', 'Unable to update project');
		}
	}


	function set_upload_options($projectName, $index)
	{
		$path = "./assets/uploads/projects/";
		if (!is_dir($path)) {
			mkdir($path, 0777, true);
		}
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name'] = 'lavnicapital_' . $projectName . '_' . $index;
		$config['overwrite'] = true;
		return $config;
	}

	function uploadImages($projectName)
	{
		$path = "./assets/uploads/projects/";
		$this->load->library('upload');
		$dataInfo = array();
		$files = $_FILES;
		$cnt = count($_FILES['projectImages']['name']);
		for ($i = 0; $i < $cnt; $i++) {
			$_FILES['projectImages']['name'] = $files['projectImages']['name'][$i];
			$_FILES['projectImages']['type'] = $files['projectImages']['type'][$i];
			$_FILES['projectImages']['tmp_name'] = $files['projectImages']['tmp_name'][$i];
			$_FILES['projectImages']['error'] = $files['projectImages']['error'][$i];
			$_FILES['projectImages']['size'] = $files['projectImages']['size'][$i];
			$this->upload->initialize($this->set_upload_options($projectName, $i + 1));
				// $this->upload->do_upload();
			$this->upload->do_upload('projectImages');
			$data = $this->upload->data();
			$dataInfo[$i] = $path . $data['file_name'];
		}
			// if (!$this->upload->do_upload('projectImages')){
			// 	$error = array('error' => $this->upload->display_errors());
			// }
			// else{
			// 	$data = $this->upload->data();
			// 	return $path.$data['file_name'];
			// }
		$images = implode(', ', $dataInfo);
		return $images;
	}

	function checkEmpty($value){
		if($value){
			return $value;
		}else{
			return "N/A";
		}
	}
}
?>
