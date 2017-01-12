<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of AmazonS3
 *
 * @author wahyu widodo
 */
 
 include("./vendor/autoload.php");
 
 use Aws\S3\S3Client;
 
 class Aws3{
	
	private $S3;

	public function __construct(){
		$this->S3 = S3Client::factory([
			'key' => 'your-key',
			'secret' => 'your-secret',
			'region' => 'us-west-1'
		]);
	}	
	
	public function addBucket($bucketName){
		$result = $this->S3->createBucket(array(
			'Bucket'=>$bucketName,
			'LocationConstraint'=> 'us-west-1'));
		return $result;	
	}
	
	public function sendFile($bucketName, $filename){
		$result = $this->S3->putObject(array(
				'Bucket' => $bucketName,
				'Key' => $filename['name'],
				'SourceFile' => $filename['tmp_name'],
				'ContentType' => 'image/png',
				'StorageClass' => 'STANDARD',
				'ACL' => 'public-read'
		));
		return $result['ObjectURL']."\n";
	}
		
	 
 }