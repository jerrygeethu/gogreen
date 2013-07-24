<?php

class Risk extends Controller {

     var $base;
     var $css;
	 
	function Risk()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
		
        $this->css = "style.css";
		$this->load->database();
		$this->load->model('news_model');
		$this->load->model('project_model');
		$this->load->model('activity_model');
		$this->load->model('member_model');
		$this->load->model('gallery_model');
		$this->load->helper('parameter_helper');
		$this->load->library('session');
	}
	
	function index($limit="",$id="")
	{
		$data['base'] = $this->base;
		$data['head'] ="Risk Management";
		
		if($id!="")
		{
			$this->member_model->mem_signin($id);
			$data['name']=$this->session->userdata('name');
			
		}
		$list=$this->activity_model->listrisk($id="",$limit,$perpage="");
		
		
		
		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/risk/index/';
		$config['total_rows'] = count($list);
		$perpage=$config['per_page'] = '5';
		$config['uri_segment'] = '3';	
		$config['num_links'] ='2';
		
		
		$this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		
		$data['limit']=$limit;		
	    $data['list']=$this->activity_model->listrisk($id="",$limit,$perpage);
		$data['page']=$this->pagination->create_links(); 
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('riskmanagement',$data);
		$this->load->view('footer',$data);
	}
	function addrisk()
	{
		
		$data['base'] = $this->base;
		$data['head'] ="Add Risk";
		
		
		$data['project']=$this->project_model->getproject();
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('plot', 'Plot', 'required');
		$this->form_validation->set_rules('crop', 'Crop', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');		
        $this->form_validation->set_rules('details', 'Details', 'required');
		
		 if($this->input->post('add')=="Save" && $this->form_validation->run() == TRUE)
		 {
			 
			 
			$insert['project']=$this->input->post('project');
			$insert['plot']=$this->input->post('plot');
			$insert['crop']=$this->input->post('crop');
			$insert['number']=$this->input->post('number');			
			$insert['details']=$this->input->post('details');
			$value=$this->upload();
			if(!empty($value))
			{
				$insert['image']=$value;				
			}
			$insert_status=$this->activity_model->insertrisk($insert);
			if(!empty($insert_status))
			{
				$data['message']="Risk added";
				
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
		$this->load->view('addrisk',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
    	}
		
		
		
	}
	
	function editrisk($id)
	{
		
		$data['base'] = $this->base;
		$data['head'] ="Edit Risk";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		$data['project']=$this->project_model->getproject();
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('plot', 'Plot', 'required');
		$this->form_validation->set_rules('crop', 'Crop', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');		
        $this->form_validation->set_rules('details', 'Details', 'required');
		
		 if($this->input->post('editsubmit')=="Edit" && $this->form_validation->run() == TRUE)
		 {
			 
			 
			$insert['project']=$this->input->post('project');
			$insert['plot']=$this->input->post('plot');
			$insert['crop']=$this->input->post('crop');
			$insert['number']=$this->input->post('number');			
			$insert['details']=$this->input->post('details');
			$riskid=$this->input->post('riskid');
			$value=$this->upload();
			if(!empty($value))
			{
				$insert['image']=$value;				
			}
			else
			{
				$insert['image']=$this->input->post('oldphoto');
				
			}
			$insert_status=$this->activity_model->editrisk($insert,$riskid);
			if(!empty($insert_status))
			{
				$data['message']="Risk edited";
				
			}
			else
			{
				$data['message']="Failed";
			}
			$this->index();
			 
			 
	     }		
		
		 else
		 {
		$data['list']=$this->activity_model->listrisk($id,$limit="",$perpage=""); 
		
			
			
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('editrisk',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
    	}
		
		
		
	}
	
	function getplot($projectid)
	{
		$data['base'] = $this->base;
		
		
		if($projectid!="")
		{	
		$plo=$this->project_model->getplot($projectid);
		
		$plot="<option value=\"\">Select plot</option>";
		
		foreach($plo as $pt)
		 { 						
			$plot.="<option value=".$pt->plotid.">".$pt->title."</option>";
		  }
		print_r($plot);
	    }
		
		
	}
	function getcrop($plotid)
	{
		$data['base'] = $this->base;
		
		if($plotid!="")
		{	
		$cro=$this->project_model->getcrop($plotid);
		//print_r($cro);
		
		$crop="<option value=\"\">Select crop</option>";
		
		foreach($cro as $cp)
		 { 			
			$crop.="<option value=".$cp->id.">".$cp->crop."</option>";			
		 }
		print_r($crop);
	    }
		
		
	}
	
	
function upload()
	{
		$config['upload_path'] = './uploads/risk';
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
			$config1['source_image'] ='./uploads/risk'.$name;
			$config1['new_image'] = './uploads/risk/thumb/'.$name;
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
	function deleterisk($id)
	{
		$data['base'] = $this->base;
		
		if($id!="")
		{		
		$status=$this->activity_model->deleterisk($id);
	    }
		$this->index();		
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
