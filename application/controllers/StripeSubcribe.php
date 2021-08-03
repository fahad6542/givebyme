<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class StripeSubcribeController extends CI_Controller {
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->library("session");
       $this->load->model("Transaction_model");
       $this->load->helper('url');
    }
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index()
    {
       $this->load->view('my_stripe');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function stripePost()
    {
        require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
        
        $charge;
        $error="";
        $msg="";
        $pid=$this->input->post('pid');

        try {
             $charge= \Stripe\Charge::create ([
                "amount" => ($this->input->post('investAmount')*100),
                "currency" => "usd",
                "source" => $this->input->post('stripeToken'),
                "description" => $this->input->post('description'),
                "receipt_email" => $this->input->post('email'),
                "metadata"=>array("Campaign Id" => $pid,
                "Campaign Title "=>$this->input->post('pname'))
             ]);
          // Used Stripe's library to make requests...

             
            //saving to transaction table
            $ts=new Transaction_model();
            
            $ts->uid=0;
            $ts->pid=$pid;
            $ts->transectionId=$charge->getLastResponse()->headers['Request-Id'];
            $ts->payerStatus="UNVERIFIED";
            $ts->paymentMethod="stripe";
            $ts->payerMail=$this->input->post('email');
            $ts->total=$this->input->post('investAmount');
            $ts->subTotal=$this->input->post('investAmount');
            $ts->tax=0;
            $ts->paymentStatus="Completed";
            $ts->inv_id=0;
            $ts->installment_id=0;
            $ts->gatewayResponse=$charge;
            $ts->description=$this->input->post('description');
            $ts->dName=$this->input->post('name');
            
            //echo "<pre>"; print_r($ts); die();

            if ($this->db->insert('transactions',$ts)) {
                $this->session->set_flashdata('success', 'Thanks for your donation.');
                $this->session->set_flashdata('amount', $ts->total);
                redirect('/campaign/detail/'.$pid);
            }else{
                /*
                 $error = $this->db->error();
                 if (isset($error['message'])) {
                    echo $error['message'];
                }*/
                $this->session->set_flashdata('success', 'Thanks for your donation.');
                $this->session->set_flashdata('error', 'But unable to save to the database.');
                redirect('/campaign/detail/'.$pid);
            }


          //  echo $respose;
      

        } catch(\Stripe\Error\Card $e) {
          // Since it's a decline, \Stripe\Error\Card will be caught
          $body = $e->getJsonBody();
          $err  = $body['error'];

          //print('Status is:' . $e->getHttpStatus() . "\n");
          //print('Type is:' . $err['type'] . "\n");
          //print('Code is:' . $err['code'] . "\n");
          // param is '' in this case
          //print('Param is:' . $err['param'] . "\n");
          //print('Message is:' . $err['message'] . "\n");

          $error.="Error! ".$err['message'];
          $msg="Card declined.";
        } catch (\Stripe\Error\RateLimit $e) {
          // Too many requests made to the API too quickly
          $body = $e->getJsonBody();
          $err  = $body['error'];
          $error.="Error! ".$err['message'];
          $msg="Too many requests made to the API too quickly, Try again in a while.";
        } catch (\Stripe\Error\InvalidRequest $e) {
          // Invalid parameters were supplied to Stripe's API
          $body = $e->getJsonBody();
          $err  = $body['error'];
          $error.="Error! ".$err['message'];
          $msg="Invalid parameters were supplied to Stripe's API";
        } catch (\Stripe\Error\Authentication $e) {
          // Authentication with Stripe's API failed
          // (maybe you changed API keys recently)
            $body = $e->getJsonBody();
          $err  = $body['error'];

          $error.="Error! ".$err['message'];
          $msg="Authentication with Stripe's API failed";
        } catch (\Stripe\Error\ApiConnection $e) {
          // Network communication with Stripe failed
          $error.="Error! ".$err['message'];
          $msg="Network communication with Stripe failed";
        } catch (\Stripe\Error\Base $e) {
          // Display a very generic error to the user, and maybe send
          // yourself an email
          $body = $e->getJsonBody();
          $err  = $body['error'];

          $error.="Error! ".$err['message'];
          $msg="Stripe error code 6  /  ".$err['code'];// ".$e;
        } catch (Exception $e) {
          // Something else happened, completely unrelated to Stripe
            $body = $e->getJsonBody();
          $err  = $body['error'];

          $error.="Error! ".$err['message'];
          $msg="Unknown error try again.";
        }

        if ($msg!="") {
            $this->session->set_flashdata('error', $msg);
        }else{
            $this->session->set_flashdata('success', 'Payment made successfully.');
        }
        
        //echo "error".$error;
        //echo "msg".$msg;
        //die();
        $this->session->set_flashdata('modalError',$error);     
        $this->session->set_flashdata('error', $error . "<br>" . $msg);     
        redirect('/campaign/detail/'.$pid);
    }
}