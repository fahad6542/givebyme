<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TwoCheckOut extends CI_Controller
{

    //private $upload;

    public function __construct()
    {
        parent::__construct();
        if (! $this->session->userdata('userdata'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        }
        $this->config->load('2checkout');
        $this->load->helper('form');
        $this->load->model('Transaction_model');
        $this->load->helper('url_helper');
    }
    
    public function make_payment(){
        $transt=new Transaction_model();
        
        $chkSettings=$this->config->item('2chkSettings'); 
        
        //echo "<pre>";
        //print_r($this->input->get());
        
        $user = $this->session->userdata('userdata');
       
        $transt->uid=$user["uid"];
        $transt->pid=$this->input->get("li_0_product_id");
        $transt->transectionId=$this->input->get("order_number");
        $transt->paymentMethod=$this->input->get("pay_method");
        $transt->payerStatus="VERIFIED";
        $transt->payerMail=$this->input->get("email");
        $transt->total=$this->input->get("total");
        $transt->subTotal=$this->input->get("total");
        $transt->tax=0;
        $transt->paymentStatus="completed"; //default value
        $transt->gatewayResponse=json_encode($_REQUEST);
        $transt->inv_id=$this->input->get("merchant_order_id");
        $transt->installment_id=0;
    
        //verifying data Checksum way
        $hashSecretWord = $chkSettings["secretWord"]; //2Checkout Secret Word
        $hashSid = $chkSettings["sid"];//901404645; //2Checkout account number
        $hashTotal = $transt->total; //Sale total to validate against
        $hashOrder = $transt->transectionId; //2Checkout Order Number
        
        if ($chkSettings["islive"]) {
            $StringToHash = strtoupper(md5($hashSecretWord . $hashSid . $hashOrder . $hashTotal)); //live
        }else{
             $StringToHash = strtoupper(md5($hashSecretWord . $hashSid . "1" . $hashTotal )); //sandbox
        }
        
        
        if ($StringToHash != $this->input->get("key")) {
               $transt->paymentStatus="notverified";
        }  
        
      if ($this->db->insert('transactions',$transt)) {
                $this->session->set_flashdata('success', 'Transaction completed Successfuly.');
                redirect("installment/detail/".$transt->inv_id);
        }else{
            $this->session->set_flashdata('error', 'Unable save transaction.');
            redirect("installment/detail/".$transt->inv_id);
        }
    }
}