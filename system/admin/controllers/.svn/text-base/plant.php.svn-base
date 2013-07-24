<?php

class Plant extends Controller {

     var $base;
     var $css;
	 
	function Plant()
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
		$data['head'] ="Plant Management";
		
		$list=$this->activity_model->listplant($id="",$limit,$perpage="");
		
		
		
		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/plant/index/';
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
	    $data['plant']=$this->activity_model->listplant($id="",$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('plant',$data);
		$this->load->view('footer',$data);
		
	}
	function addplant()
	{
		
		$data['base'] = $this->base;
		$data['head'] ="Add Plant";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		$data['project']=$this->project_model->getproject();
		$data['plot']=$this->project_model->getplot();
		$data['crop']=$this->activity_model->listcrop();
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('plot', 'Plot', 'required');
		$this->form_validation->set_rules('crop', 'Crop', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');
		$this->form_validation->set_rules('date', 'Planted date', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');

        if($this->input->post('add')=="Save" && $this->form_validation->run() == TRUE)
		{
            
			
			$insert['projectid']=$this->input->post('project');
			$insert['plotid']=$this->input->post('plot');
			$insert['crop']=$this->input->post('crop');
			$insert['number']=$this->input->post('number');
			$insert['date']=dmytoymd($this->input->post('date'));
			$insert['details']=$this->input->post('details');
			
			
			$insert_status=$this->activity_model->insertplant($insert);
			if(!empty($insert_status))
			{
				$data['message']="Plant added";
				
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
		$this->load->view('addplant',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
	    }
		
		
		
	}
	
	function editplant($id)
	{
		
		$data['base'] = $this->base;
		$data['head'] ="Edit Plant";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		$data['project']=$this->project_model->getproject();
		$data['plot']=$this->project_model->getplot();
		$data['crop']=$this->activity_model->listcrop();
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('plot', 'Plot', 'required');
		$this->form_validation->set_rules('crop', 'Crop', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');
		$this->form_validation->set_rules('date', 'Planted date', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
		
		

        if($this->input->post('add')=="Save" && $this->form_validation->run() == TRUE)
		{
            
			
			$insert['projectid']=$this->input->post('project');
			$insert['plotid']=$this->input->post('plot');
			$insert['crop']=$this->input->post('crop');
			$insert['number']=$this->input->post('number');
			$insert['date']=dmytoymd($this->input->post('date'));
			$insert['details']=$this->input->post('details');
			
			
			$insert_status=$this->activity_model->editplant($insert,$id);
			if(!empty($insert_status))
			{
				$data['message']="Plant edited";
				
			}
			else
			{
				$data['message']="Failed";
			}
			$this->index();
			
	    }
		else if($this->input->post('edit')=="Edit")
		{		
			
		$data['list']=$this->activity_model->listplant($id);
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('editplant',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
	    }
		else
		{		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('addplant',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
	    }
		

		
	}
	
	function viewplant($id)
	{
		
		$data['base'] = $this->base;
		$data['head'] ="View Plant";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		$data['list']=$this->activity_model->listplant($id);
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('viewplant',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);		
	}
		function deleteplant($id)
	{
		
		$data['base'] = $this->base;
		
		if($id!="")
		{		
		$status=$this->activity_model->deleteplant($id);
	    }
		$this->index();	
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
		
		$crop="<option value=\"\">Select crop</option>";
		
		foreach($cro as $cp)
		 { 			
			$crop.="<option value=".$cp->id.">".$cp->crop."</option>";			
		 }
		print_r($crop);
	    }
		
		
	}
	
	function cropno($cropid)
	{
		$data['base'] = $this->base;
		
		
		
		if($cropid!="")
		{	
		$cno=$this->project_model->getno($cropid);
		
	
		
		foreach($cno as $cn)
		 { 			
			$no="<input tabindex=\"8\" style=\"width:177px;\" type=\"text\" name=\"number\" id=\"number\" value=\"".$cn->number."\"/>";			
		 }
		print_r($no);
	    }
		
		
	}

	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
