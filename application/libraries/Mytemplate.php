<?php if(!defined('BASEPATH')) exit('Tidak boleh ngakses langsung mas bro !');
/**
 * Description of My_template
 *
 * @author wahyu widodo
 */
class Mytemplate {
	
	var $template_data = array();
	
	public function __construct(){
		$this->ci = & get_instance();			
	}	
	
	public function set($name, $value){
		$this->template_data[$name] = $value;
	}
	
	public function loadAmin($viewname = '', $view_data = array(), $return =FALSE){
		$this->set('contents',$this->ci->load->view($viewname, $view_data, TRUE));
		$this->ci->load->view('admintemplate',$this->template_data, $return);
	}
	
}