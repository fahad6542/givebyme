<?php
/* 
 * Added by Fahad
 * fields must match the database  * 
 */
class UserProjects extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
                if (! $this->session->userdata('userdata'))
                {
                    redirect('login'); // the user is not logged in, redirect them!
                }
		$this->load->helper('form');
                //$this->load->model('Company_model');
                $this->load->model('Project_model');
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
          	$data['industries'] = $this->getIndustryies();
                
                $partialViewData["currentTab"]="UserProjects";
                $proObj=new Project_model();
                $proObj->pid=0;
                $proObj->pro_type="project";
                $partialViewData["project"]=(array)$proObj;
                
                $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);
                
                
                    $this->load->view('user_dashboard/header');
                    $this->load->view('user_dashboard/projects/add_project', $data);
                    $this->load->view('user_dashboard/footer');
                
		
	}

	function addNewProject($cId=0)
	{
            $user = $this->session->userdata('userdata');
            
		if ($user) {
                    $this->form_validation->set_rules('title', 'Project Name', 'required');
                    $this->form_validation->set_rules('description', 'Description', 'required');
				
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
					"totalDividendYield" => $this->checkEmpty($this->input->post("totalDividendYield")),
                                        "added_by" =>$user["uid"],
                                        //"company" =>$companyId
				);
				// print_r($data);
				// exit;
				$result = $this->main_model->insert('projects', $data);
                                $insert_id = $this->db->insert_id();

                                if ($result) {
					$this->session->set_flashdata('success', 'Project Added.');
                                        redirect('bank/index/'.$insert_id);
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

	function viewProjects()
	{
		$user = $this->session->userdata('userdata');
                $result = $this->main_model->getWhere('projects', array("added_by" =>$user["uid"],"pro_type"=>"project"));
                if (count($result->result_array())<1) {
                    redirect("UserProjects/addNewProject");
                }
                $data['industries'] = $this->getIndustryies();
		$data['projects'] = $result->result_array();
                
                $partialViewData["currentTab"]="UserProjects";
                $proObj=new Project_model();
                $proObj->pid=0;
                $proObj->pro_type="project";
                $partialViewData["project"]=(array)$proObj;
                $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);
                
		$this->load->view('user_dashboard/header');
		$this->load->view('user_dashboard/projects/projects', $data);
		$this->load->view('user_dashboard/footer');
	}

	function editIndustry()
	{
	}

	function remove()
	{
		$result = $this->main_model->remove('projects', 'pid', $this->uri->segment(3));
		if ($result) {
			$this->session->set_flashdata('success', 'Project Deleted');
			$this->viewProjects();
		}
	}

	function edit($pid=0)
	{
            
            if ($pid==0) {
                $pid=$this->uri->segment(3);
            }
		$data['industries'] = $this->getIndustryies();
		$result = $this->main_model->getWhere('projects', array("pid" =>$pid));
		$data['project'] = $result->row_array();
                
                $partialViewData["currentTab"]="UserProjects";
                $proObj=new Project_model();
                $proObj->pid=0;
                $proObj->pro_type="project";
                $partialViewData["project"]=(array)$proObj;
                $data['nav_tabs']= $this->load->view('user_dashboard/partial/navTabs',$partialViewData,TRUE);
        
		$this->load->view('user_dashboard/header');
		$this->load->view('user_dashboard/projects/edit_project', $data);
		$this->load->view('user_dashboard/footer');
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
				// $this->load->view('user_dashboard/projects');
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