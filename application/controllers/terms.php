<?php

	class Invest extends CI_Controller {

		public function term(){

			$industries_result = $this->main_model->getAllRecords('industries');
			$data['industries'] = $industries_result->result_array();

			$result = $this->main_model->getAllRecords('projects');
			$data['projects'] = $result->result_array();

			$this->load->view('header1', $data);
			$this->load->view('terms', $data);
			$this->load->view('footer');
		}
	}

?>
