<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widget1 extends CI_Controller {
	
    public function index()
    {
         $this->load->view('widget1');
    }
    
    
        
    /*
    public function convert_to_pdf(){
        if(isset($_POST['btnconvert'])){
                $data['file_location'] = $this->attachment_email();
                $this->load->view('welcome_message',$data);
        }
    }
		
		
    public function sendemail(){
        if(isset($_POST['btnsubmit'])){
          $message =  'This example email.';
          $message .= ' <br />Test body email';
          $getEmail = new Myemail();
                          $attachment = base_url().$this->attachment_email();
          $getEmail->send_email_smtp($_POST['email_to'], 'Test email', $attachment,$message);
                          if (file_exists($attachment )) {
                                  unlink($attachment);
                          }
          redirect();
        }
      } 
          
      private function attachment_email(){ 
            $dompdf = new DOMPDF();
            $body_email = $this->load->view('templates_email','',true);                            
            $dompdf->load_html($body_email);
            $dompdf->set_paper('letter', 'potrait');
            $dompdf->render(); 					
            $pdfoutput = $dompdf->output();
            $filename="test_file";
            $filepath = "uploads/" . $filename .".pdf";
            $fp = fopen($filepath, "w");
            fwrite($fp, $pdfoutput);
            fclose($fp);	
            return $filepath ;	
      }
          
      */  
                 
}
