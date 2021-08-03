<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}
        
        public function category($catId=0) {

            $sql = "SELECT * FROM `industries` WHERE iid=".$catId;
            $recSet=$this->db->query($sql);
            $data['category'] = $category = $recSet->row_array();

             //related Projects
                $sql = "SELECT p.pid,p.title,p.images,p.pro_type,p.projectValue,donation.Donors,IFNULL(donation.tDonation,0) AS currentInvestmentAmount,donation.createTime,user.account_type \n"
                . "FROM `projects` AS p \n"
                . "LEFT JOIN (SELECT pid,COUNT(pid) AS Donors,SUM(total) AS tDonation,createTime FROM `transactions` GROUP BY pid) AS donation ON p.pid=donation.pid\n"
                . "INNER JOIN user ON p.added_by = user.uid\n";
            
                $sql.=" WHERE p.status=1 ";
                $sql.=" AND FIND_IN_SET (".$catId.",p.industries)>0\n";    
                
                $sql.=" ORDER BY p.title ";
               //echo $sql;
                $recSet=$this->db->query($sql);
                $data['relatedProjects'] = $recSet->result_array();
                //related projects ends
            


            $this->load->view('header1');
            $this->load->view('page/category',$data);
            $this->load->view('footer');
        }
       
}
