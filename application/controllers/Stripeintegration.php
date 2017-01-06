<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stripeintegration extends CI_Controller {

	public function __construct() {
        parent::__construct();	
		$this->load->library('stripegateway');			
	}
	
	public function index()
	{		
		$data["message"] = "";
		if(isset($_POST['btnsubmit'])){
			$data = array(
				'number' => $this->input->post('cardnumber'),
				'exp_month' => $this->input->post('expirymonth'),
				'exp_year'=> $this->input->post('expiryyear'),
				'amount' => $this->input->post('amount')
			);
			$data["message"] = $this->stripegateway->checkout($data);
		}
		$this->mytemplate->loadAmin('view_stripe',$data);
	}
}
