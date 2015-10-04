<?php

 /**
* Function create_serialize_data
* description : set multiple language
* @param String $data new data will be store
  * @param String $language old language
  * @param String $data_comparation Old data
  * @param String new language
* @return String serialize data 
*/
 
 function create_serialize_data($data,$language,$data_comparation='',$newlang=''){
     if ($data_comparation !=''){
         $dp = unserialize($data_comparation);
         $dp[$newlang] = $data;
     }else{
         foreach($language as $k=>$v):
             $dp[$k] = $data;
         endforeach;         
     }
     $data = serialize($dp); 
     return $data;
 }
 
 /**
* Function show_data_serialize
* description : publish data by language
* @param array $data serialize data
* @param String $language the language will be publish
* @return String data
*/
 
 function show_data_serialize($data='',$publiclanguage='en'){
     $row = (is_array($data)) ? $data : unserialize($data);
     $my_lang = $publiclanguage;
     if(!isset($row[$my_lang]))
         return $row['en'];
     return $row[$my_lang];
 }
 
 
  /**
     * Function loadMessage
     * Description Using to notification 
     * @param int $msgType 1 : success , 2 : error , 3 : warning, 4 : info
     * @param string $module_name module where your publish
     * @param array $data array data value
     */
    
    function loadMessage($msgType,$text_message){
        switch ($msgType) {
            case 1 :  $msgType = 'alert-success'; 
                      $msgTitle = 'Success!';
                break;
            case 2 :  $msgType = 'alert-danger';                    
                      $msgTitle = 'Error!';  
                break;
            case 3 : $msgType = 'alert-warning';                    
                     $msgTitle = 'Warning!';
                break;
            case 4 : $msgType = 'alert-info';                    
                     $msgTitle = 'Info!';
                break;           
        } 
        return ' <div class="alert '.$msgType.' alert-block fade in alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><strong>'.$msgTitle.'</strong></p>
                    <p>'.$text_message.'</p>
              </div>';
    }
    
    /**
     * Function top_navigation
     * Description show data top navigation     
     */
    
    function top_navigation(){
        $array_menu=array("entries"=>"Entries","globals"=>"Globals","assets"=>"Assets","users"=>"Users");
        $tmp = '<ul class="nav navbar-nav">';
        $CI = & get_instance();   
        foreach($array_menu as $menu =>$key){
            $class_active = ($CI->uri->segment(2)==$menu)? 'class="active"' : '';
            $tmp.= '<li '.$class_active.'>'.anchor(site_url('cms/'.$menu),$key).'</li>';
        }      
        $tmp.= '</ul>';
        echo $tmp;
    }
    
    /**
     * Function filter_images     
     * Description 
     * @param array $files file images
     * @return array result 
     */
    
    function filter_images($files){
            $allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "JPEG", "GIF", "PNG");
            $ext = explode(".", $files["name"]);
            $extension = end($ext);
            $err['code']= 1;
            $err['text'] = '';
            if($files["size"] > 13000000) {
                $err['code']= 2;
                $err['text'] = 'Upload failed. too large images. must less than 13MB or ';
            } else {                                   
                if ((($files["type"] == "image/gif") || ($files["type"] == "image/jpeg") || ($files["type"] == "image/png") || ($files["type"] == "image/pjpeg")) && in_array($extension, $allowedExts)) {
                   $err['code']= 1;
                   $err['text'] = '';
                }else{
                    $err['code']= 2;
                    $err['text'] = 'Upload failled. Disallowed extensions';                
                }
            }    
            return $err;
    }
    
    /**
     * Function convert_date     
     * Description convert from timestamp to date format Y-m-d
     * @param integer $timestamp 
     * @return date 
     */
    
    function convert_date($timestamp){
        $date = new DateTime();
        date_timestamp_set($date, $timestamp);
        return date_format($date, 'Y-m-d H:i:s');        
    }
    
    