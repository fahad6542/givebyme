<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * Controller for User
 * Visible after login
 * This is basically Compain 
 * Comapain Types (pro_type) Project and Company
 * --Mirrior of project Table
 * 
 * Added By Fahad
 */
class Withdraw extends CI_Controller
{

    //private $upload;

    public function __construct()
    {
        parent::__construct();
        if (! $this->session->userdata('userdata'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        }
        $this->load->model('Project_model');
        $this->load->helper('form');
        $this->load->model('Country_model');
        $this->load->model('User');
        $this->load->helper('url_helper');
        $this->load->helper(array('form', 'url'));
    }

    public function request_mail($pid=0){
        
         $user = $this->session->userdata('userdata');

         $sql = "SELECT p.*,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type \n"
                . "FROM `projects` AS p \n"
                . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"
                . "INNER JOIN user ON p.added_by = user.uid\n";
            
         $sql .=" WHERE p.status=1 AND p.pid = ". $pid ." AND p.added_by=" . $user["uid"] ." ";

            $result= $this->db->query($sql);
            $pcData= $result->row_array();

            $sql = "SELECT * FROM `bank_account_info` WHERE `project`>0";
            $result= $this->db->query($sql);
            $bankInfo= $result->row_array();

            $from=  $user["firstname"];
            $subject= "Withdraw Request of ".$pcData["title"];
            $message="";
            
            $message .= " Sender Name:".$user["firstname"];
            $message .= "<br> Campaign Name:" . $pcData["title"];
            $message .= " Withdraw Amount:" . $pcData["currentInvestmentAmount"]; 

            $message .= " <h3>Bank/Card Info</h3>";
            $message .= " Title/Name: ".$bankInfo["title"];
            $message .= " Email: ".$bankInfo["email"];
            $message .= " Card Number: ".$bankInfo["card_no"];
            $message .= " Description: ".$bankInfo["description"];

             //Load email library 
            $this->load->library('email'); 

            $this->email->from($from, "Withdraw"); 
            $this->email->to("lavnicapital@gmail.com");
            //$this->email->to("fahadtestqa@gmail.com");
            $this->email->subject($subject." ". $from); 
            $this->email->message($message); 

            

//$this->email->send();
//echo $message; die();
            //Send mail 
            if($this->email->send()) {
                $this->db->set('status', 2);
                $this->db->where('pid', $pid);
                $this->db->update('projects');
                $this->session->set_flashdata("success","Email sent successfully."); 
            }else{ 
                $this->session->set_flashdata("error","Error in sending Email."); 
            }

            redirect("Company/index/company"); 
            
    }
  }