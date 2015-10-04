<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();      
    }

    public function index()
    {      
         $data['tittle'] = 'PROFILE';
         $this->mytemplate->loadTemplate(2,'profile',$data);        
    }
    
    
    
    
        
   
                 
}
