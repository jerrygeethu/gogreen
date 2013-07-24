<?php

class Settings extends Controller {

     var $base;
     var $css;
	 
	function Settings()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
		
        $this->css = "style.css";
		
	}
	
	function index()
	{
		$data['base'] = $this->base;
		
		$this->load->view('header',$data);
		$this->load->view('settings',$data);
		$this->load->view('footer',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
