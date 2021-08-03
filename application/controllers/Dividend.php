<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * Controller for User
 * Visible after login
 * 
 * Added By Fahad
 */
// FROM projects WHERE pro_type=company
class Dividend extends CI_Controller
{
    //private $upload;

    public function __construct()
    {
        parent::__construct();
        if (! $this->session->userdata('userdata'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        }
        $this->load->model('Dividend_model');
        $this->load->model('Project_model');
        $this->load->helper('form');
        $this->load->model('Country_model');
        $this->load->model('User');
        $this->load->helper('url_helper');
        $this->load->helper(array('form', 'url'));
    }
   
     public function index() {
         //$data['industries'] = $this->getIndustryies();
         $query = $this->db->query("SELECT * FROM `projects` ");
         $data['projects']=$query->result_array();
         
        $this->load->view('admin_dashboard/header');
        $this->load->view('admin_dashboard/Dividend/index', $data);
        $this->load->view('admin_dashboard/footer');
        
     }
     
     public function create($pid){
         
        $sql = "SELECT * FROM `dividend` WHERE pid=".$pid;
        $query = $this->db->query($sql);
        if ($query->num_rows()>0) {
            redirect("Dividend/detail/".$pid);
        }
         $sql = "SELECT * FROM `projects`\n"
    . "INNER JOIN user ON projects.added_by=user.uid\n"
    . "INNER JOIN bank_account_info ON projects.added_by=bank_account_info.userId\n"
    . "WHERE projects.projectValue <= projects.currentInvestmentAmount AND projects.pid=".$pid;
         $query = $this->db->query($sql);
         $data['project']=$query->row_array();
         
         $sql = "SELECT *,((1/100)*investment.inv_amount) As platFormFee FROM `investment` \n"
    . "INNER JOIN user ON investment.u_id=user.uid \n"
    . "LEFT JOIN bank_account_info ON user.uid=bank_account_info.userId  \n"
    . "WHERE investment.status=1 AND investment.pid=" . $pid;
         
         $query = $this->db->query($sql);
         $data['investors']=$query->result_array();
         
         
        $this->load->view('admin_dashboard/header');
        $this->load->view('admin_dashboard/Dividend/create', $data);
        $this->load->view('admin_dashboard/footer');
        
     }
     
     public function save(){
         $user = $this->session->userdata('userdata');
         
         $pid=$this->input->post("pid");
         $paid_to=$this->input->post("paid_to");
         $amount=$this->input->post("amount");
         $transaction_id=$this->input->post("tansaction_id");
         $date=$this->input->post("date");
         
         $data = array(
                'added_by'=>$user["uid"],
                'pid' => $pid,
                'paid_to' => $paid_to,
                'amount' => $amount,
                'transaction_id' => $transaction_id,
                'paid_on' => $date,
        );

        $result=$this->db->insert('dividend', $data);
        if ($result) {
                $this->session->set_flashdata('success', 'payment Added.');
                redirect('Dividend/create');
        } else {
                $this->session->set_flashdata('error', 'Unable to process your request');
        }
     }
     
     public function detail($pid=0){

         $user = $this->session->userdata('userdata');

         $sql = "SELECT p.pid,p.title,p.projectValue,p.location,p.added_by,p.insertedOn,p.lastEditedOn,p.status\n"

        . ",user.uid,user.firstname,user.email,user.streetaddress,user.city,user.image,user.status,user.insertedOn As registeredOn\n"

        . ",bank.id AS bid,bank.title AS btitle,bank.email,bank.card_no,bank.description\n"

        . "FROM `projects` AS p \n"

        . "INNER JOIN user ON p.added_by=user.uid \n"

        . "INNER JOIN bank_account_info AS bank ON p.pid=bank.project \n";

        if ($user["usertype"]=="admin") {

            $sql .= "WHERE p.pid=".$pid;
        }else{
            $sql .= "WHERE p.pid=".$pid . " AND p.added_by=" . $user["uid"] ;
        }

         $query = $this->db->query($sql);
         $data['project']=$query->row_array();
         
         $sql = "SELECT * FROM `transactions`\n"

         . "WHERE pid=".$pid;
         
         $query = $this->db->query($sql);
         $data['donations']=$query->result_array();
         
        if ($user["usertype"]=="admin") {
            $this->load->view('admin_dashboard/header');
            $this->load->view('admin_dashboard/Dividend/detail', $data);
            $this->load->view('admin_dashboard/footer');
        } else {
            $this->load->view('user_dashboard/header');
            $this->load->view('admin_dashboard/Dividend/detail', $data);
            $this->load->view('user_dashboard/footer');
        }
        
     }

     }