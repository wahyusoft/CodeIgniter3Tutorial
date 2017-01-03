<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of MyCrypt
 *
 * @author wahyu widodo
 */

require_once 'AESCryptFileLib.php';
require_once 'aes256/MCryptAES256Implementation.php'; 
 
class MyCrypt {
	
	private $mylib;
	private $pubkey;	
	
	public function __construct(){
		$mcrypt       = new MCryptAES256Implementation();
		$this->mylib  = new AESCryptFileLib($mcrypt);
		$this->pubkey = "qI[s$%(OS2_g!!%^&*#@";
	}
	
	public function enc_file($file_to_encrypt,$path){			
		return $this->mylib->encryptFile($file_to_encrypt, $this->pubkey,$path.'.aes');
	}
	
	public function dec_file($encypt_file,$decrypted_file){		
		return $this->mylib->decryptFile($encypt_file, $this->pubkey, $decrypted_file);
	}
	
	public function remove_save($path_file,$ori_file_name){				
		header('Content-type: '.mime_content_type($ori_file_name));
		header('Content-Disposition: attachment; filename="' . $ori_file_name . '"');
		header('Content-Transfer-Encoding: binary');
		header('Accept-Ranges: bytes');				
		ob_clean();
		flush();
		if (readfile(FCPATH.$path_file))
		{
		  unlink(FCPATH.$path_file);
		}
			
	}
	                
}
