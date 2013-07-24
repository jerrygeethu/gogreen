<?php

class Home extends Controller {

     var $base;
     var $css;
	 
	function Home()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
		
        $this->css = "style.css";
		$this->load->library('session');
		$this->load->helper('url');
		
	}
	
	function index()
	{
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;		
		$data['head'] ="News List";
	
		$li=$this->base.'admin.php/user/login';
					
		redirect($li, 'refresh');
		
		
		
		
	}
	function signout()
	{
		 
		$this->session->unset_userdata('memberid');
		$this->session->unset_userdata('fullname');
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('memphoto');
		$this->index();
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
