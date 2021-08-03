<?php 
class User extends CI_Model{
    
    public $uid;
    public $firstname;
    public $email;
    public $password;
    public $cpassword;
    public $streetaddress;
    public $city;
    public $birthcountry;
    public $residentcountry;
    public $income;
    public $image;
    public $usertype;
    public $idCard;
    public $bankStatement;
    public $account_type;
    public $status;
    public $deal_type;


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    
    
    function return_user(){
        
        $query = $this->db->query("select * from register");
        $query->result_array();
        print_r($query->result_array());
    }
    
   /* Added by Fahad */
    
    public function copyUser($userArray){
        foreach ($userArray as $key => $value) {
            $this->$key=$value;
        }
        return $this;
    }
    
    public function update($user=False)
    {
        if ($user!=False) {
             $this->db->set($user); 
             $this->db->where("uid",$user->uid ); 
             return $this->db->update("user", $user);
        }
    }
    
    
    
}
?>