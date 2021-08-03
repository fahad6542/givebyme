<?php
	class Main_model extends CI_Model{
		function __construct(){
			$this->load->database();
		}

		public function getAllRecords($table){
			return $this->db->get($table);
		}

		public function getWhere($table, $where){
			return $this->db->get_where($table, $where);
		}

		public function insert($table, $data){
			return $this->db->insert($table, $data);
		}

		public function update($table, $column, $id, $data){
			$this->db->where($column, $id);
			return $this->db->update($table, $data);
		}

		public function remove($table, $column, $id){
			$this->db->where($column, $id);
			return $this->db->delete($table);
		}

		public function getWhereDesc($table, $where){
		    $this->db->order_by("lid", "DESC");
			return $this->db->get_where($table, $where);
		}

		public function query($query) {
			$result = $this->db->query($query);
			return $result;
		}
	}
?>
