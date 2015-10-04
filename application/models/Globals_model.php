<?php
/**
 * Description of Globals_model
 *
 * @author wahyu
 */
class Globals_model extends CI_model{
    
    var $sessionID;
    var $lang;
    
    public function __construct() {
        parent::__construct();       
        $this->sessionID =1;
        $this->lang = $config['bahasaPengantar'] = array('id'=>'Indonesia','en'=>'Inggris');
    }
        
    /**
    * Function get_data_byId
    * description : take row data from database
    * @param String $tablenm table name
    * @param Integer $id primarykey   
    * @return array 
    */
    public function get_data_byId($id){
        $result = $this->db->get_where('globals',array('userID',$id));        
        return $result->row();
    }
    
    
    public function insert(){               
        $copyright    = $this->input->post("copyright",true);
        $contactUs   = $this->input->post("contactUs",true);
        $email       = $this->input->post("email",true);       
        $array_data  = array('copyright' => $copyright,
                           'contactUs'=> create_serialize_data($contactUs,$this->lang),
                           'email' => $email,
                           'postdate'=>time(),                                                 
                           'userID'=>$this->sessionID);            
        $this->db->insert('globals', $array_data);         
        return ($this->db->affected_rows()==0)? true : false;
    }
    
    public function update($old){        
        $copyright    = $this->input->post("copyright",true);
        $contactUs   = $this->input->post("contactUs",true);
        $email       = $this->input->post("email",true);       
        $array_data  = array('copyright' => $copyright,
                          'email' => $email,  
                           'contactUs'=> create_serialize_data($contactUs,$this->lang,$old->contactUs,'en'));         
        $this->db->where('userID', $this->sessionID);
        $this->db->update('globals', $array_data);                      
        return ($this->db->affected_rows()==0)? true : false;
    }
    
    
}