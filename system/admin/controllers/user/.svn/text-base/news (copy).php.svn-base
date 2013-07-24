<?php

class News extends Controller {

     var $base;
     var $css;
	 
	function News()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
		
        $this->css = "style.css";
		$this->load->database();
		$this->load->model('news_model');
		$this->load->model('project_model');
		$this->load->model('member_model');
		$this->load->helper('parameter_helper');
		$this->load->library('session');
	}
	
	function index($id="")
	{
		$data['base'] = $this->base;
		$data['head'] ="News List";
		
		if($id!="")
		{
			$d[] = $this->member_model->mem_signin($id);
			$data['name']=$this->session->userdata('name');
		}
		$data['news']=$this->news_model->listnews();
	
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('news',$data);
		//$this->load->view('rightmenu',$data);		
		$this->load->view('footer',$data);
	}
	function addnews()
	{
		$data['base'] = $this->base;
		$data['head'] ="Add News";
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		if($this->input->post('category')=="private")
	    { 
		$this->form_validation->set_rules('project', 'Project', 'required'); 
		$this->form_validation->set_rules('owner', 'Owner', 'required');
	    }
		$this->form_validation->set_rules('author', 'Author', 'required');		
		$this->form_validation->set_rules('news', 'News', 'required');
		$this->form_validation->set_rules('active', 'Active', 'required');
		$this->form_validation->set_rules('newsdate', 'Date', 'required');
		
		
		
		$data['project']=$this->project_model->getproject();
		$data['member']=$this->member_model->getid();
		
		if($this->input->post('add')=="Save" && $this->form_validation->run() == TRUE)
		{
			$insert['title']=$this->input->post('title');
			$insert['category']=$this->input->post('category');
			$insert['project']=$this->input->post('project');
			$insert['owner']=$this->input->post('owner');
			$insert['author']=$this->input->post('author');
			$insert['news']=$this->input->post('news');
			$insert['status']=$this->input->post('active');
			$insert['remarks']=$this->input->post('remarks');
			$insert['newsdate']=dmytoymd($this->input->post('newsdate'));
			
			$value=$this->upload();
			if(!empty($value))
			{
				$insert['photo']=$value;				
			}
			$insert_status=$this->news_model->insertnews($insert);
			if(!empty($insert_status))
			{
				$data['message']="News added";
				
			}
			else
			{
				$data['message']="Failed";
			}
			$this->index();
			
		}
		else
		{
			
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('addnews',$data);
		$this->load->view('rightmenu',$data);		
		$this->load->view('footer',$data);
    	}
	}
	
	function editnews($id)
	{
		
		$data['base'] = $this->base;
		$data['head'] ="Edit News";
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		if($this->input->post('category')=="private")
	    { 
		$this->form_validation->set_rules('project', 'Project', 'required'); 
		$this->form_validation->set_rules('owner', 'Owner', 'required');
	    }
		
		$this->form_validation->set_rules('author', 'Author', 'required');		
		$this->form_validation->set_rules('news', 'News', 'required');
		$this->form_validation->set_rules('active', 'Active', 'required');
		$this->form_validation->set_rules('newsdate', 'Date', 'required');
		
		
		$data['project']=$this->project_model->getproject();
		$data['member']=$this->member_model->getid();
		
		if($this->input->post('edit')!="")
		{
			$data['news']=$this->news_model->listnews($id);
			
			$this->load->view('header',$data);
			$this->load->view('leftmenu',$data);
			$this->load->view('addnews',$data);
			$this->load->view('rightmenu',$data);		
			$this->load->view('footer',$data);			
			
		}
		else if($this->input->post('editsubmit')!="")
		{
			
			if($this->form_validation->run() == TRUE)
			{
				
				$insert['title']=$this->input->post('title');
				$insert['category']=$this->input->post('category');
				$insert['project']=$this->input->post('project');
				$insert['owner']=$this->input->post('owner');
				$insert['author']=$this->input->post('author');
				$insert['news']=$this->input->post('news');
				$insert['status']=$this->input->post('active');
				$insert['remarks']=$this->input->post('remarks');
				$insert['newsdate']=dmytoymd($this->input->post('newsdate')); 
				
				$value=$this->upload();
				if(!empty($value))
				{
					$insert['photo']=$value;				
				}
				else
				{
					$insert['photo']=$this->input->post('oldimg');
				}
				$insert_status=$this->news_model->editnews($insert,$id);
				
				
				if(!empty($insert_status))
				{
					$data['message']="News Updated";
					
				}
				else
				{
					$data['message']="Failed";
				}
				
				$this->index();
				
			}
			
			
		}
		
		
		
		
		
	}
	
	
	
	
	function upload()
	{
		$config['upload_path'] = './uploads/news/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name']=TRUE;
		
		
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('userfile'))
		{
			$error =$this->upload->display_errors();
			
		      
			$data['error']=$error;
			
		}	
		else
		{
			
			
			$updata =$this->upload->data();
			$name=$updata['file_name'];
			
			$config1['image_library'] = 'gd2';
			$config1['source_image'] ='./uploads/news/'.$name;
			$config1['new_image'] = './uploads/news/thumb/'.$name;
			$config1['create_thumb'] = TRUE;
			$config1['maintain_ratio'] = TRUE;
			$config1['width'] = 75;
			$config1['height'] = 50;

			$this->load->library('image_lib', $config1);

			$this->image_lib->resize();
			$data['error']=$this->image_lib->display_errors();
			
			return($name);
			
			
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
