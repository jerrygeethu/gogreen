<?php

class Mail extends Controller {

     var $base;
     var $css;
	 
	function Mail()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');		
        $this->css = "style.css";
		$this->load->database();
		$this->load->model('message_model');
		$this->load->model('news_model');
		$this->load->model('gallery_model');
		$this->load->library('session');
		$this->name=$this->session->userdata('name');
		$this->load->helpers('parameter_helper');
	}
	
	function index($limit="")
	{
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] = "Message Inbox";
		$email=$this->session->userdata('email');
		
		
		$list=$this->message_model->listmessage($email,$limit="",$perpage="");
    
		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/mail/index';
		$config['total_rows'] = count($list);
		$perpage=$config['per_page'] = '10';
		$config['uri_segment'] = '3';	
		$config['num_links'] ='2';
		
		
		$this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		
        
		$data['list']=$this->message_model->listmessage($email,$limit,$perpage);
		$data['page']=$this->pagination->create_links();

		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('inbox',$data);
		$this->load->view('footer',$data);
	}
	function compose()
	{
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] = "Compose Mail";
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('to', 'To', 'required');
		$this->form_validation->set_rules('subject', 'subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");
		
		if ($this->form_validation->run() == true && $this->input->post('send')!="")
		{
		$insert['to']=$this->input->post('to');
		$insert['fromid']=$this->session->userdata('memberid');
		
		$insert['subject']=$this->input->post('subject');
		$insert['message']=$this->input->post('message');
		$insert['status']="send";
		$insert['type']="send";
		$insert['date']=date("Y-m-d");
		$insert['messagefile']=$this->upload();
		$insert_status=$this->message_model->compose($insert);
		if($insert_status!="")
		{
			$insert['type']="receive";
			$insert_status=$this->message_model->compose($insert);
		$this->sentmail();		
		}
	 	
	    }
		else if($this->form_validation->run() == true && $this->input->post('save')!="")
		{
			
		$insert['to']=$this->input->post('to');
		$insert['fromid']=$this->session->userdata('memberid');
		$insert['subject']=$this->input->post('subject');
		$insert['message']=$this->input->post('message');
		$insert['status']="save";
		$insert['type']="send";
		$insert['date']=date("Y-m-d");
		$insert['messagefile']=$this->upload();
		$insert_status=$this->message_model->compose($insert);
		if($insert_status!="")
		{
		 $this->drafts();		
		}	
			
		}
	    else
	    {
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('composemail',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
	   }
	}
	function sentmail($limit="")
	{
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] = "Send Messages";
		
		$id=$this->session->userdata('memberid');
		
		$list=$this->message_model->sentmail($id,$limit,$perpage="");
        
		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/mail/sentmail';
		$config['total_rows'] = count($list);
		$perpage=$config['per_page'] = '10';
		$config['uri_segment'] = '3';	
		$config['num_links'] ='2';
		
		
		$this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		
        
		$data['list']=$this->message_model->sentmail($id,$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);		
		$this->load->view('sentmail',$data);
		$this->load->view('footer',$data);
	}
	function drafts($limit="")
	{
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base.'admin.php/user/login');	}      

		$data['base'] = $this->base;
		$data['head'] ="Saved Messages";
		
		$id=$this->session->userdata('memberid');
		
		$list=$this->message_model->drafts($id,$limit,$perpage="");
        
		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/mail/sentmail';
		$config['total_rows'] = count($list);
		$perpage=$config['per_page'] = '10';
		$config['uri_segment'] = '3';	
		$config['num_links'] ='2';
		
		
		$this->pagination->initialize($config);
		if($limit=="")
		{
			$limit="0";
		}
		
        
		$data['list']=$this->message_model->drafts($id,$limit,$perpage);
		
		$data['page']=$this->pagination->create_links();
		
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);		
		$this->load->view('draft',$data);
		$this->load->view('footer',$data);
	}
	function delete()
	{
		$data['base'] = $this->base;
		
		$count=$this->input->post('count');
	
		
		for($i=1;$i<$count;$i++)
		{
			$var='w'.$i;
			$var1='id'.$i;
			
			
			if($this->input->post($var)=="on")
			{
				$id=$this->input->post($var1);
				
				if($this->input->post('delete')!="")
				{
				$this->message_model->delete($id);
			    }
				//if($this->input->post('resend')!="")
				//{
					
				//$this->message_model->resend($id);
				
				
			   // }
				
				
				
				
			}
			
		}
		
		if($this->input->post('inbox')=='1')
		{
			$this->index();
		}
		if($this->input->post('sendmail')=='1')
		{
			$this->sentmail();
		}
		if($this->input->post('draft')=='1')
		{
			$this->drafts();
		}
		
		
	}
	function upload()
	{
		$config['upload_path'] = './uploads/mail';
		$config['allowed_types'] = 'doc|docx|word';
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
			return($name);
			
			
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
