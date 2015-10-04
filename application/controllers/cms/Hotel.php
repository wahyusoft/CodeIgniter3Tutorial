<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {
	
    public function index()
    {                                  
        $this->mytemplate->loadTemplate(2,'hotel',$data);
    }
    
    
     public function action($mode,$id=0){
           $data['title']   = ($mode=='add')? 'ADD' : 'EDIT';  
          $this->mytemplate->loadTemplate(2,'form_hotel',$data);
     }
    
        
   
                 
}
