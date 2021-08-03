<?php
class Account_type_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
	public function get($id = FALSE)
	{
            if ($id === FALSE)
            {
                $query = $this->db->query("SELECT * FROM account_type WHERE id!=5 AND isactive=1");
                return $query->result_array();
            }
            $query = $this->db->query("SELECT * FROM account_type WHERE id=".$id." AND isactive=1");
            return $query->result_array();
        }
        
       
}