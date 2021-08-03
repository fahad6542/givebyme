<?php
class Industries extends CI_Controller
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

		// function _remap($method, $args){
		// 	if (method_exists($this, $method)){
		// 		$this->$method($args);
		// 	}
		// 	else{
		// 		$this->Index($method, $args);
		// 	}
		// }

	public function index()
	{
		$user = $this->session->userdata('userdata');
		if ($user) {
			$this->loadView();
		} else {
			$this->load->view('login');
		}
	}

	public function loadView()
	{
		$data['industries'] = $this->getIndustryies();
		$this->load->view('admin_dashboard/header');
		$this->load->view('admin_dashboard/industries', $data);
		$this->load->view('admin_dashboard/footer');
	}

	function addnewIndustry()
	{
		$this->form_validation->set_rules('industryName', 'Industry Name', 'required');
		if ($this->form_validation->run() == false) {
			$this->loadView();
		} else {
/*
			//upload image
        $config1['upload_path']          = './uploads/industry/';
        $config1['allowed_types']        = 'gif|jpg|png';
        $config1['max_size']             = 2000;
        $config1['max_width']            = 1024;
        $config1['max_height']           = 768;
        $config1['file_name']            = $member->mname;

        $this->load->library('upload',$config1);
        
        if ( ! $this->upload->do_upload('photo'))
        {
            $this->session->set_flashdata('error', 'Unable to save. Due to '.$this->upload->display_errors());
            redirect("member/create/".$member->project);
        }
        
        $data = array('upload_data' => $this->upload->data());
        $member->photo=$data["upload_data"]["file_name"];
        /////////////
        */
			$data = array(
				"industryName" => $this->input->post("industryName"),
				"description" => $this->input->post("description")
			);
			$result = $this->main_model->insert('industries', $data);
			$this->session->set_flashdata('success', 'Industry added');
			$this->loadView();
		}
	}

	function getIndustryies()
	{
		$result = $this->main_model->getAllRecords('industries');
		return $result->result_array();
	}

	function remove()
	{
		$result = $this->main_model->remove('industries', 'iid', $this->uri->segment(3));
		if ($result) {
			$this->session->set_flashdata('success', 'Industry Deleted');
			$this->loadView();
		}
	}

		// function edit() {
		// 	$result = $this->main_model->remove('industries', 'iid', $this->uri->segment(3));
		// 	if($result){
		// 		$this->loadView();
		// 	}
		// }
		//
		// function update() {
		// 	$result = $this->main_model->remove('industries', 'iid', $this->uri->segment(3));
		// 	if($result){
		// 		$this->loadView();
		// 	}
		// }
}
?>
