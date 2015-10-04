<?php
/**
 * Description of Globals_model
 *
 * @author wahyu
 */
class Assets_model extends CI_model{
    
    private $sessionID;
    private $lang;
    private $date;
    private $table;
    
    
    public function __construct() {
        parent::__construct();       
        $this->sessionID =1;
        $this->lang = $config['bahasaPengantar'] = array('id'=>'Indonesia','en'=>'Inggris');
        $this->date = new DateTime();                      
        $this->table = 'images';
    }
        
    /**
    * Function get_data_byId
    * description : take row data from database
    * @param String $tablenm table name
    * @param Integer $id primarykey   
    * @return array 
    */
    public function get_data_byId($id){
        $result = $this->db->get_where($this->table,array('imagesID'=>$id));                
        return $result->row();
    }
    
    
     /**
    * Function get_data
    * description : publish data from database
    * @param array $select_data 
    * @param Integer $id primarykey   
    * @return array 
    */
    public function get_data($params){      
       $where  = " WHERE typeassets='".$params['type']."' ";
       $where .= !empty($params['search'])? " AND imagesName LIKE '".$params['search']."%' OR imagesDescription LIKE '".$params['search']."%'" : ""; 
       $result = $this->db->query("SELECT * FROM images ".$where."  ORDER BY ".$params['order']." ".$params['sorting']." LIMIT ".$params['start'].",".$params['finish'])->result_array();      
       return $result;        
    }
    
    public function get_count(){
        $result =  $this->db->count_all_results($this->table);
        return $result;
    }
    
    public function insert($file){                           
        $array_data  = array('typeassets' => 'siteassets',
                           'imagesFile'=> $file['name'],
                           'imagesName'=> $file['name'],                           
                           'postDate'=> $this->date->format('U = Y-m-d H:i:s'),                                                 
                           'userID'=>$this->sessionID);            
        $this->db->insert($this->table, $array_data);         
        return ($this->db->affected_rows()==0)? true : false;
    }
    
    public function update(){    
        $array_data = array(
                'imagesName' => $this->input->post('imagesName',true),
                'imagesDescription' => $this->input->post('imagesDescription',true)
        );                     
        
        $this->db->where('imagesID', $this->input->post('id'));
        $this->db->update($this->table, $array_data);                      
        return ($this->db->affected_rows()!=0)? true : false;
    }
    
    public function delete_byId($id)
    {
        $this->db->where('imagesID', $id);
        $this->db->delete($this->table);
        return ($this->db->affected_rows()!=0)? true : false;
    }
    
    
}