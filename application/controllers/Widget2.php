<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Omnipay\Omnipay;

class Widget2 extends CI_Controller {
   
    public function index()
    {
         $this->load->view('widget2');
    }
        
    public function room_detail()
    {   
        $this->load->view('room_detail');
    }
    
    public function multiple_rooms()
    {
        $this->load->view('multiple_rooms');
    }
    
    public function booking_confirmation()
    {                
        $this->load->view('booking_confirmation');
    }
    
    public function payment_process() { 
        ini_set('arg_separator.output', '&');
        $gateway = Omnipay::create('PayPal_Express');        
        $gateway->setUsername('wahyusoft-facilitator_api1.yahoo.com');
        $gateway->setPassword('1385019063');
        $gateway->setSignature('Ama-5HT2rtVdReCuOtqNkI2yH.NmAVUBJ695byVELJbYp4rHwle9uQXf');
        $gateway->setTestMode(true);
		$params = array(
                        'cancelUrl' => base_url().'widget2/cancelurl',                        
                        'returnUrl' => base_url().'widget2/returnurl', 
                        'name' => 'Booking Rooms',
                        'description' => 'Rooms Reservation for 2 days',
                        'amount' =>  number_format($_POST['price'], 2, '.', ''),
                        'currency' => 'USD'
                    );
        $response = $gateway->purchase($params)->send();
		if ($response->isSuccessful()) {	      
	      	// payment was successful: update database
			$this->getSuccessPayment($params);
	      	print_r($response);
		} elseif ($response->isRedirect()) {
	      	// redirect to offsite payment gateway
	      	$response->redirect();
	  	} else {
		      // payment failed: display message to customer
		    echo $response->getMessage();

	  	}        
    }
	
	private function getSuccessPayment($params)
  	{   		
  		$response = $gateway->completePurchase($params)->send();
  		$paypalResponse = $response->getData(); // this is the raw response object  	
  		if(isset($paypalResponse['PAYMENTINFO_0_ACK']) && $paypalResponse['PAYMENTINFO_0_ACK'] === 'Success') {
      			// Response
      		print_r($paypalResponse);  		
  		} else {      			
      			//Failed transaction      			
  		}    		
  	}

	
	public function cancelurl(){
		echo "This Cancel URL";
	}
	
	public function returnurl(){
		echo "This Return URL";
	}
                 
}
