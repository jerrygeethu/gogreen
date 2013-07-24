<?php

class Activity extends Controller {

     var $base;
     var $css;
	 
	function Activity()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');		
        $this->css = "style.css";
		
		$this->load->database();
		$this->load->model('activity_model');
		$this->load->model('project_model');
		$this->load->model('member_model');
		$this->load->model('gallery_model');
		$this->load->model('news_model');
		$this->load->library('session');
		$this->load->helpers('parameter_helper');
		$this->name=$this->session->userdata('name');
	}
	
	function index($limit="")
	{
	  if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] = "View Activity";
		
		$activity=$this->activity_model->listactivity($actid="",$workid="",$limit,$perpage="");
		
		
		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/activity/index';
		$config['total_rows'] = count($activity);
		$perpage=$config['per_page'] = '10';
		$config['uri_segment'] = '3';	
		$config['num_links'] ='2';
		
		
		$this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		$data['limit']=$limit;
		
		
		$data['activity']=$this->activity_model->listactivity($actid="",$workid="",$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		$data['project']=$this->project_model->getproject();
		$data['plot']=$this->project_model->getplot();
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('viewactivity',$data);
		$this->load->view('footer',$data);
	}
	function cropview($limit="",$id="")
	{
	  if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      
		$data['base'] = $this->base;
		$data['head'] = "crop view";
		
		
		$activity=$this->activity_model->cropview($id="",$limit,$perpage="");
		
		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/activity/cropview';
		$config['total_rows'] = count($activity);
		$perpage=$config['per_page'] = '3';
		$config['uri_segment'] = '3';	
		$config['num_links'] ='2';
		
		
		$this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		$data['limit']=$limit;
		
		
		$data['crop']=$this->activity_model->cropview($id="",$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('cropview',$data);
		$this->load->view('footer',$data);
	}
	function cropadd()
	{
 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		
		$data['base'] = $this->base;
		$data['head'] ="Crop Add";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		
		if($this->input->post('add')=="Save" && $this->form_validation->run() == true)
		{
			$insert['crop']=$this->input->post('name');
			$insert['description']=$this->input->post('description');
			$value=$this->upload();
			if(!empty($value))
			{
				$insert['photo']=$value;				
			}
		
			$insert_status=$this->activity_model->insertcrop($insert);
			if(!empty($insert_status))
		    {
			$data['message']="Crop added";
			
		    }
		    else 
		     {
			$data['message']="Failed";
		      }
			
		   
     	  $this->cropview();
     	}
		else
		{		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('cropadd',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
    	}
		
		
		
	}
	function editcrop($id,$limit="")
	{
 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] ="Crop Add";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
	    if($this->input->post('edit')!="")
	    {		
		$data['crop']=$this->activity_model->cropview($id,$limit,$perpage="");
				
	    }
		
		if($this->input->post('add')=="Save" && $this->form_validation->run() == true)
		{
			$insert['crop']=$this->input->post('name');
			$insert['description']=$this->input->post('description');
			$value=$this->upload();
			if(!empty($value))
			{
				$insert['photo']=$value;				
			}
			else
			{
				$insert['photo']=$this->input->post('oldphoto');
				
			}
		
			$insert_status=$this->activity_model->editcrop($insert,$id);
			if(!empty($insert_status))
		    {
			$data['message']="Crop Updated";
			
		    }
		    else 
		     {
			$data['message']="Failed";
		      }
			
		   $this->cropview();
     	}
		else
		{		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('cropedit',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
    	}
		
		
		
		
	}
	function deletecrop($id)
	{
		$data['base'] = $this->base;
		
		if($id!="")
		{		
		$status=$this->activity_model->cropdelete($id);
	    }
		$this->cropview();		
	}
	function viewcrop($id,$limit)
	{
	if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] ="View Member";
		
		$data['crop']=$this->activity_model->cropview($id,$limit,$perpage="");
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('viewcrop',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
		
		
	}
	
	function upload()
	{
		$config['upload_path'] = './uploads/crop';
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
			$config1['source_image'] ='./uploads/crop'.$name;
			$config1['new_image'] = './uploads/crop/thumb/'.$name;
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
	
	function riskmgmt()
	{
		$data['base'] = $this->base;
		
		$this->load->view('header',$data);
		$this->load->view('riskmgmt',$data);
		$this->load->view('footer',$data);
	}
	function activityadd()
	{
		
if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] ="Activity Add";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('plot', 'Plot', 'required');
		$this->form_validation->set_rules('activity', 'Activity', 'required');		
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('workers', 'Workers', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$data['project']=$this->project_model->getproject();
		$data['plot']=$this->project_model->getplot();		
		$data['member']=$this->member_model->getid();
		
		   if ($this->form_validation->run() == TRUE)
		   {
		
		    
			
		
			$ins['alloteddate']=$insert['createdate']=dmytoymd($this->input->post('date'));
			$insert['data']=$this->input->post('description');
			$insert['projectid']=$this->input->post('project');
			$ins['plotid']=$insert['plotid']=$this->input->post('plot');
			$insert['title']=$this->input->post('activity');
			$insert['remarks']=$this->input->post('remarks');			
			$ins['workerscount']=$this->input->post('workers');
			
			
			$insert_status=$this->activity_model->insertactivity($insert);
			$ins['activityid']=$insert_status;
			$insert_status1=$this->activity_model->insertworkers($ins);
			if(!empty($insert_status))
		    {
			$data['message']="Activity added";
			
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
			$this->load->view('activityadd',$data);
			$this->load->view('rightmenu',$data);
			$this->load->view('footer',$data);
		  }
	}
	
	
	function activityedit($actid="",$workid="")
	{
if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] ="Activity Edit";
		
		$data['actid']=$actid;
		$data['workid']=$workid;
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('plot', 'Plot', 'required');
		$this->form_validation->set_rules('activity', 'Activity', 'required');		
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('workers', 'Workers', 'required');
		
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$data['project']=$this->project_model->getproject();
		$data['plot']=$this->project_model->getplot();		
		$data['member']=$this->member_model->getid();
		
		   if ($this->form_validation->run() == TRUE && $this->input->post('edit')!="")
		   {
		
			$ins['alloteddate']=$insert['createdate']=dmytoymd($this->input->post('date'));
			$insert['data']=$this->input->post('description');
			$insert['projectid']=$this->input->post('project');
			$ins['plotid']=$insert['plotid']=$this->input->post('plot');
			$insert['title']=$this->input->post('activity');
			$insert['remarks']=$this->input->post('remarks');			
			$ins['workerscount']=$this->input->post('workers');
			
			
			
			$insert_status=$this->activity_model->updateactivity($insert,$actid);
			$ins['activityid']=$actid;
			
			$insert_status1=$this->activity_model->updateworkers($ins,$workid);
				if(!empty($insert_status))
				{
				 $data['message']="Activity Updated";
				
				}
				else 
				{
				  $data['message']="Failed";
				}
			  $this->index();
			
		   }
		   else if($this->input->post('edit')=="Edit")
		   {
			   
			$data['activity']=$this->activity_model->listactivity($actid,$workid,$limit="",$perpage="");
			
			
            			
			$this->load->view('header',$data);
			$this->load->view('leftmenu',$data);
			$this->load->view('activityupdate',$data);
			$this->load->view('rightmenu',$data);
			$this->load->view('footer',$data);

			   
		   }
		   else
		   {     	
			
			
			$this->load->view('header',$data);
			$this->load->view('leftmenu',$data);
			$this->load->view('activityupdate',$data);
			$this->load->view('rightmenu',$data);
			$this->load->view('footer',$data);
		  }
	}
	function search($limit="")
	{
		$data['base'] = $this->base;
		$data['head'] = "View Activity";
		
		$date="";
		$project="";
		$plot="";
		
		if($this->input->post('date')!="")
		{
	      $date=dmytoymd($this->input->post('date'));
	    }
		
			
	   
	   $project=$this->input->post('project');
	   $plot=$this->input->post('plot');
	   
	   $activity=$this->activity_model->search($date,$project,$plot,$limit,$perpage="");
	   
	   
	   $this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/activity/search';
		$config['total_rows'] = count($activity);
		$perpage=$config['per_page'] = '10';
		$config['uri_segment'] = '3';	
		$config['num_links'] ='2';
		
		
		$this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		$data['limit']=$limit;
		
	  
	   $data['activity']=$this->activity_model->search($date,$project,$plot,$limit,$perpage);
       $data['page']=$this->pagination->create_links();
           
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('viewactivity',$data);
		$this->load->view('footer',$data);
		
	}
	function activityview($actid,$workid)
	{
if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] ="View Activity";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		$data['activity']=$this->activity_model->listactivity($actid,$workid,$limit="",$perpage="");
		
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('activityview',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
		
		
	}
	
	
	function deleteactivity($actid,$workid)
	{
		$data['base'] = $this->base;
		
		if($actid!="")
		{		
		$status=$this->activity_model->activitydelete($actid);
		$status=$this->activity_model->workerdelete($workid);
	    }
		$this->activityview();		
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
	function getowner($plotid)
	{
		$data['base'] = $this->base;
		
		
		
		if($plotid!="")
		{	
		$own=$this->project_model->getowner($plotid);
		print_r($own);
		
		
		
		foreach($own as $on)
		 { 			
			$owner="<option value=".$on->ownerid.">".$on->name."</option>";			
		 }
		print_r($owner);
	    }
		
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
