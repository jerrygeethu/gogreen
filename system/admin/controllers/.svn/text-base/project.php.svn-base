<?php

class Project extends Controller {

     var $base;
     var $css;
	 
	function Project()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');		
     
		
		$this->load->database();
		$this->load->model('project_model');
		$this->load->model('member_model');
		$this->load->model('news_model');
		$this->load->model('gallery_model');
		$this->load->helpers('parameter_helper');
		$this->load->library('session');
		$this->name=$this->session->userdata('name');
		
	}
	
	function index($limit="")
	{
		$data['base'] = $this->base;
		$data['head'] ="Project List";
		
		
		$this->load->library('pagination');
	    $list=$this->project_model->projectlist($id="",$limit,$perpage="");
		

		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/project/index';
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
         
		$data['list']=$this->project_model->projectlist($id="",$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('projectlist',$data);
		//$this->load->view('rightmenu',$data);		
		$this->load->view('footer',$data);	
		
	}
	function plotlist($limit="")
	{
		$data['base'] = $this->base;
		$data['head'] ="Plot List";
		
		
		
		$this->load->library('pagination');
	    $list=$this->project_model->listplot($id="",$limit,$perpage="");
		

		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/project/plotlist';
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
         
		$data['plot']=$this->project_model->listplot($id="",$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('plotlist',$data);
		//$this->load->view('rightmenu',$data);		
		$this->load->view('footer',$data);	
	}
	
	function addplot()
	{
		$data['base'] = $this->base;
		$data['head'] ="Add Plot";
		
		$data['project']=$this->project_model->getproject();
	    $data['member']=$this->member_model->member();
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
		$this->form_validation->set_rules('extent', 'Extent', 'required');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('owner', 'Owner', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		if($this->input->post('add')=="Save" && $this->form_validation->run() == TRUE)
		{
			
		$insert['title']=$this->input->post('title');
		$insert['description']=$this->input->post('description');
		$insert['location']=$this->input->post('location');
		$insert['extent']=$this->input->post('extent');		
		$insert['status']="running";
		$insert['remarks']=$this->input->post('remarks');
		$insert['projectid']=$this->input->post('project');
		$insert['owner']=$this->input->post('owner');
		
		
		$value=$this->multiupload();
		
			if(!empty($value))
			{
			  	if(!empty($value['main']))
				{
				
				$insert['mainphoto']=$value['main'];
			    }
				if(!empty($value['sub']))
				{
				$insert['subphoto']=$value['sub'];	
			    }			
			}
	
			
		
		$insert_status=$this->project_model->insertplot($insert);
		if(!empty($insert_status))
		{
			$data['message']="Plot added";
			
		}
		else
		{
			$data['message']="Failed";
		}
		$this->plotlist();
	    }
		else
		{	
	     
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('addplot',$data);
		$this->load->view('rightmenu',$data);		
		$this->load->view('footer',$data);			
		}
		
		
		
		
	}
	
	
	function editplot()
	{
		$data['base'] = $this->base;
		$data['head'] ="Edit Plot";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		
		
		
		$data['project']=$this->project_model->getproject();
	    $data['member']=$this->member_model->member();
		
		$plotid=$this->input->post('plotid');
		$data['plot']=$this->project_model->listplot($plotid,$limit="",$perpage="");
		
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
		$this->form_validation->set_rules('extent', 'Extent', 'required');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('owner', 'Owner', 'required');
		
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		
		if($this->input->post('edit')=="Save" && $this->form_validation->run() == TRUE)
		{
			
		$insert['title']=$this->input->post('title');
		$insert['description']=$this->input->post('description');
		$insert['location']=$this->input->post('location');
		$insert['extent']=$this->input->post('extent');		
		$insert['status']="running";
		$insert['remarks']=$this->input->post('remarks');
		$insert['projectid']=$this->input->post('project');
		$insert['owner']=$this->input->post('owner');
		
		
		$value=$this->multiupload();
		
			if(!empty($value))
			{
				if(!empty($value['main']))
				{
				
				$insert['mainphoto']=$value['main'];
			    }
				if(!empty($value['sub']))
				{
				$insert['subphoto']=$value['sub'];	
			    }			
			}
			else
			{
				$insert['mainphoto']=$this->input->post('oldphoto1');
				$insert['subphoto']=$this->input->post('oldphoto2');	
				
			}
	
		
		$insert_status=$this->project_model->updateplot($insert,$plotid);
		
		if(!empty($insert_status))
		{
			$data['message']="Plot added";
			
		}
		else
		{
			$data['message']="Failed";
		}
		$this->plotlist();
	    }
		else
		{	
	     
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('editplot',$data);
		$this->load->view('rightmenu',$data);		
		$this->load->view('footer',$data);			
		}
		
		
		
		
	}
	

	function viewproject($id="")
	{
		$data['base'] = $this->base;
		$data['head'] ="Edit Project";
	   
		
	    if($this->input->post('edit')!="")
		{
			$list=$this->project_model->viewproject($id);
			$this->editproject($list);
		}
		else if($this->input->post('view')!="")
		{
			$list=$this->project_model->viewproject($id);
			$this->editproject($list);
		}
		
		
		
	}
	
		function projectview($id="")
	{
		$data['base'] = $this->base;
		$data['head'] ="View Project";
	   
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		$data['list']=$this->project_model->viewproject($id);
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('viewproject',$data);
		$this->load->view('rightmenu',$data);		
		$this->load->view('footer',$data);	
		
		
		
	}
	
	function addproject()
	{
		$data['base'] = $this->base;
		$data['head'] ="Add Project";
		
	    $data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
		$this->form_validation->set_rules('extent', 'Extent', 'required');
		$this->form_validation->set_rules('startdate', 'Date', 'required');		
		$this->form_validation->set_rules('subscribed', 'Subscribe', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
	
		
		
		if($this->input->post('add')=="Save" && $this->form_validation->run() == TRUE)
		{
			
		$insert['title']=$this->input->post('title');
		$insert['description']=$this->input->post('description');
		$insert['location']=$this->input->post('location');
		$insert['extent']=$this->input->post('extent');
		$insert['date']=dmytoymd($this->input->post('startdate'));
		
		if($this->input->post('subscribed')=="on")
		{
		$insert['subscribe']="1";
	    }
		$insert['status']=$this->input->post('status');
		$insert['remarks']=$this->input->post('remarks');
		
		
			
		
		$insert_status=$this->project_model->insertproject($insert);
		if(!empty($insert_status))
		{
			$data['message']="Project added";
			
		}
		else
		{
			$data['message']="Failed";
		}
		$this->index();
	    }
		else
		{
				
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('addproject',$data);
		$this->load->view('rightmenu',$data);		
		$this->load->view('footer',$data);		
			
		}
		
		
		
		
	}
	function editproject($list="")
	{
		
		$data['base'] = $this->base;
		$data['head'] ="Edit Project";
		
		$data['list']=$list;
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		
		
		if($this->input->post('editsubmit')!="")
		{
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('extent', 'Extent', 'required');
			$this->form_validation->set_rules('startdate', 'Date', 'required');		
			$this->form_validation->set_rules('subscribed', 'Subscribe', 'required');
			$this->form_validation->set_rules('status', 'Status', 'required');
		    
			if($this->form_validation->run() == TRUE)
		    {
		        
				$insert['title']=$this->input->post('title');
				$insert['description']=$this->input->post('description');
				$insert['location']=$this->input->post('location');
				$insert['extent']=$this->input->post('extent');
				$insert['date']=dmytoymd($this->input->post('startdate'));
				
				
						if($this->input->post('subscribed')=="on")
						{
						$insert['subscribe']="1";
						}
						$insert['status']=$this->input->post('status');
						$insert['remarks']=$this->input->post('remarks');
						
						
							
							$id=$this->input->post('id');
							$where['projectid']=$id;
							$table="project";
							$insert_status=$this->project_model->updatetable($insert,$where,$table);
							if($insert_status=="1")
							{
								$this->index();		
								
							}
						
	        }	
			
			  	$this->viewproject();		
			
			
		}
		else
		{
			 
			
			
			$this->load->view('header',$data);
			$this->load->view('leftmenu',$data);
			$this->load->view('editproject',$data);
			$this->load->view('rightmenu',$data);		
			$this->load->view('footer',$data);	
			 
		}
		
				
		
		
		
		
		
	}

	
	function multiupload()
	{
		
	    $name="";
		$config['upload_path'] = './uploads/project/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name']=TRUE;
		
		
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('photo1'))
		{
			$error =$this->upload->display_errors();		      
			$data['error']=$error;
			
			
		}	
		else
		{
			
			
			$updata =$this->upload->data();
			$name['main']=$updata['file_name'];
		}
						

			
		  
		
		 
		  
	
			if (!$this->upload->do_upload('photo2'))
			{
				$error1 =$this->upload->display_errors();				  
				$data['error']=$error1;
				
				
			}	
			else
			{
				$updata1 =$this->upload->data();
			    $name['sub']=$updata1['file_name'];
				
			}
			
			
			return($name);	
		
		
	}
	function deleteproject($id)
	{
		$data['base'] = $this->base;
		
		if($id!="")
		{		
		$status=$this->project_model->deleteproject($id);
	    }
		$this->index();		
	}
	function deleteplot($id)
	{
		$data['base'] = $this->base;
		
		if($id!="")
		{		
		$status=$this->project_model->plotdelete($id);
	    }
		$this->plotlist();		
	}
	
	function viewplot($id)
	{
		$data['base'] = $this->base;
		$data['head'] ="View Plot";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

				
		$data['list']=$this->project_model->listplot($id,$limit="",$perpage="");
	    
		
		
		    $this->load->view('header',$data);
			$this->load->view('leftmenu',$data);
			$this->load->view('viewplot',$data);
			$this->load->view('rightmenu',$data);		
			$this->load->view('footer',$data);	
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
