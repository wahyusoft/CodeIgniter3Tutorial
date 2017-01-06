<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stripeintegration extends CI_Controller {

	public function __construct() {
        parent::__construct();			
	}
	
	public function index()
	{							
		$this->mytemplate->loadAmin('view_stripe');
	}
}
