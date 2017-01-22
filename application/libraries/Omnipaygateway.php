<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include("./vendor/autoload.php"); 

use Omnipay\Omnipay;
use Omnipay\Common\CreditCard;

class Omnipaygateway extends Omnipay {

	protected $gateway = null;

	public function __construct($set_gateway='PayPal_Pro',$test_mode=true){
		$this->gateway = Omnipay::create($set_gateway);
		$this->gateway->setUsername('batikkode-facilitator_api1.gmail.com');
		$this->gateway->setPassword('SKJXNTSPZUUFR4L5');
		$this->gateway->setSignature('AFcWxV21C7fd0v3bYYYRCpSSRl31AHsyCp6cnyiiUJtWS.5bR.YdidWW');
		$this->gateway->setTestMode($test_mode);
	}

	public function sendPurchase($cardInput, $valTransaction){
		$card = new CreditCard($cardInput);
		$payArray = array(
			'amount'=> $valTransaction['amount'],
			'transactionId' => $valTransaction['transactionId'],
			'description'=> $valTransaction['description'],
			'currency'=>$valTransaction['currency'],
			'clientIp'=>$valTransaction['clientIp'],
			'returnUrl'=> $valTransaction['returnUrl'],
			'card'=>$card);
		$response = $this->gateway->purchase($payArray)->send();
		if($response->isSuccessful()){
			$paypalResponse = $response->getData();
		}elseif($response->isRedirect()){
			$paypalResponse = $response->getRedirectData();
		}else{
			$paypalResponse = $response->getMessage();
		}
		return $paypalResponse;
	}
}