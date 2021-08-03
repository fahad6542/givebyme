<?php
if (!defined('BASEPATH')){ exit('No direct script access allowed');}

class Bank_model extends CI_Model
{
    public $id;
    public $title;
    public $userId;
    public $project;
    public $email;
    public $signature;
    public $account_type;
    public $card_no;
    public $issue_date;
    public $expiry_date;
    public $insertedOn;
    public $editedOn;
    public $status;
    public $description;
    public $client_id;
    public $secret;
    
    function __construct()
    {
        parent::__construct();
    }
    
    //helper functions
    public function copyBankInfo($BankArray){
        foreach ($BankArray as $key => $value) {
            $this->$key=$value;
        }
        return $this;
    }
}