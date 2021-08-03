<?php

/* 
 * 
 * Added By Fahad
 */
class Document_model extends CI_Model
{
    public $id;
    public $title;
    public $file_name;
    public $added_by;
    public $company; //depriciated
    public $project;
    public $discription;
    public $available_to;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function copyDocument($documentArray){
        foreach ($documentArray as $key => $value) {
            $this->$key=$value;
        }
        return $this;
    }
    
     public function insert($data = array()){
        $insert = $this->db->insert_batch('document',$data);
        return $insert?true:false;
    }
}
