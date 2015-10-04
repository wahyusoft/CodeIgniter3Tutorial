<?php
/**
 * Description of Blocks_model
 *
 * @author wahyu
 */
class Blocks_model extends CI_model{
    
    public function __construct() {
        parent::__construct();       
    }
    
   /**
    * Function fillgrid
    * description : take array data from database
    * @return array 
    */
    public function fillgrid(){
        $this->db->order_by("blockId","ASC");
        $data = $this->db->get("block");
        $array_css = array("warning","primary","success","cost");
        $i=0;
        foreach($data->result() as $row){          
          $blockname = $row->blockName;  
          echo '<div class="col-sm-3">                                             
                 <div class="the-box no-border full text-center">
                        <div class="the-box no-border bg-'. $array_css[$i].' no-margin">									
                                <h1 class="bolded less-distance">'.$blockname.'<i class="wi-degrees"></i></h1>
                                <h4></h4>
                        </div><!-- /.the-box no-border bg-warning no-margin -->
                        <div class="the-box no-border no-margin">
                                <h4 class="bolded less-distance">'.anchor(site_url('cms/'.$blockname),'View '.$blockname).'</h4>
                                <p class="small text-muted">'.anchor(site_url('cms/'.$blockname.'/action/add'),'Add').' | '.anchor(site_url('cms/'.$blockname),'Edit').'</p>
                        </div>
                </div>
            </div>';
        $i++;  
        }
        exit;
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
    
    
    public function insert(){               
        $title        = $this->input->post("title_name",true);
        $body       = $this->input->post("content_name",true);
        $imgcaption  = $this->input->post("imgcaption",true);
        $keyword    = $this->input->post("keyword",true);
        $filename    = $this->input->post("file_name",true);
        $imalign     = $this->input->post("imalign",true);
        $array_data  = array('postTitle' => create_serialize_data($title,$this->lang),
                         'postDescription'=> create_serialize_data($body,$this->lang),
                         'postEntry'=>time(),
                         //'postImage' => $this->db->escape($filename),
                         'postKeyword' => create_serialize_data($keyword,$this->lang),
                         'postImageCaption'=> create_serialize_data($imgcaption,$this->lang),
                         'postAlign'=> $imalign,
                         'userID'=>$this->sessionID);            
        $this->db->insert('post', $array_data);         
        return ($this->db->affected_rows()!=1)? false : true;
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