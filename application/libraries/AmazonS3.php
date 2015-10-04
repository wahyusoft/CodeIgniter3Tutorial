<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use Aws\S3\S3Client;
/**
 * Description of AmazonS3
 *
 * @author wahyu widodo
 */

class AmazonS3 {
    
    private $S3;
        
    public function __construct() {                                   
        $this->S3 = S3Client::factory([
            'key' => 'Your key', 
            'secret' => 'your secret' 
        ]);
    }
    
    public function sendFile($bucketname,$filename,$message,$isPrivate) {
         $result = $this->S3->putObject(array(
	    'Bucket' => $bucketname,
	    'Key'    => $filename,       
	    'Body'   => $message,
              'ACL'    => $isPrivate
	));
         
        echo $result['ObjectURL'] . "\n";
    }

    public function removeFile($bucketname,$filename){
        $result = $this->S3->deleteObject(array(
                    'Bucket' => $bucketname,
                    'Key'    => $filename
                   ));
        echo $result['ObjectURL'] . "\n";
    }
    
      
    
    
}
