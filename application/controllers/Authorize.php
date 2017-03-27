<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorize extends CI_Controller {

	

	public function __construct(){
		parent::__construct();
		$this->load->library("myauthorize");
			
	}

	public function index()
	{				
		$this->mytemplate->loadAmin('authorize');
	}

	public function pushPayment(){
		$dataCustomers=array("fname"=>$this->input->post('fname'),
							 "lname"=>$this->input->post('lname'),
							 "address"=>$this->input->post('address'),
							 "city"=>$this->input->post('city'),
							 "state"=>$this->input->post('state'),
							 "country"=>$this->input->post('country'),
							 "zip"=>$this->input->post('zip'),
							 "phone"=>$this->input->post('phone'),
							 "email"=>$this->input->post('email'),
							 "cnumber"=>$this->input->post('cnumber'),
							 "cexpdate"=>$this->input->post('cexpdate'),
							 "ccode"=>$this->input->post('ccode'),
							 "cdesc"=>$this->input->post('cdesc'),
							 "amount"=>$this->input->post('camount'));		
		$result = $this->myauthorize->chargerCreditCard($dataCustomers);
		echo $result;
	}	
}
