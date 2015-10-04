<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets extends CI_Controller {
    
    private $allowed_ext;
    private $sessionID;   
    private $AWS;
    
    public function __construct() {
        parent::__construct();
        $this->load->model("Assets_model","AM");
        $this->sessionID =1;    
        $this->allowed_ext = array('jpg', 'jpeg', 'png', 'gif');       
        $this->AWS = new AmazonS3();         
    }

    public function index()
    {          
         $data['module'] = "Assets";            
         $this->mytemplate->loadTemplate(2,'assets/index',$data);      
    }
    
    public function upload(){         
       if(!empty($_FILES['file']['name'])){                
            if ($_FILES["file"]["size"] < 14000000) { 
                $this->AM->insert($_FILES['file']);                               
                $this->AWS->sendFile('roomsranger',$_FILES['file']['name'], 'Test...','public-read');
             }   
       } 
    }
    
    
    public function filldata($type='filldata'){  
        $requestData= $_REQUEST;
        $columns = array(             
                    0 => 'imagesFile', 
                    1 => 'imagesDescription',
                    2=> 'postDate'
            );
        $params = array('search'=>!empty($requestData['search']['value'])?  $requestData['search']['value']: '',
                       'order' => $columns[$requestData['order'][0]['column']],
                       'sorting' => $requestData['order'][0]['dir'],
                       'start' => $requestData['start'],
                       'finish' => $requestData['length'],
                       'type' => $type
                      );
        
        $result = $this->AM->get_data($params);  
        $totalData = $this->AM->get_count();
        $data = array();
        $totalFiltered=0;        
        foreach($result as $row){                
                $totalFiltered=$totalFiltered+1;                
                $nestedData=array(); 
                $nestedData[] = $row["imagesFile"];
                $nestedData[] = $row["imagesDescription"];
                $nestedData[] = convert_date($row["postDate"]);
                //add html for action
                $nestedData[] = '<a title="Update" href="#" onclick="update_asset('."'".$row["imagesID"]."'".')"><i class="glyphicon glyphicon-pencil"></i></a> &nbsp;
                                 <a title="Delete" href="#" onclick="delete_assets('."'".$row["imagesID"]."'".')"><i class="glyphicon glyphicon-trash"></i></a>';                
                $data[] = $nestedData;
        }
        
         $json_data = array(
                    "draw"            => intval( $requestData['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
                    "recordsTotal"    => intval( $totalData ),  // total number of records
                    "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
                    "data"            => $data   // total data array
                    );
        echo json_encode($json_data);  
    }
    
    
    public function update_assets($id){        
        $data = $this->AM->get_data_byId($id);        
        echo json_encode($data);
    }
    
    public function delete_assets($id)
    {
        $getdata = $this->AM->get_data_byId($id);
        if(!empty($getdata->imagesFile)){
            $return = $this->AM->delete_byId($id);
           // $this->AWS->removeFile($getdata->imagesFile); // delete aws   
             $id = ($return)? 1 : 2;
             $str = ($return)? 'Delete '.$getdata->imagesFile.' successfully' : 'Can not delete '.$getdata->imagesFile; 
             $res = loadMessage($id,$str);  
             header('Content-Type: application/json');
             echo json_encode($res);
        }        
     }
     
     public function push_update(){
         $return =$this->AM->update(); 
         $id = ($return)? 1 : 2;
         $str = ($return)? 'Update data successfully' : 'Update data failed'; 
         $res = loadMessage($id,$str);  
         header('Content-Type: application/json');
         echo json_encode($res);      
     }
     
     
     
     
     
     
    
   
    
    
    
        
   
                 
}
