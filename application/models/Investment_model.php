<?php

/* 
 * Added by Fahad
 * fields must match the database  * 
 */


class Investment_model extends CI_Model
{
    public $inv_id;
    public $p_id;
    public $c_id;
    public $inv_amount;
    public $u_id;
    public $Qty_installments;
    public $status;
    public $offer_date;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function copyInvestment($InvestmentArray){
        foreach ($InvestmentArray as $key => $value) {
            $this->$key=$value;
        }
        return $this;
    }
}

