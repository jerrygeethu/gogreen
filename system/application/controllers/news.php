<?php

class News extends Controller {
   
   var $base;
   var $css;
   
	function News()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
		$this->css = "style.css";
		$this->load->helper('parameter');
		$this->load->database();
		$this->load->model('news_model');
	}
	
	function index($value='index.html')
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   $this->load->view($value,$data);
		
	}
	
	function getlatestnews()
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   $data['news'] = $this->news_model->getNews(3);
	   $this->load->view('latestnews.html',$data);
		
	}
	
	function getnews()
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   $data['news'] = $this->news_model->getNews();
	   $this->load->view('header',$data);	
	   $this->load->view('news.html',$data);
	   $this->load->view('footer',$data);
		
	}
	
	
	
	function update($editid='') {
		$data['base'] = $this->base;
		$data['css'] = $this->css;
		$data['news'] = $this->news_model->getNews();
		$this->load->helper('form');
		// $this->load->view('header',$data);	
		$data['newstype'] = $this->news_model->getnewstype();
		$data['editnews'][]= '' ;
		
		if($this->input->post('newstype')!='')
		{
			$newstype = $this->input->post('newstype');
			$txtnewstopics = $this->input->post('txtnewstopics');
			$txtnewsdetails = $this->input->post('txtnewsdetails');
			
			echo $this->news_model->addnews($newstype, $txtnewstopics, $txtnewsdetails);
	}
		
		if($editid!='') { 
			$data['editnews'] = $this->news_model->getnews($editid); 
			}
		$this->load->view('admin/adminnews.php',$data);
		// $this->load->view('footer',$data);
	
	}
	
	
	
	function send($editid='') {
		$data['base'] = $this->base;
		$data['css'] = $this->css;
		$data['news'] = $this->news_model->getNews(1,$editid);
		$this->load->helper('form');
		$this->load->view('admin/newsemail',$data);			
	}
	
	
	
	
	// To insert news - hmrsqt@gmail.com
	function add() {
		$data['base'] = $this->base;
		$data['css'] = $this->css;
		$data['news'] = $this->news_model->getNews();
		$this->load->helper('form');
		
			
		
		// $this->load->view('header',$data);	
		$data['newstype'] = $this->news_model->getnewstype();
		$data['editnews'][]= '' ;
		if($editid!='') { 
			$data['editnews'] = $this->news_model->getnews($editid); 
			}
		$this->load->view('admin/adminnews.php',$data);
		// $this->load->view('footer',$data);
	
	}
	
   
	
}


/* End of file home.php */
/* Location: ./system/application/controllers/home.*/
