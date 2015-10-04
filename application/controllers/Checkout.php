<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
   
    public function index()
    {
        $this->load->view('checkout');
    }
           
    public function send_payout(){    	
        $firstName = $this->input->post("firstName");
        $lastName = $this->input->post("lastName");
        $number = $this->input->post("number");
        $cvv = $this->input->post("cvv");
        $expiryMonth = $this->input->post("expiryMonth");
        $expiryYear = $this->input->post("expiryYear");
        $street = $this->input->post("street");
        $apt = $this->input->post("apt");
        $price = $this->input->post("price");        
        $transID = $this->input->post("transID");        
        $ip = $this->input->ip_address();

        $cardInput = array(
                'firstName' => $firstName,
                'lastName' => $lastName,
                'number' => $number,
                'cvv' => $cvv,
                'expiryMonth' => $expiryMonth,
                'expiryYear' => $expiryYear,
                'email' => 'wahyusoft@yahoo.com'
        );

        $valTransc = array(      
                    'amount' => number_format($price, 2, '.', ''),
                    'transactionId' => $transID,
                    'description' => 'Rooms Reservation for a night',
                    'currency' => 'USD',
                    'clientIp' => $ip,
                    'returnUrl' => base_url().'checkout/cancel/45532');
        $purchaseProc = new Omnipay_call('PayPal_Pro',true);
        $data = $purchaseProc->sendPurchase($cardInput,$valTransc);
        $message = ($data['ACK']=='Success')? 'Payment process succussfully' : 'Payment process failed';
        echo $message;
    }
    
    public function cancel($transactionId){
        echo "You'll cancel this booking transactions";
    }
            
        
   
   
                 
}
