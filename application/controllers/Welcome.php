<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
    Welcome is working like a Page
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
        
        public function aboutus() {
            $this->load->view('header1');
            $this->load->view('Welcome/aboutus');
            $this->load->view('footer');
        }
        
        public function faq() {
            $this->load->view('header1');
            $this->load->view('Welcome/faq');
            $this->load->view('footer');
        }
        
        public function refund() {

            //running Projects
                $sql = "SELECT p.pid,p.title,p.images,p.projectValue,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type,\n"

                    . "(p.projectValue-IFNULL(donation.tDonation,0)) AS remainingAmount,( (IFNULL(donation.tDonation,0)/p.projectValue)*100 ) AS PercentageCompleted\n"

                    . "FROM `projects` AS p LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid INNER JOIN user ON p.added_by = user.uid\n"

                    . "WHERE p.status=1 AND ( (IFNULL(donation.tDonation,0)/p.projectValue)*100 )<100\n"

                    . "ORDER BY ( (IFNULL(donation.tDonation,0)/p.projectValue)*100 ) \n"

                    . "LIMIT 12";

                $recSet=$this->db->query($sql);
                $data['runningProjects'] = $recSet->result_array();
            //running projects ends
            
            $this->load->view('header1');
            $this->load->view('Welcome/refund',$data);
            $this->load->view('footer');
        }

        function how_it_works()
        {
            //trending Projects
                $sql = "SELECT p.pid,p.title,p.images,p.projectValue,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type,\n"

                    . "(p.projectValue-IFNULL(donation.tDonation,0)) AS remainingAmount,( (IFNULL(donation.tDonation,0)/p.projectValue)*100 ) AS PercentageCompleted\n"

                    . "FROM `projects` AS p LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid INNER JOIN user ON p.added_by = user.uid\n"

                    . "WHERE p.status=1 AND ( (IFNULL(donation.tDonation,0)/p.projectValue)*100 )<100\n"

                    . "ORDER BY ( (IFNULL(donation.tDonation,0)/p.projectValue)*100 ) DESC\n"

                    . "LIMIT 12";

                $recSet=$this->db->query($sql);
                $data['trendingProjects'] = $recSet->result_array();
            //trending projects ends
            
            $this->load->view('header1');
            $this->load->view('Welcome/how_it_works',$data);
            $this->load->view('footer');
        }

        public function contactus() {
            $this->load->view('header1');
            $this->load->view('Welcome/contactus');
            $this->load->view('footer');
        }
        
        public function sendEmail() {
            
            $this->load->helper('form');

            $from= $this->input->post("email");
            $subject= $this->input->post("subject");
            $campaignName=$message="";
            $formTitle="Conatct Form";

//optional fields

            if ($this->input->post("formTitle")) {
                $formTitle= $this->input->post("formTitle");
            }

            $campaignName= $this->input->post("campaignName");
            $amount= $this->input->post("amount");

            if ($this->input->post("senderName")!="") {
                $message .= " <br><b> Sender Name: </b>".$this->input->post("senderName");
            }

            $message .= " <br><b> Email: </b>".$this->input->post("email");

            if ($this->input->post("campaignName")!="") {
                $message .= " <br><b>  Campaign Name:</b>" . $this->input->post("campaignName");
            }

            if ($amount!="") {
                $message .= " <br><b>  Refund Amount:</b>".$amount;
            }

            $message .= " <br><b>  Message(Reason): </b>" . $this->input->post("message");

             //Load email library 
            $this->load->library('email'); 

            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from('no-reply@lavniworld.com', $formTitle); 
            $this->email->to("lavnicapital@gmail.com");
            //$this->email->to("fahadtestqa@gmail.com");
            $this->email->subject($subject); 
            $this->email->message($message); 

            //Send mail 
            if($this->email->send()) {
                $this->session->set_flashdata("success","Email sent successfully."); 
            }else{ 
                $this->session->set_flashdata("error","Error in sending Email."); 
            }

            if ($formTitle=="Refund") {
                redirect("refund"); 
            }else{
                redirect("contact-us");    
            }
             
            
        }
}
