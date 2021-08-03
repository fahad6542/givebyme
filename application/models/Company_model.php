<?php

/* 
 * added by Fahad
 * company is the mirror of the projects table
 */
class Company_model extends CI_Model
{
    public	$id;
    public	$user_id;
    public	$cname;
    public	$web_url;
    public	$address;
    public	$country;
    public	$state;
    public	$city;
    public	$email;
    public	$social_links;
    public	$logo;
    public	$video_url;
    public	$description;
    public	$isactive;
    
    public function __construct()
    {
            parent::__construct();
    }
    
    public function copyCompany($comapnyArray){
        foreach ($comapnyArray as $key => $value) {
          
            if ($key=='fb' OR $key=='tw' OR $key=='insta') {
                continue;
            }
            $this->$key=$value;
        }
        $this->social_links=$this->SocialLinksToJson($comapnyArray);
        return $this;
    }
   
    //save company to database
    public function set_company(Company_model $company)
    {
        $user = $this->session->userdata('userdata');
        $company->user_id=$user["uid"];
        $company->isactive=1;
        return $this->db->insert('company', $company);
    }
    
     public function getCompanyByUser($user_id) {
        $result = $this->db->get_where('company', array("user_id" => $user_id));
        return $result->row_array();
     }
    
    //helper functions
        
    public function SocialLinksToJson($LinkArray){
        $arr = array('fb' => $LinkArray["fb"], 'tw' => $LinkArray["tw"], 'insta' => $LinkArray["insta"]);
        return json_encode($arr);
    }


}

