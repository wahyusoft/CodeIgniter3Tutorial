<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("blocks_model","BM");
    }

    public function index()
    {       
         $data['module'] = "Dashboard";
         $this->mytemplate->loadTemplate(2,'dashboard/index',$data);      
    }
    
    public function fillgrid(){
        $this->BM->fillgrid();
    }
    
    
        
   
                 
}
