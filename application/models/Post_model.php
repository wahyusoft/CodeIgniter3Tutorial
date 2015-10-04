<?php
/**
 * Description of Post_model
 *
 * @author wahyu
 */
class Post_model extends CI_model{
    
    private $sessionID;
    private $lang;
    private $table_name;
    
    public function __construct() {
        parent::__construct();
        $this->sessionID = 1;
        $this->lang = $config['bahasaPengantar'] = array('id'=>'Indonesia','en'=>'Inggris');
        $this->table_name = "post";
    }
    
   /**
    * Function get_array_db
    * description : take array data from database
    * @param String $module module name   
    * @return array 
    */
    public function get_array_db($module){
        $this->db->where(array("postModule"=>$module,"userID"=>$this->sessionID));
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
    
    /**
    * Function get_data_byId
    * description : take row data from database
    * @param String $tablenm table name
    * @param Integer $id primarykey   
    * @return array 
    */
    public function get_data_byId($id){
        $this->db->select('post');
        $result = $this->db->where('postID',$id);
        return $result->row();
    }
    
    
    public function insert($module){               
        $title        = $this->input->post("title_name",true);
        $body       = $this->input->post("content_name",true);
        $imgcaption  = $this->input->post("imgcaption",true);
        $keyword    = $this->input->post("keyword",true);
        $filename    = $this->input->post("file_name",true);
        $imalign     = $this->input->post("imalign",true);
        $array_data  = array('postTitle' => create_serialize_data($title,$this->lang),
                         'postDescription'=> create_serialize_data($body,$this->lang),
                         'postEntry'=>time(),
                         'postModule' => $this->db->escape($module),
                         'postKeyword' => create_serialize_data($keyword,$this->lang),
                         'postImageCaption'=> create_serialize_data($imgcaption,$this->lang),
                         'postAlign'=> $imalign,
                         'userID'=>$this->sessionID);            
        $this->db->insert('post', $array_data);         
        return ($this->db->affected_rows()==0)? true : false;
    }
        
    
    public function update($id){        
        $title        = $this->input->post("title_name");
        $body       = $data->input->post("content_name");
        $imgcaption  = $data->input->post("imgcaption");
        $keyword    = $data->input->post("keyword");
        $filename    = $data->input->post("file_name");
        $imalign     = $data->imalign;
        $array_data  = array('postTitle' => create_serialize_data($this->db->escape($title)),
                         'postDescription'=> create_serialize_data($this->db->escape($body)),
                         'postEntry'=>time(),
                         'postImage' => $this->db->escape($filename),
                         'postKeyword' => create_serialize_data($this->db->escape($keyword)),
                         'postImageCaption'=> create_serialize_data($this->db->escape($postImageCaption)),
                         'postAlign'=> $this->db->escape($imalign),
                         'userID'=>$this->sessionID);       
        $this->db->where('postID', $id);
        $this->db->update('post', $array_data);                      
        return ($this->db->affected_rows()!=1)? false : true;
    }
    
    public function delete_data($id){
        $this->db->where('postID', $id);
        $result = $this->db->delete('post');
    }
}
