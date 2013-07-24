<?php
	class Messegs extends Controller {

     var $base;
     var $css;
	 
	function Messegs()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
        $this->css = "css/user/style.css";
		$this->load->database();
		$this->load->model('user/activity_model');
		$this->load->model('user/messeges_model');
		$this->load->library('session');
		$this->load->helper('string');
		$this->load->library('pagination');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('date');
		
	}
	
	function compose_mail()
	{
		if($this->session->userdata('memberid')==FALSE)
		{
			header("Location:".$this->base.'admin.php/user/login');
		}
		else
		{
		$data['css']=$this->css;
		$data['base']=$this->base;
		
		$userid = $this->session->userdata['memberid'];
        $config['upload_path'] ='./uploads/user/';
        $config['allowed_types'] = 'zip|txt|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1920';
        $config['max_height'] = '1280';    
        $this->load->library('upload', $config);
			//$d = $this->upload->do_upload();
			$data['workerscount'] = $this->activity_model->workers_count($userid);
			$data['memdata'] =  $this->messeges_model->memberdata($userid);
			$projects = $this->activity_model->projects_view($userid);
			if(!empty($projects))
			{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}
			if(!$this->upload->do_upload('userfile')) 
			{
				
				$data['msg'] = "";
			}
			else
			{
				$d1 = $this->upload->data();
				$data['msg'] = $d1['file_name'];
				$data['full_path'] = $d1['full_path'];
			}
			if($this->input->post('save')||$this->input->post('send'))
			{
				$d1 = $this->upload->data();
				$datestring = "%Y-%m-%d";
				$current_date =  mdate($datestring );
		
				$filedata['subject'] = $this->input->post('subject');
				$filedata['message'] = $this->input->post('message');
				$filedata['messagefile'] = $d1['file_name'];
				$filedata['fromid'] = $userid;
				$filedata['to'] = $this->input->post('to');
				$filedata['date'] = $current_date ;
				if($this->input->post('send'))
				{
					$filedata['status'] = 'send';
					$filedata['type'] = 'recieve';
				}
				if($this->input->post('save'))
				{
					$filedata['status'] = 'save';
					$filedata['type'] = 'save';
				}
				$data['return_message'] = $this->messeges_model->insert($filedata);
			}
				$this->load->view('user/header',$data);
				$this->load->view('user/left_menu',$data);
				$this->load->view('user/composemessage',$data);
				$this->load->view('user/footer');
			}
		}
/**************************inbox mail***********************************/
		function inbox($start = 0)
		{
			if($this->session->userdata('memberid')==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			else
			{
			$userid = $this->session->userdata['memberid'];					
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['start1']=$start+1;
			$type = "receive";
			$email = $this->session->userdata('email');

			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($userid);
			$data['memdata'] =  $this->messeges_model->memberdata($userid);
			$projects = $this->activity_model->projects_view($userid);
			
			if(!empty($projects))
			{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}
			
			$rows = $this->messeges_model->count_inbox_email($email,$type);
			$total =count($rows);
			$data['tot']=$total;
			
			$path =  $this->base."admin.php/user/messegs/inbox";
			
			$perpage = "10";
			$data['value'] = $this->messeges_model->get_inbox_mail($email,$type,$start,$perpage);
			$data['page'] = $this->pagination($path,$total,$perpage,$start);
			 if($this->input->post('check1')!="")
			 {
				$string1="";
				foreach ($this->input->post('check1') as $id)
				{
					$string1.= $id.",";
				}
					$string1=substr($string1,0,strlen($string1)-1);
					$this->messeges_model->del($string1);
					redirect($this->base.'admin.php/user/messegs/inbox','refresh');
			}
				$this->load->view('user/header',$data);
				$this->load->view('user/left_menu',$data);
				$this->load->view('user/inbox',$data);
				$this->load->view('user/footer');
			}
		}
/******************Sented Mail*********************************/
		function sent_mail($start=0)
		{
			if($this->session->userdata('memberid')==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			else
			{
/*
<<<<<<< .mine
			$userid = $this->session->userdata['memberid'];					
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['start1']=$start+1;
			$status = "send";
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($userid);
			$data['memdata'] =  $this->messeges_model->memberdata($userid);
			$projects = $this->activity_model->projects_view($userid);
			foreach($projects as $projects1)
			{
				$data['project_id'] = $projects1['projectid'];
=======
*/
				$userid = $this->session->userdata['memberid'];					
				$data['base'] = $this->base;
				$data['css'] = $this->css;
				$data['start1']=$start+1;
				$status = "send";
				$id = $this->session->userdata('memberid');
				
					$data['workerscount'] = $this->activity_model->workers_count($userid);
					$data['memdata'] =  $this->messeges_model->memberdata($userid);
					$projects = $this->activity_model->projects_view($userid);
					if(!empty($projects))
					{
					foreach($projects as $projects1)
					{
						$data['project_id'] = $projects1['projectid'];
					}
					}
					$rows = $this->messeges_model->count_email($id,$status);
					$total =count($rows);
					$data['tot']=$total;
					$path =  $this->base."admin.php/user/messegs/sent_mail";
					$perpage = "10";
					
					$data['value'] = $this->messeges_model->get_email($id,$status,$start,$perpage);
					$data['page'] = $this->pagination($path,$total,$perpage,$start);
					if($this->input->post('check2')!="")
					{
						$string1="";
						foreach ($this->input->post('check2') as $id)
						{
							$string1.= $id.",";
						}
						$string1=substr($string1,0,strlen($string1)-1);
						$this->messeges_model->del($string1);
						redirect($this->base.'admin.php/user/messegs/sent_mail','refresh');
					}
					
				$this->load->view('user/header',$data);
				$this->load->view('user/left_menu',$data);
				$this->load->view('user/sent_mail',$data);
				$this->load->view('user/footer');

			}
		}
	/*************saved message*******************/
		function draft($start=0)
		{
			if($this->session->userdata('memberid')==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			else
			{
							
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['start1']=$start+1;
			$userid = $this->session->userdata['memberid'];
			$status = "save";
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($userid);
			$data['memdata'] =  $this->messeges_model->memberdata($userid);
			$projects = $this->activity_model->projects_view($userid);
			if(!empty($projects))
			{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
		}
			$rows = $this->messeges_model->count_email($id,$status);
			$total =count($rows);
			$data['tot']=$total;
			$path =  $this->base."admin.php/user/messegs/draft";
			$perpage = "10";
			$data['page']=$this->pagination($path,$total,$perpage,$start);	
			$data['value'] = $this->messeges_model->get_draft_email($id,$status,$start,$perpage);
			 if($this->input->post('check1')!="")
			 {
				$string1="";
				foreach ($this->input->post('check1') as $id)
				{
					$string1.= $id.",";
				}
					$string1=substr($string1,0,strlen($string1)-1);
					$this->messeges_model->del($string1);
					redirect($this->base.'admin.php/user/messegs/draft','refresh');
			}
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/draft',$data);
			$this->load->view('user/footer');
			}
		}
		
/******************view sent message*******************/
		function get_send_mail($msg_id)
		{
			if($this->session->userdata('memberid')==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			else
			{
			$userid = $this->session->userdata['memberid'];					
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['workerscount'] = $this->activity_model->workers_count($userid);
			$data['memdata'] =  $this->messeges_model->memberdata($userid);
			$projects = $this->activity_model->projects_view($userid);
			foreach($projects[0] as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			$data['value'] = $this->messeges_model->get_message($msg_id);
			
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/draft-read',$data);
			$this->load->view('user/footer');
			}
		}
/**************************view inbox mail**********************/
		function get_inbox_mail($msg_id)
		{
			if($this->session->userdata('memberid')==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			else
			{
								
			$data['base'] = $this->base;
			$userid = $this->session->userdata['memberid'];
			$data['css'] = $this->css;
			$data['workerscount'] = $this->activity_model->workers_count($userid);
			$data['memdata'] =  $this->messeges_model->memberdata($userid);
			$projects = $this->activity_model->projects_view($userid);
			foreach($projects[0] as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
				$data['value'] = $this->messeges_model->get_message($msg_id);
				$data['id'] = $msg_id;
				$this->load->view('user/header',$data);
				$this->load->view('user/left_menu',$data);
				$this->load->view('user/inbox-read',$data);
				$this->load->view('user/footer');
			}
		}
/*********************reply for inbox msg************************/
		function replay($msgid)
		{
			if($this->session->userdata('memberid')==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			else
			{
			$userid = $this->session->userdata['memberid'];					
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['workerscount'] = $this->activity_model->workers_count($userid);
			$data['memdata'] =  $this->messeges_model->memberdata($userid);
			$projects = $this->activity_model->projects_view($userid);
			foreach($projects[0] as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			$data['value'] = $this->messeges_model->get_message($msgid);
			$id =  $msgid;


			$userid = $this->session->userdata['memberid'];
			$config['upload_path'] ='./uploads/user/';
			$config['allowed_types'] = 'zip|txt|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '1920';
			$config['max_height'] = '1280';    
			$this->load->library('upload', $config);
				if(!$this->upload->do_upload('userfile')) 
				{
					
					$data['msg'] = "";
				}
				else
				{
					$d1 = $this->upload->data();
					$data['msg'] = $d1['file_name'];
					
				}
					$d1 = $this->upload->data();
					$data['full_path'] = $d1['full_path'];
			
				

				$d = "%y-%m-%d";
				$date1 = mdate($d);
				$arr['subject'] = $this->input->post('subject');
				$arr['message'] = $this->input->post('message');
				$arr['messagefile'] = $d1['file_name'];
				$arr['messagefile'] = $d1['file_name'];
				$arr['fromid'] = $this->session->userdata('memberid');
				$arr['to'] = $this->input->post('to');
				$arr['date'] = $date1;
				$arr['status'] = "send";
				$arr['type'] = "send";
				$this->messeges_model->insert($arr);
				$this->load->view('user/header',$data);
				$this->load->view('user/left_menu',$data);
				$this->load->view('user/replaypage',$data);
				$this->load->view('user/footer');
			}
		}
		
/*****************resend draft mail***************************/
		function resend_mail($msg_id)
		{
			if($this->session->userdata('memberid')==FALSE)
			{
				header("Location:".$this->base.'admin.php/user/login');
			}
			else
			{
			$userid = $this->session->userdata['memberid'];
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['workerscount'] = $this->activity_model->workers_count($userid);
			$data['memdata'] =  $this->messeges_model->memberdata($userid);
			$projects = $this->activity_model->projects_view($userid);
			foreach($projects[0] as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			$data['value'] = $this->messeges_model->get_message($msg_id);
			$id=  $msg_id;
			$data['msgid'] = $msg_id;
	
			$userid = $this->session->userdata['memberid'];
			$config['upload_path'] ='./uploads/user/';
			$config['allowed_types'] = 'zip|txt|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '1920';
			$config['max_height'] = '1280';    
			$this->load->library('upload', $config);
				if(!$this->upload->do_upload('userfile')) 
				{
					
					$data['msg'] = "";
				}
				else
				{
					$d1 = $this->upload->data();
					$data['msg'] = $d1['file_name'];
					
				}
					$d1 = $this->upload->data();
					$data['full_path'] = $d1['full_path'];

				$arr['to'] = $this->input->post('to');
				$arr['subject'] = $this->input->post('subject');
				$arr['message'] = $this->input->post('message');
				$arr['messagefile'] = $d1['file_name'];
				$arr['status'] = "send";
				$this->messeges_model->update($id,$arr);
				$this->load->view('user/header',$data);
				$this->load->view('user/left_menu',$data);
				$this->load->view('user/resend-mail',$data);
				$this->load->view('user/footer');
			}
		}
		
/***********************pagination*******************/
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
