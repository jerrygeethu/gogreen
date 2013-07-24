<?php
	class Gallery extends Controller
	{
		function Gallery()
		{
			parent::controller();
			$this->base = $this->config->item('base_url');
			$this->css = "css/user/style.css";
			$this->load->database();
			$this->load->helper('parameter_helper');
			$this->load->library('session');
			$this->load->library('pagination');
			$this->load->model('user/messeges_model');
			$this->load->model('user/activity_model');
			$this->load->model('user/gallery_model');
			$this->load->model('user/news_model');
		}
		function gallery_photos($start=0)
		{
			if($this->session->userdata('memberid') ==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['start1']=$start+1;
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
		}
			$count= $this->gallery_model ->count_image($id);
			$total = count($count);
			$perpage = '12';
			$path =  $this->base."admin.php/user/gallery/gallery_photos";
			$data['page']=$this->pagination($path,$total,$perpage,$start);	
			$data['image_data'] =$count= $this->gallery_model ->retrive_image($id,$start,$perpage);
			
			$data['image'] = $this->gallery_model->right_gallary();
			
			$data['news'] = $this->news_model->right_side_news();
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/gallery',$data);
			$this->load->view('user/right_gallary',$data);
			$this->load->view('user/footer',$data);
		}
		function read_more($news_id)
		{
			if($this->session->userdata('memberid') ==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['id'] = $news_id;
			$id = $this->session->userdata['memberid'];
/*		$data['base'] = $this->base;
		$data['news'] = $this->news_model->retrive_news($news_id);
		$this->load->view('user/header',$data);
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/readmore_updates',$data);
		$this->load->view('user/footer',$data);
*/
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$projects = $this->activity_model->projects_view($id);
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			$data['news'] = $this->news_model->retrive_news($news_id);
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/readmore_updates_right',$data);
			$this->load->view('user/footer',$data);
		}
		function gallery_video($start = 0)
		{
				if($this->session->userdata('memberid') ==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['start1']=$start+1;
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
			foreach($projects[0] as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}
			$data['image'] = $this->gallery_model->right_gallary();
			
			$count= $this->gallery_model ->count_video($id);
			$total = count($count);
			$perpage = '12';
			$path =  $this->base."admin.php/user/gallery/gallery_video";
			$data['page']=$this->pagination($path,$total,$perpage,$start);	
			$data['video_data'] = $this->gallery_model ->retrive_video($id,$start,$perpage);
			
			$data['news'] = $this->news_model->right_side_news();
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/video',$data);
			$this->load->view('user/right_gallary',$data);
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
?>
