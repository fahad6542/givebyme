<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * Controller for User
 * Visible after login
 * 
 * Added By Fahad
 * Controller for Entrapenure
 */
class EInstallment extends CI_Controller
{

    //private $upload;

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
    }
   
    /////This action is for entrapenure
     public function index() {
         //show my compny investments
         $user = $this->session->userdata('userdata');
         
         $sql="SELECT projects.pid,projects.title, projects.pro_type,projects.projectValue,user.firstname,
 investment.* 
FROM projects
INNER JOIN investment ON projects.pid = investment.pid
INNER JOIN user ON investment.u_id=user.uid
WHERE projects.added_by=".$user["uid"];
        $result = $this->db->query($sql); //WHERE u_id=".$user["uid"]);
        $data['installmentList'] = $result->result_array();
        
        $this->load->view('user_dashboard/header');
        $this->load->view('user_dashboard/eInstallment/index', $data);
        $this->load->view('user_dashboard/footer');
     }
     
     function detail($id=0){
         $user = $this->session->userdata('userdata');
         $sql="SELECT projects.pid, projects.title, projects.pro_type, projects.projectValue, projects.maximumInvestments,projects.minimumInvestment,
user.*, investment.* 
FROM investment
INNER JOIN projects ON investment.pid=projects.pid
INNER JOIN user ON investment.u_id=user.uid
WHERE investment.inv_id=".$id;
          //echo $sql;         die();
        $result = $this->db->query($sql);
        $data['installmentInfo'] =$intinfo= $result->row_array();
        
        $tsql='SELECT * FROM `transactions` WHERE uid='.$intinfo["uid"].' AND pid='.$intinfo["pid"].' AND paymentStatus="completed"';
        $result = $this->db->query($tsql);
        $data['transactionLst'] = $result->result_array();
        
        $this->load->view('user_dashboard/header');
        $this->load->view('user_dashboard/eInstallment/detail', $data);
        $this->load->view('user_dashboard/footer');
     }
     
    public function update(){
        $inv_id=$this->input->post("inv_id");
        $data = array(
            "status" => $this->input->post("status"),
            "noteByentra" => $this->input->post("noteByentra"));
        
        $this->db->where("inv_id",$inv_id);
        if ($this->db->update('investment',$data)) {
            $this->session->set_flashdata('success', 'Inestment status updated.');
            redirect("eInstallment");
        }else{
            $this->session->set_flashdata('error', 'Unable to update.');
            redirect("einstallment/detail/".$inv_id);
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
   
    
    if ($this->db->insert('investment',$data)) {
            $this->session->set_flashdata('success', 'Installment request sent added.');
            redirect("Installment/index");
        }else{
            $this->session->set_flashdata('error', 'Unable to save.');
            redirect("Installment/index");
        }
    }
    
}