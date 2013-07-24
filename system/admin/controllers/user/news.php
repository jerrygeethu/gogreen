<?php

class News extends Controller {

     var $base;
     var $css;
	 
	function News()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
        $this->css = "css/user/style.css";
		$this->load->database();
		$this->load->model('user/activity_model');
		$this->load->model('user/messeges_model');
		$this->load->model('user/news_model');
		$this->load->model('user/member_model');
		$this->load->library('session');
		$this->load->helper('string');
		$this->load->library('pagination');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('date');
	}
	function index($id)
	{
		if($id == "")
		{
			header("Location:".$this->base.'admin.php/user/login');
		}
		$data['workerscount'] = $this->activity_model->workers_count($id);
		$data['memdata'] = $user = $this->messeges_model->memberdata($id);
		$projectid = $this->activity_model->pic_projectid($id);
			foreach($projectid as $projectid1)
			{
				$this->session->set_userdata('projectid',$projectid1['projectid']);
			}
			foreach($user as $user1)
			{
			$this->session->set_userdata('memberid',$user1['memberid']);
			$this->session->set_userdata('email',$user1['email']);
			}
		$this->news_list();
	}
	function news_list($start = 0)
	{
		if($this->session->userdata('memberid') ==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
		$data['name']=$this->session->userdata('name');
		$data['mobile']=$this->session->userdata('mobile');
		$data['memberid'] = $id= $this->session->userdata('memberid');
		$data['base'] = $this->base;
		$data['css'] = $this->css;
		$news = $this->news_model->news_list1();
		$total = count($news);
		$perpage = '5';
		$path = $this->base.'admin.php/user/news/news_list';
		$data['workerscount'] = $this->activity_model->workers_count($id);
		$data['memdata'] =  $this->messeges_model->memberdata($id);
		$projects = $this->activity_model->projects_view($id);
			foreach($projects as $projects1)
			{
				$data['project_id'] = $projects1['projectid'];
			}
		$data['news_data'] = $this->news_model->news_list($start,$perpage);
		$data['page'] = $this->pagination($path,$total,$perpage,$start);
		$this->load->view('user/header',$data);
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/updates',$data);
		$this->load->view('user/footer',$data);
	}
	function news_read($news_id)
	{
		if($this->session->userdata('memberid') ==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
		$data['base'] = $this->base;
		$data['css'] = $this->css;
		$data['id'] = $news_id;
		$id = $this->session->userdata('memberid');
		$data['workerscount'] = $this->activity_model->workers_count($id);
		$data['memdata'] =  $this->messeges_model->memberdata($id);
		$projects = $this->activity_model->projects_view($id);
			foreach($projects[0] as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
		$data['news'] = $this->news_model->retrive_news($news_id);
		$this->load->view('user/header',$data);
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/readmore_updates',$data);
		$this->load->view('user/footer',$data);
	}
	function pagination($path1,$tot,$perpage,$start1)
		{
			$config['base_url'] =$path1;
			$config['total_rows'] = $tot;
			$config['per_page'] = $perpage;
			$perpage = $config['per_page']; 
			if(is_numeric($start1))
				{
					if($start1>$tot)
					{ 
						$start1 = 0;
					}
				}
				else
				{
					$start = 0;
				}			

			$this->pagination->initialize($config);
			return($this->pagination->create_links());
		}
}

