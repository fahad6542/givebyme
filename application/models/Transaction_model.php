<?php
if (!defined('BASEPATH')){ exit('No direct script access allowed');}

class Transaction_model extends CI_Model
{
    public $tid;
    public $uid;
    public $pid;
    public $transectionId;
    public $paymentMethod;
    public $payerStatus;
    public $payerMail;
    public $total;
    public $subTotal;
    public $tax;
    public $paymentStatus;
    public $createTime;
    public $updateTime;
    public $gatewayResponse;
    public $inv_id;
    public $installment_id;
    
    function __construct()
    {
        parent::__construct();
    }
    
}