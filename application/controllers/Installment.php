<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * Controller for User
 * Visible after login
 * 
 * Added By Fahad
 */
class Installment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (! $this->session->userdata('userdata'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        }
        $this->load->helper('form');
        $this->load->model('User');
        $this->load->helper('url_helper');
        $this->load->helper(array('form', 'url'));
        $this->config->load('2checkout');
    }
   
    /////This action is for investor
    public function index() {
         $user = $this->session->userdata('userdata');
         
         $sql="SELECT investment.pid,investment.inv_id,title,projects.pro_type,projects.projectValue,investment.inv_amount,investment.Qty_installments,investment.status
FROM investment
INNER JOIN projects ON investment.pid = projects.pid
WHERE investment.u_id=".$user["uid"];
        $result = $this->db->query($sql); //WHERE u_id=".$user["uid"]);
        $data['installmentList'] = $result->result_array();
      
                
        $this->load->view('investor/header');
        $this->load->view('investor/installments/index', $data);
        $this->load->view('investor/footer');
     }
     
    public function create() {
            $user = $this->session->userdata('userdata');
            if ($user) {
                $data = array(
                            "pid" => $this->input->post("pid"),
                            "cid" => $this->input->post("cid"),
                            "investAmount" => $this->input->post("investAmount"));
                
                $this->load->view('investor/header');
                $this->load->view('investor/installments/create', $data);
                $this->load->view('investor/footer');

            } else {
                redirect("login");
    
            }
    }
    
    public function save() {
        $user = $this->session->userdata('userdata');
        $data = array(
            "pid" => $this->input->post("pid"),
            "c_id" => $this->input->post("cid"),
            "inv_amount" => $this->input->post("investAmount"),
            "Qty_installments" => $this->input->post("Qty_installments"),
            "u_id"=>$user["uid"]);
        
        $sql = "SELECT * FROM `investment`\n"
        . "WHERE `pid`=".$data["pid"]." AND `u_id`=".$data["u_id"];
       $result = $this->db->query($sql);
       
       
       
       
       if ($result->num_rows()>0) {
           $inv = $result->row_array();
           $this->session->set_flashdata('info', 'You have already invested in this project.');
           redirect("Installment/detail/".$inv["inv_id"]);
       }
    
    if ($this->db->insert('investment',$data)) {
            $this->session->set_flashdata('success', 'Installment request sent added.');
            redirect("Installment/index");
        }else{
            $this->session->set_flashdata('error', 'Unable to save.');
            redirect("Installment/index");
        }
    }
    
    public function detail($inv_id=0){
        
        $chkSettings=$this->config->item('2chkSettings'); 
        $data["chkSettings"]=$chkSettings;
        
        $user = $this->session->userdata('userdata');
        
        if ($inv_id==0) {
            $inv_id=$this->input->post("inv_id");
        }
        if ($inv_id==0 || $inv_id=="") {
             redirect("Installment/index");
        }
        
        //print_r($this->input->post()); die();
        $sql="SELECT projects.pid, projects.title, projects.pro_type, projects.projectValue, projects.maximumInvestments,projects.minimumInvestment,
 investment.* 
FROM investment
INNER JOIN projects ON investment.pid=projects.pid
WHERE investment.inv_id=$inv_id AND investment.u_id=".$user["uid"];
        
        $result = $this->db->query($sql);
        $data['installmentInfo'] =$intinfo= $result->row_array();
        
        $tsql='SELECT * FROM `transactions` WHERE uid='.$user["uid"].' AND pid='.$intinfo["pid"].' AND paymentStatus="completed"';
        
        $result = $this->db->query($tsql);
        $data['transactionLst'] = $result->result_array();
        
        $this->load->view('investor/header');
        $this->load->view('investor/installments/detail', $data);
        $this->load->view('investor/footer');
    }
    
}