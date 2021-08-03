<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH . 'libraries/PayPal-PHP-SDK/paypal/rest-api-sdk-php/sample/bootstrap.php'); // require paypal files

use PayPal\Api\ItemList;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;

class Paypal extends CI_Controller
{
	public $_api_context;

	function __construct()
	{
		parent::__construct();
		$this->load->model('paypal_model', 'paypal');
		// paypal credentials
		$this->config->load('paypal');

		$this->_api_context = new \PayPal\Rest\ApiContext(
			new \PayPal\Auth\OAuthTokenCredential(
				$this->config->item('client_id'),
				$this->config->item('secret')
			)
		);
		$this->load->helper('form');
	}

	function index()
	{
            redirect(base_url());
		$this->load->view('content/payment_credit_form');
	}


	function create_payment_with_paypal($project_data, $invest_amount)
	{
		
//       echo "<pre>amount: " . $invest_amount;
//        print_r($project_data);
//        exit;
		// setup PayPal api context
		$this->_api_context->setConfig($this->config->item('settings'));
		// ### Payer
		// A resource representing a Payer that funds a payment
		// For direct credit card payments, set payment method
		// to 'credit_card' and add an array of funding instruments.
		$payer['payment_method'] = 'paypal';
		// ### Itemized information
		// (Optional) Lets you specify item wise
		// information
		$item1["name"] = $project_data['title'];
		$item1["sku"] = $project_data['title'];  // Similar to `item_number` in Classic API
		$item1["description"] = $project_data['title'];
		$item1["currency"] = "USD";
		$item1["quantity"] = 1;
		$item1["price"] = $invest_amount;
		$itemList = new ItemList();
		$itemList->setItems(array($item1));

		// ### Additional payment details
		// Use this optional field to set additional
		// payment information such as tax, shipping
		// charges etc.
		$details['tax'] = 0;
		$details['subtotal'] = $invest_amount;
		// ### Amount
		// Lets you specify a payment amount.
		// You can also specify additional details
		// such as shipping, tax.
		$amount['currency'] = "USD";
		$amount['total'] = $details['tax'] + $details['subtotal'];
		$amount['details'] = $details;
		// ### Transaction
		// A transaction defines the contract of a
		// payment - what is the payment for and who
		// is fulfilling it.
		$transaction['description'] = 'Payment description';
		$transaction['amount'] = $amount;
		$transaction['invoice_number'] = uniqid();
		$transaction['item_list'] = $itemList;

		// ### Redirect urls
		// Set the urls that the buyer must be redirected to after
		// payment approval/ cancellation.
		$baseUrl = base_url();
		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl($baseUrl . "paypal/getPaymentStatus")
			->setCancelUrl($baseUrl . "paypal/getPaymentStatus");

		// ### Payment
		// A Payment Resource; create one using
		// the above types and intent set to sale 'sale'
		$payment = new Payment();
		$payment->setIntent("sale")
			->setPayer($payer)
			->setRedirectUrls($redirectUrls)
			->setTransactions(array($transaction));

		try {
			$payment->create($this->_api_context);
		} catch (Exception $ex) {
                    //echo '<pre>';                    print_r($ex);
			// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
			ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $ex);
			exit(1);
		}
		foreach ($payment->getLinks() as $link) {
			if ($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
				break;
			}
		}

		if (isset($redirect_url)) {
			/** redirect to paypal **/
			redirect($redirect_url);
		}

		$this->session->set_flashdata('success_msg', 'Unknown error occurred');
		redirect('paypal/index');
	}


	public function getPaymentStatus()
	{
		// paypal credentials
		/** Get the payment ID before session clear **/
		$payment_id = $this->input->get("paymentId");
		$PayerID = $this->input->get("PayerID");
		$token = $this->input->get("token");
		/** clear the session payment ID **/

		if (empty($PayerID) || empty($token)) {
			$this->session->set_flashdata('success_msg', 'Payment failed');
			redirect('paypal/index');
		}

		$payment = Payment::get($payment_id, $this->_api_context);

		/** PaymentExecution object includes information necessary **/
		/** to execute a PayPal account payment. **/
		/** The payer_id is added to the request query parameters **/
		/** when the user is redirected from paypal back to your site **/
		$execution = new PaymentExecution();
		$execution->setPayerId($this->input->get('PayerID'));

		/**Execute the payment **/
		$result = $payment->execute($execution, $this->_api_context);

		//  DEBUG RESULT, remove it later **/
		if ($result->getState() == 'approved') {
			$trans = $result->getTransactions();

			// item info
			$Subtotal = $trans[0]->getAmount()->getDetails()->getSubtotal();
			$Tax = $trans[0]->getAmount()->getDetails()->getTax();

			$payer = $result->getPayer();
			// payer info //
			$PaymentMethod = $payer->getPaymentMethod();
			$PayerStatus = $payer->getStatus();
			$PayerMail = $payer->getPayerInfo()->getEmail();

			$relatedResources = $trans[0]->getRelatedResources();
			$sale = $relatedResources[0]->getSale();
			// sale info //
			$saleId = $sale->getId();
			$CreateTime = $sale->getCreateTime();
			$UpdateTime = $sale->getUpdateTime();
			$State = $sale->getState();
			$Total = $sale->getAmount()->getTotal();
			/** it's all right **/
			/** Here Write your database logic like that insert record or value in database if you want **/

			$user_data = $this->session->userdata('userdata');
			$pid = $this->session->userdata('pid');
			$this->paypal->create($Total, $Subtotal, $Tax, $PaymentMethod, $PayerStatus, $PayerMail, $saleId, $CreateTime, $UpdateTime, $State, $user_data['uid'], $pid);
			$this->session->set_flashdata('success', 'Payment success');
			// redirect('paypal/success');

			//Updating project current investment amount
			$currentInvestmentAmount = $this->session->userdata('currentInvestmentAmount');
			$currentInvestmentAmount = (int)$currentInvestmentAmount + (int)$Total;
			$amount_invest_result = $this->main_model->update(
				'projects',
				'pid',
				$pid,
				array(
					"currentInvestmentAmount" => $currentInvestmentAmount
				)
			);
			if ($amount_invest_result) {
				redirect('transections');
			}
		}
		$this->session->set_flashdata('error', 'Payment failed');
		// redirect('paypal/cancel');
		redirect('transections');
	}

	function success()
	{
		$this->session->set_flashdata('success', 'Payment success');
		// $this->load->view("user_dashboard/transaction");
		redirect('transections');
	}

	function cancel()
	{
		$this->paypal->create_payment();
		$this->session->set_flashdata('error', 'Payment failed');
		// $this->load->view("user_dashboard/transaction");
		redirect('transections');
	}

	function make_payment()
	{
		if (!$this->input->post("investAmount")) {
			$this->session->set_flashdata('error', 'Please enter invest amount');                       echo "no amount"; die();
			redirect($_SERVER['HTTP_REFERER']);
			return false;
		}

		if ($this->session->userdata('userdata')) {
			$result = $this->main_model->getWhere('projects', array(
				"pid" => $this->input->post("project_id")
			));

			$this->session->set_userdata('pid', $this->input->post("project_id"));
			$project_data = $result->row_array();
                        /* discarded after installment module
			if ((int)$this->input->post("investAmount") < (int)$project_data['minimumInvestment']) {
				$this->session->set_flashdata('error', 'Invalid Amount.<br> Minumum Investment amount is $' . $project_data['minimumInvestment']);
				echo "Invalid amount"; die();
                                redirect($_SERVER['HTTP_REFERER']);
				return false;
			}*/
			$this->session->set_userdata('currentInvestmentAmount', $project_data["currentInvestmentAmount"]);
			$invest_amount = $this->input->post("investAmount");
			$this->create_payment_with_paypal($project_data, $invest_amount);
		} else {
			$this->session->set_flashdata('error', 'Please login to invest');
			redirect('login');
		}
	}
}
