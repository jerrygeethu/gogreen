<?php
//if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Empsettings{
var $CI;
	function Empsettings()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('member_model');
	}	
	public function empower($empid)
	{
		return $this->CI->member_model->getw($empid);
	}
	public function check_submission($data)
	{
		
		
			$data=serialize($data);
		
			
			if($this->CI->session->userdata('locname')!=FALSE){
				if($this->CI->session->userdata('locname')==$data){
				return FALSE;
				}
				else{	
				$this->CI->session->set_userdata('locname',$data);
				return TRUE;				
				}
			}
			else{
				$this->CI->session->set_userdata('locname',$data);
				return TRUE;
			}
	}


}
?>
