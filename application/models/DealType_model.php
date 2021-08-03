<?php
if (!defined('BASEPATH')){ exit('No direct script access allowed');}

class DealType_model extends CI_Model
{
    public $id;
    public $name;
    public $description;
    public $image;
    public $ddval;
    public $insertedOn;
    public $editedON;
    public $status;
    public $isDeleteAble;
    public $position;
    
    function __construct()
    {
        parent::__construct();
    }
    
     public function copyDealType($dealTypeArray){
        foreach ($dealTypeArray as $key => $value) {
          
            $this->$key=$value;
        }
        return $this;
    }
    
}