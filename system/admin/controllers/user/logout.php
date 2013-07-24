<?php
	class Logout extends controller
	{
		function Logout()
		{
			parent::controller();
			$this->load->library('session');
			$this->base = $this->config->item('base_url');
			$this->load->helper('url');
		}
		function index()
		{
			$this->session->unset_userdata('memberid');
			$this->session->unset_userdata('status');
			$this->session->unset_userdata('memphoto');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('mobile');
			$this->session->unset_userdata('name');
			redirect($this->base.'admin.php/user/login','refresh');
		}
/*
		function signout()
		{
			$this->session->unset_userdata('memberid');
			$this->session->unset_userdata('status');
			$this->session->unset_userdata('memphoto');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('mobile');
			$this->session->unset_userdata('name');
			$this->index();
		}*/
	}


?>
