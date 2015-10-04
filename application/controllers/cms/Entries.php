<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entries extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Post_model','PM');
    }
    
    public function index()
    {                     
        $data['module'] = "Entries";
        $this->mytemplate->loadTemplate(2,'entries/index',$data);
    }
    
    public function post($module){
        $data = $this->PM->get_array_db($module);
        $this->mytemplate->loadTemplate(2,'entries/index',$data);
    }
    
    
    public function filldata($module='articles'){
         $this->form_validation->set_rules('title_name', 'Title', 'required');
         $this->form_validation->set_rules('shortdesc', 'Short description', 'required');         
         if ($this->form_validation->run() == FALSE){             
             exit;
         }else{                         
              $return = $this->PM->insert($module); 
              if ($return){
                   $id = 1;
                   $str = "Save data succesfully";
              }else{
                   $id = 2;
                   $str = "Save data failed";
              }             
              $res = loadMessage($id,$str);  
              header('Content-Type: application/json');
              echo json_encode($res);
         }
    }
    
    public function delete($id){
       $return = $this->PM->delete_data($id);
       if($return)
           $this->mytemplate->loadMessage(1,'Delete data sucessfully');  
       else
           $this->mytemplate->loadMessage(2,'Delete data unsucessfully'); 
       redirect(site_url('cms/post'));
    }
    
    /**
     * function doUpload
     * Description upload files, and create thumbnails
     * @param boolean $cloud set true when store aws s3
     * @param array $theImage image files
     */
    
    function doUpload(){
        $pathfile =  './upload/article/';
        $set['upload_path'] 	 =  $pathfile;
        $set['allowed_types']       = 'jpg|png|gif';	
        $this->load->library('upload', $set);	
        $this->upload->do_upload('file');			
        $datapicture = $this->upload->data();
        $newwidth=200;
        $newheight=100;
        list($width, $height) = getimagesize($path.$datapicture['file_name']);                        
        if ($width == $height) {
            $newwidth = $newwidth;
            $newheight = $newwidth;
        } else if($width > $height && $newheight < $height){
            $newheight = $height / ($width / $newwidth);
        } else if ($width < $height && $newwidth < $width) {
            $newwidth = $width / ($height / $newheight);    
        } else {
            $newwidth  = $width;
            $newheight = $height;
        }                       
        $gambar['thumb']	=  $datapicture['raw_name']."_thumb".$datapicture['file_ext'];        
        $configx['image_library'] = 'gd2';
        $configx['source_image'] = $datapicture['full_path'];
        $configx['create_thumb'] = TRUE;
        $configx['maintain_ratio'] = FALSE;
        $configx['width'] = $newwidth;
        $configx['height'] = $newheight;
        $this->load->library('image_lib', $configx);
        $this->image_lib->resize();
        return serialize($datapicture);
    }
    
    
        
   
                 
}

