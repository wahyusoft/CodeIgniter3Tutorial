<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypalintegration extends CI_Controller {

	public function __construct() {
        parent::__construct();	 
        $this->load->library('omnipaygateway');       			
	}
	
	public function index()
	{						
		echo heading("Paypal Integration",1);	
		$cardInput = array(
			'firstName'=>'Wahyu',
			'lastName'=>'Widodo',
			'number'=>'4111 1111 1111 1111 ',
			'cvv'=>'132',
			'expiryMonth'=>06,
			'expiryYear'=>19,
			'email'=> 'batikkode@gmail.com');

		$valTransc = array(
			'amount' => number_format(200, 2,'.',' '),
			'transactionId'=>3,
			'description' => 'Rooms reservation for a night',
			'currency'=>'USD',
			'clientIp'=>'',
			'returnUrl'=> 'http://example.com');
		$purchaseProc = new omnipaygateway('PayPal_Pro',true);
		$data = $purchaseProc->sendPurchase($cardInput,$valTransc);
		echo '<pre>';print_r($data);	   
	}
}
