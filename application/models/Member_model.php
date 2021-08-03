<?php

/* 
 * Added by Fahad
 * fields must match the database  * 
 */

class Member_model extends CI_Model
{
    public $id;
    public $mname;
    public $company;
    public $project;
    public $added_by;
    public $designation;
    public $photo;
    public $email_address;
    public $description;
    public $status;    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    //helper functions
    public function copyMember($MemberArray){
        foreach ($MemberArray as $key => $value) {
            $this->$key=$value;
        }
        return $this;
    }
    
    
    
}
