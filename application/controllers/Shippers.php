<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shippers extends CI_Controller {

	public $crud;
	public $module;

	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->crud = new grocery_CRUD();
		$this->crud->set_theme('datatables');
		$this->module = 'shippers';			
	}

	public function index()
	{		
		$this->crud->set_table($this->module);
		$output = $this->crud->render();
		$this->mytemplate->loadAmin('shippers',$output);
	}
}
