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
		$this->load->model('gallery_model');
		$this->load->helper('parameter_helper');
		$this->load->library('session');
	}
	
	function index($limit="",$id="")
	{
		$data['base'] = $this->base;
		$data['head'] ="News List";
		
		if($id!="")
		{
			$this->member_model->mem_signin($id);
			$data['name']=$this->session->userdata('name');
			
		}
		$list=$this->news_model->listnews($id="",$limit,$perpage="");
		
		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/news/index/';
		$config['total_rows'] = count($list);
		$perpage=$config['per_page'] = '10';
		$config['uri_segment'] = '3';	
		$config['num_links'] ='2';
		
		
		$this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		
		$data['limit']=$limit;		
	    $data['news']=$this->news_model->listnews($id="",$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('news',$data);
		$this->load->view('footer',$data);
	}
	function addnews()
	{
		$data['base'] = $this->base;
		$data['head'] ="Add News";
		
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
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
	
	function editnews($id,$limit)
	{
		
		$data['base'] = $this->base;
		$data['head'] ="Edit News";
		$data['limit']=$limit;
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		if($this->input->post('editsubmit')!="")
		{
		if($this->input->post('category')=="private")
	    { 
		$this->form_validation->set_rules('project1', 'Project', 'required'); 
		$this->form_validation->set_rules('owner1', 'Owner', 'required');
	    }
      	}
		else
		{
		if($this->input->post('category')=="private")
	    { 
		$this->form_validation->set_rules('project', 'Project', 'required'); 
		$this->form_validation->set_rules('owner', 'Owner', 'required');
	    }
	    }
		
		$this->form_validation->set_rules('author', 'Author', 'required');		
		$this->form_validation->set_rules('news', 'News', 'required');
		$this->form_validation->set_rules('active', 'Active', 'required');
		$this->form_validation->set_rules('newsdate', 'Date', 'required');
		
		
		$data['project']=$this->project_model->getproject();
		$data['member']=$this->member_model->getid();
		
		
		if($this->input->post('edit')!="")
		{
			$data['news']=$this->news_model->listnews($id,$limit="",$perpage="");
			
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
				$insert['project']=$this->input->post('project1');
				$insert['owner']=$this->input->post('owner1');
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
				
				$this->index($limit);
				
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
	
	function deletenews($id,$limit)
	{
		$data['base'] = $this->base;
		
		if($id!="")
		{		
		$status=$this->news_model->newsdelete($id);
	    }
		$this->index($limit,$id);		
	}
	
	function viewnews($id)
	{
		$data['base'] = $this->base;
		$data['head'] ="View Member";
		
		
	
		$data['list']=$this->news_model->listnews($id,$limit="",$perpage="");
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('viewnews',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
		
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
