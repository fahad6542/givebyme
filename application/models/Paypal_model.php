<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Paypal_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

	/* This function create new Service. */

    function create($Total, $SubTotal, $Tax, $PaymentMethod, $PayerStatus, $PayerMail, $saleId, $CreateTime, $UpdateTime, $State, $uid, $pid)
    {
        $this->db->set('transectionId', $saleId);
        $this->db->set('paymentMethod', $PaymentMethod);
        $this->db->set('payerStatus', $PayerStatus);
        $this->db->set('payerMail', $PayerMail);
        $this->db->set('total', $Total);
        $this->db->set('subTotal', $SubTotal);
        $this->db->set('tax', $Tax);
        $this->db->set('paymentStatus', $State);
        $this->db->set('createTime', $CreateTime);
        $this->db->set('updateTime', $UpdateTime);
        $this->db->set('uid', $uid);
        $this->db->set('pid', $pid);
        $this->db->insert('transactions');
        $id = $this->db->insert_id();
        return $id;
    }

}
?>