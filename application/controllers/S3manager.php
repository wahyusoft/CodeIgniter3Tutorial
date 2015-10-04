<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Aws\S3\S3Client;

class S3manager extends CI_Controller {
    
    private $allowed_ext;
    private $dir;
    
    public function __construct() {
        parent::__construct();
        $this->allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
        $this->dir = "uploads/";
    }

    public function index()
    {        
        if ( file_exists($this->dir) == false ) {
           $data['pictures']  = 'Directory '.$this->dir.' not found!';
        } else {
           $dir_contents = scandir($this->dir);           
           $img='';          
           foreach ( $dir_contents as $file ) {                       
               $ext = pathinfo($file, PATHINFO_EXTENSION);
               if ( ($file !== '.') && ($file !== '..') && in_array($ext, $this->allowed_ext)) {
                  $img .= '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
                  $img .=    '<input type="checkbox" name="list_img[]" value="'.$file.'"><b>'.$file.'</b>';
                  $img .=    '<a class="thumbnail" href="#">';
                  $img .=    '<img style="width:360px;height:150px;" class="img-responsive" src="'.site_url($this->dir.$file).'" alt="">';                 
                  $img .=    '</a>'; 
                  $img .=    '<a href="https://s3-us-west-1.amazonaws.com/roomsranger/'.$file.'" target="_blank"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span></a>'; 
                  $img .= '</div>';                   
               }
           }
           $data['pictures'] = $img;
        }
        $this->load->view('S3viewmanager',$data);
    }
    
    public function doUpload(){   
        $key   = $this->session->userdata('key');
        $secret = $this->session->userdata('secret');
        $AWS = new AmazonS3($key,$secret);        
        $message = "";
        if (isset($_POST['btnUpload'])) {        
            $extension = end(explode(".", $_FILES["file"]["name"]));
            if (($_FILES["file"]["size"] < 5242880) && in_array($extension, $this->allowed_ext)) {
                if ($_FILES["file"]["error"] > 0) {            
                    $message.="There is some error in upload. Please try after some time.";  
                    $err_name = 'danger';
                } else {        
                    $tempFile = $_FILES['file']['tmp_name'];           
                    $targetFile = $this->dir . $_FILES['file']['name']; 
                    $isPrivate  = ($_POST['ckPrivate']=='Private')? 'private' : 'public-read';
                    $AWS->sendFile('roomranger',$_FILES['file']['name'], 'Test...',$isPrivate);
                    move_uploaded_file($tempFile, $targetFile);
                    $message.= "File successfully uploaded in bucket roomsranger.";
                    $err_name = 'success';
                }    
            }else{
                $message.= "Invalid file, Please upload a gif/jpeg/jpg/png and file of maximum size 5 MB.";
                $err_name = 'danger';
            }
            $this->session->set_flashdata($err_name,$message);
            redirect(site_url('s3manager'));      
        }	
    }
    
    public function doDelete(){
        if (isset($_POST['btnDelete'])) {             
            if(isset($_POST['list_img'])){ 
                $AWS = new AmazonS3();  
                foreach ($_POST['list_img'] as $selected){
                     if (file_exists($this->dir.$selected) == true) {
                         unlink($this->dir.$selected);
                         $AWS->removeFile($selected);
                     }
                }
                $this->session->set_flashdata('success','Delete files successfully');
            }else{                
                $this->session->set_flashdata('danger','Please selected one or more files.');
            }
        }
        redirect(site_url('s3manager')); 
    }
    
    
                        
                 
}
