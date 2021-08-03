<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Added by Fahad
 * fields must match the database  * 
 */
class Country_model extends CI_Model
{
    public $id;
    public $name;
    public $shortcode;
    public $description;
    public $is_active;
    
    public function __construct()
    {
            parent::__construct();
    }
    
     function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('country', array('id' => $id,'is_active'=>1));
            return $query->row_array();
        }else{
            $query = $this->db->get_where('country', array('is_active'=>1));
            return $query->result_array();
        }
    }
}

