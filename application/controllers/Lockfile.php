<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lockfile extends CI_Controller {

	public function __construct()
    {
		parent::__construct();                
		$this->load->helper(array("url","form","html"));	
		$this->load->library("mycrypt");	
    }
		
	public function index(){
		$data["title"] = heading("Encrypt Files using AESCrypt",3);
		$this->load->view("upload_view",$data);
	}
	
	public function do_upload(){
		if ($_FILES["userfile"]['name'] != NULL) {	
			$path = './uploads/';
            $config = array(
                'upload_path' => $path,
                'allowed_types' => 'pdf|doc|docx|DOCX|xls|xlsx',
                'file_name' => $_FILES["userfile"]['name'],
                'encrypt_name' => false,
            );	
			$this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());                
				$this->load->view('upload_view', $error);
            } else {
                $upload_data = $this->upload->data();	
				// call encrypt function
				$this->mycrypt->enc_file($upload_data['full_path'],$path.$upload_data['file_name']);	
				$oldfile = $path. $upload_data['file_name'];
				// delete file after encrypt
				unlink($oldfile);
				$data = array('upload_data' => $upload_data['file_name'].'.aes');
				$this->load->view('upload_view', $data);	
			}	
        }	
	}
		
}