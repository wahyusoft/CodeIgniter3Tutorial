<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of Mytemplate
 *
 * @author wahyu widodo
 */

class Mytemplate {
    
    var $template_data = array();
    var $data;
    
    public function __construct() {
        $this->CI = & get_instance();              
    }
    
        
    public function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }
    
    /**
     * Function loadTemplate
     * Description Using load themes frontend
     * @param int $mode 1 to frontend , 2 to backend
     * @param string $module_name module where your publish
     * @param array $data array data value
     */
    
    public function loadTemplate($mode=1,$view = '' , $view_data = array(), $return = FALSE){        
        $publish_view = ($mode==1)? '/' : 'cms/';                    
        $this->set('contents', $this->CI->load->view($publish_view.$view, $view_data, TRUE));	
        return $this->CI->load->view($publish_view.'adminpages', $this->template_data, $return);
    }
    
     /**
     * Function cekAuth
     * Description check authentication pages     
     */
    
    public function cekAuth(){
        $name = $this->CI->session->userdata('username');
        if(trim($name == '')){
            $this->loadMessage(2, "You do not have access this pages");
            redirect(site_url("cms/login"));
            exit;
        }
    }
    
     /**
     * Function setPublicLanguage
     * Description create session language     
     */
    
    public function setPublicLanguage($lang){
        $this->CI->session->set_userdata('publiclanguage',$lang);
        $this->data['publiclanguage'] = $lang;
    }
    
    
    /**
     * Function ComboSource
     * @param string $name The name of combobox component
     * @param string $pilih Option selected condition
     * @return string $tmp the result combobox component
     */

    public function ComboSource($name,$pilih=''){
       $data = $this->CI->themes->get_array_db($name); 
       $tmp='<select name="'.$name.'" class="form-control selecter" >';
       $tmp.='<option selected="selected" value="">All Source</option>';       
       foreach($data as $row=>$key):       
           $selected=($pilih==$key->sourceID)? 'selected="selected"' : '';
           $tmp.='<option value="'.$key->sourceID.'" '.$selected.' >'.$key->sourceName.'</option>';
       endforeach;                      
       $tmp.='</select>';
       return $tmp;    
    }

    /**
     * Function ComboCategories
     * @param string $name The name of combobox component
     * @param string $pilih Option selected condition
     * @return string $tmp the result combobox component
     */

    public function ComboCategories($name,$pilih=''){
       $data = $this->CI->themes->get_array_db($name); 
       $tmp='<select name="'.$name.'" class="form-control selecter" >';
       $tmp.='<option selected="selected" value="">All Source</option>';       
       foreach($data as $row=>$key):       
           $selected=($pilih==$key->categoryID)? 'selected="selected"' : '';
           $tmp.='<option value="'.$key->categoryID.'" '.$selected.' >'.$key->categoryName.'</option>';
       endforeach;                      
       $tmp.='</select>';
       return $tmp;    
    }
    
    
    
    
}
