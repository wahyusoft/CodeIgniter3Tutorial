<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Globals extends CI_Controller {
    
    var $sessionID;
    var $check;    
    
    public function __construct() {
        parent::__construct();
        $this->load->model("Globals_model","GM");
        $this->sessionID =1;
        $this->check = $this->GM->get_data_byId($this->sessionID);         
    }

    public function index()
    {       
         $data['module'] = "Globals";           
         $data['email'] = (empty($this->check)) ? '' :  $this->check->email;  
         $data['contactUs'] = (empty($this->check)) ? '' :  show_data_serialize($this->check->contactUs,'en');
         $data['copyright'] = (empty( $this->check)) ? '' :  $this->check->copyright;
         $this->mytemplate->loadTemplate(2,'globals/index',$data);      
    }
    
    public function fillglobal(){
         $this->form_validation->set_rules('copyright', 'Copyright', 'required');
         $this->form_validation->set_rules('contactUs', 'Contact Us Label', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
         if ($this->form_validation->run() == FALSE){             
             exit;
         }else{            
              if (empty($this->check)) {
                  $return = $this->GM->insert(); 
              }else{
                  $return = $this->GM->update($this->check);
              }
              if ($return){
                   $id = 1;
                   $str = "Save data succesfully";
              }else{
                   $id = 2;
                   $str = "Save data failed";
              }             
              $res = loadMessage($id,$str);  
              header('Content-Type: application/json');
              echo json_encode($res);
         }
    }
    
    
        
   
                 
}
