<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Testunit extends CI_Controller {

        public function __construct()
        {
            parent::__construct(); 
			$this->load->library("unit_test");	
        }
		
		
		private function division($a,$b){
			return $a/$b;
		}
		
		public function index(){
			echo "Using Unit Test Library";	
			$test = $this->division(6,3);
			$expected_result = 4;
			$test_name = "Division test function";
			echo $this->unit->run($test,$expected_result,$test_name);
		}

}		
		