<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Myemail
 *
 * @author wahyu
 */
class Myemail {
    
    var $emailConfig = array();
    
      function __construct() {
          // Set SMTP Configuration
          $this->emailConfig = array(
                  'protocol' => 'smtp',
                  'smtp_host' => 'ssl://smtp.googlemail.com',  
                  'smtp_port' => 465,
                  'timeout' => 4,
                  'smtp_user' => 'wahyuuu@gmail.com',
                  'smtp_pass' => 'bismillah12040283',                   
                  'charset'   => 'iso-8859-1',
                  'wordwrap' => TRUE
               );
      }
    
              
     /**
        * Function send_email_smtp
        * description : for send email
        * @param String $email_to address where your send email
        * @param String $subject subject your email
		* @param String $attachment file attachment to send
        * @param String $body_email body email    
        */
       public function send_email_smtp($email_to, $subject, $attachment,$body_email){
               // Set your email information
               $from = array('email' => 'wahyuuu@gmail.com', 'name' => 'Wahyu Widodo');                     
               // Load CodeIgniter Email library
               $CI = & get_instance();
               $CI->load->library('email', $this->emailConfig);
               $CI->email->set_newline("\r\n");
               $config['mailtype'] =  'html';
               $CI->email->initialize($config);                              
               // Set email preferences
               $CI->email->from($from['email'], $from['name']);
               $CI->email->to($email_to);

               $CI->email->subject($subject);
			   if(isset($attachment)){
				   $CI->email->attach($attachment);
			   }
               $CI->email->message($body_email);
               // Ready to send email and check whether the email was successfully sent

               if (!$CI->email->send()) {                 
                   show_error($CI->email->print_debugger());
                   $CI->session->set_flashdata('flashError', 'Failed send email.');
               }
               else {
                   $CI->session->set_flashdata('flashSuccess', 'This email is a success.');                    
               }
       }
               
}
