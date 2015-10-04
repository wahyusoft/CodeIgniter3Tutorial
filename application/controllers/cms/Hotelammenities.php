<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotelammenities extends CI_Controller {
	
    public function index()
    {      
         $data['sidebar'] = $this->load->view('cms/sidebar');
         $this->load->view('cms/hotelammenities',$data);
    }
    
    
        
   
                 
}
