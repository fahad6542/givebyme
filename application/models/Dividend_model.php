<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Added by Fahad
 * fields must match the database  * 
 */
class Dividend_model extends CI_Model
{
    public $d_id;
    public $added_by;
    public $pid;
    public $paid_to;
    public $amount;
    public $transaction_id;
    public $paid_on;
    public $account_no;
    public $insertedOn;
    public $editedOn;
    public $description;
        
    public function __construct()
    {
            parent::__construct();
    }
    
}