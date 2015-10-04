<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of Omnipay_call
 *
 * @author wahyu widodo
 */
 
use Omnipay\Omnipay;
use Omnipay\Common\CreditCard;

class Omnipay_call extends Omnipay {
    
    protected $gateway = null;


    /** 
     * @param string determining the kinds of gateway will be used.Ex : PayPal_Pro, PayPal_Express, Stripe
     * @param bool set test_mode true if you'll mode test, else false if mode live
     */
       
    public function __construct($set_gateway='PayPal_Pro',$test_mode=true) {
        $this->gateway = Omnipay::create($set_gateway);
        $this->gateway->setUsername('wahyusoft-facilitator_api1.yahoo.com');
        $this->gateway->setPassword('1385019063');
        $this->gateway->setSignature('Ama-5HT2rtVdReCuOtqNkI2yH.NmAVUBJ695byVELJbYp4rHwle9uQXf');
        $this->gateway->setTestMode($test_mode);
    }
    
      /** 
       * function sendPurchase
       * Description sending variable data to payment gateway
       * @param array $cardInput details information about credit card
       * @param array $valTransc details information about billing
       * @return array display messages from api payment gateway
     */
       
    public function sendPurchase($cardInput,$valTransc){        
        $card = new CreditCard($cardInput);
        $PayArray = array(      
                    'amount' => $valTransc['amount'],
                    'transactionId' => $valTransc['transactionId'],
                    'description' => $valTransc['description'],
                    'currency' => $valTransc['currency'],
                    'clientIp' => $valTransc['clientIp'],
                    'returnUrl' => $valTransc['returnUrl'],
                    'card' => $card);
        $response = $this->gateway->purchase($PayArray)->send();
        if ($response->isSuccessful()) {                
            $paypalResponse = $response->getData();                
        }elseif ($response->isRedirect()) {            
            $paypalResponse = $response->getRedirectData();               
        } else {            
            $paypalResponse = $response->getMessage();
        }        
        return $paypalResponse;
    }
    
    
}
