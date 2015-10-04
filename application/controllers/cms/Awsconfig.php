<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Aws\S3\S3Client;

class Awsconfig extends CI_Controller {

    public function __construct() {
        parent::__construct();          
    }

    public function index()
    {               
         $data['tittle'] = 'AWS Configuration';
         $data['key'] = $this->session->userdata("key");
         $data['secret'] = $this->session->userdata("secret");
         $this->mytemplate->loadTemplate(2,'awsconfig',$data);        
    }
    
    public function setConnection()
    {
         $this->form_validation->set_rules('key', 'Key', 'required');
         $this->form_validation->set_rules('secret', 'Secret', 'required');
         if ($this->form_validation->run() == FALSE){             
             exit;
         }else{            
             // tes connection 
             try {
                 $key   = $this->input->post('key',true);
                 $secret = $this->input->post('secret',true);
                 $S3 = S3Client::factory([
                    'key' => $key, 
                    'secret' => $secret 
                  ]);                 
                 $this->session->set_userdata(array("key"=>$key,"secret"=>$secret));
                 $buckets = $S3->listBuckets();                 
                 $message = array("ID"=>1,"STR"=>"AWS S3 Conection Success");
             }
             catch(Exception $e){
                 $message["ID"] = 2;
                 $message["STR"] = $e->getMessage();
             } 
              $res = loadMessage($message["ID"],$message["STR"]);  
              header('Content-Type: application/json');
              echo json_encode($res);
         }
    }   
    
    
    public function listBucket(){          
        try {
            $S3 = S3Client::factory([
                'key' => $this->session->userdata("key"), 
                'secret' => $this->session->userdata("secret") 
            ]);
            $result = $S3->listBuckets(array());                        
            $x=1;
            foreach ($result['Buckets'] as $bucket) {
                $x++;
                $css =($x%2==0)? "odd gradeX" : "even gradeC"; 
                $delete = site_url('cms/awsconfig/deletebucket/');
                echo '<tr class="'.$css.'">
                        <td>'.$bucket['Name'].'</td>
                        <td class="center"><a href="'.$delete.'" data-id="'.$bucket['Name'].'" class="btndelete" title="delete"><i class="glyphicon glyphicon-remove" class="btndelete" title="delete"></i></a></td>
                      </tr>';                  
            }               
         }
             catch(Exception $e){
                 $message["ID"] = 2;
                 $message["STR"] = $e->getMessage();
                 $res = loadMessage($message["ID"],$message["STR"]);  
                header('Content-Type: application/json');
                echo json_encode($res);
         }     
    }
    
    public function deletebucket(){
        
    }
   
    
    
    
    
        
   
                 
}
