<?php

class Gallery extends Controller {

     var $base;
     var $css;
	 
	function Gallery()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
		$this->load->database();
		$this->load->model('gallery_model');
		$this->load->model('project_model');
		$this->load->model('news_model');
		
        $this->css = "style.css";
		$this->load->library('session');
		$this->load->helpers('parameter_helper');
		$this->name=$this->session->userdata('name');
		
	}
	
	function index($limit="")
	{
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		
		$photo=$this->gallery_model->listphoto($id="",$limit,$perpage="");
	    $data['head'] ="List Photos";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		
		
		$this->load->library('pagination');
		$config['base_url'] = $this->base.'admin.php/gallery/index';
		$config['total_rows'] =count($photo);
		$perpage=$config['per_page'] = '12';
		$config['num_links'] ='2';

        $this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		
		$data['limit']=$limit;	
		$data['photo']=$this->gallery_model->listphoto($id="",$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('listphotos',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
	}
	function listvideos($limit="")
	{
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] ="List Videos";
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
        
		$videos=$this->gallery_model->listvideos($id="",intval($limit),$perpage="");
		$this->load->library('pagination');
		$config['base_url'] = $this->base.'admin.php/gallery/listvideos/';
		$config['total_rows'] =count($videos);
		$perpage=$config['per_page'] = '2';
		$config['num_links'] ='2';

        $this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		
		$data['limit']=$limit;	

        $data['videos']=$this->gallery_model->listvideos($id="",$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('listvideos',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
	}
	
	function addvideos()
	{
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] ="Add Videos";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		
		$data['memberlist']=$this->project_model->getplot();
		
		
		//if ($this->form_validation->run() == true)
		//{
			
		$insert['name']=$this->input->post('name');
		$insert['description']=$this->input->post('description');
		$insert['category']=$this->input->post('category');
		
		$plotid=$insert['plotid']=$this->input->post('plot');
		
		if($plotid!="")
		{
		$member=$this->project_model->getmember($plotid);
		foreach($member as $mem)
		{
		}
		
		$insert['memberid']=$mem->owner;
	    }
		
		if($this->input->post('status')=="on")
		{
			$insert['status']=1;
		}
		
		
		$config['upload_path'] = './uploads/video/';
		$config['allowed_types'] = 'mov|avi|movie|flv';
		
		
		
		
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
			
	     }		
			
				if(!empty($name))
				{
					$insert['video']=$name;	
					
								
				}
			
			$insert_status=$this->gallery_model->addvideos($insert);
			if(!empty($insert_status))
			{
				$data['message']="Video added";
				
			}
			else
			{
				$data['message']="Failed";
			}
			
			//$this->listvideos();
		//}
		//else
		//{		
			
				
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('addvideos',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
    	//}
	}
	
	function addphotos()
	{
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] ="Add Photos";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		
		$data['memberlist']=$this->project_model->getplot();
		
		if ($this->form_validation->run() == true)
		{
		$insert['name']=$this->input->post('name');
		$insert['description']=$this->input->post('description');
		$insert['category']=$this->input->post('category');
		
		$plotid=$insert['plotid']=$this->input->post('plot');
		
		if($plotid!="")
		{
		$member=$this->project_model->getmember($plotid);
		foreach($member as $mem)
		{
		}
		
		$insert['memberid']=$mem->owner;
	    }
		
		if($this->input->post('status')=="on")
		{
			$insert['status']=1;
		}
		    $value=$this->upload();
			$name=explode(".",$value);
				if(!empty($value))
				{
					$insert['photo']=$value;	
					$insert['thumb']=$name[0]."_thumb.".$name[1];	
								
				}
				
			$insert_status=$this->gallery_model->addphoto($insert);
			if(!empty($insert_status))
			{
				$data['message']="Photo added";
				
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
		$this->load->view('addphotos',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
    	}
	}
	function upload()
	{
		$config['upload_path'] = './uploads/gallery/';
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
			$config1['source_image'] ='./uploads/gallery/'.$name;
			$config1['new_image'] = './uploads/gallery/thumb/'.$name;
			$config1['create_thumb'] = TRUE;
			$config1['maintain_ratio'] = TRUE;
			$config1['width'] = 108;
			$config1['height'] = 81;

			$this->load->library('image_lib', $config1);

			$this->image_lib->resize();
			$data['error']=$this->image_lib->display_errors();
			
			
			return($name);
			
			
		}
		
	}
	function deletephoto($id)
	{
		$data['base'] = $this->base;
		
		$photo=$this->gallery_model->listphoto($id,$limit="",$perpage="");
		foreach($photo as $ph)
		{
		}
		$rs=$this->gallery_model->deletephoto($id);
		if($rs==1)
		{
			$p1=$this->base.'uploads/galllery/'.$ph->photo;
			$p2=$this->base.'uploads/galllery/thumb'.$ph->thumb;
			
			@unlink($p1);
			@unlink($p2);
			
			
			
		}
		
		
				
		$this->index();
		
		
	}
	function deletevideo($id)
	{
		$data['base'] = $this->base;
		
		$photo=$this->gallery_model->listvideos($id,$limit="",$perpage="");
		foreach($photo as $ph)
		{
		}
		$rs=$this->gallery_model->deletevideo($id);
	
		
		
				
		$this->listvideos();
		
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
