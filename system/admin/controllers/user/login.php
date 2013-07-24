<?php
	class Login extends controller
	{
		function Login()
		{
			parent::controller();
			$this->load->library('session');
			$this->base = $this->config->item('base_url');
			$this->load->helper(array('form','url'));
			$this->css = "css/user/style_new.css";
			$this->load->database();
			$this->load->model('user/member_model');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->helper('parameter');
			$this->load->library('pagination');
		}
		function index($f=0,$start=0)		
		{			
			$data['css'] = $this->css;
			$data['base'] = $this->base;
			$data['message']="";
							
			$this->form_validation->set_rules('email', 'Email id', 'trim|required|min_length[2]|max_length[50]');
			$this->form_validation->set_rules('pwd', 'Password', 'trim|required|min_length[1]|max_length[50]');
				 
			if ($this->form_validation->run() == FALSE)
			{	
				$this->load->view('user/login',$data);
			}
			else
			{
				$user_name = $this->input->post('email');
				$pass_word = md5($this->input->post('pwd'));				
				
					$check=$this->member_model->mem_signin($user_name,$pass_word);
					
					if($check==1)
					{	
									
						$this->limit=4;
						$page['start']=intval($start);
						$page['count']=0; 
						$page['limit'] = $this->limit; 
						$data['news_lst']=$this->member_model->newslist('news',$page); 
						$page['count']=1; 
						$data['newslsts_count']=$this->member_model->newslist('news',$page); 
						$url= $this->base.'index.php/admin/news/'.$f.'/'; 
						$total = $data['newslsts_count']['totalrows'];
						$per_page = $this->limit;  
						
						$id=$this->session->userdata('memberid');			
						
						if($this->session->userdata('status')=="admin")
						{
							$list=$this->member_model->workerslist();
						}
						else
						{
							$list=$this->member_model->workerslist($id);	
						}
						$total=0;
						$tot=0;
						foreach($list['result'] as $li)
						{							
							$tot=$li->workes;
							$total=$total+$tot;
						}
						$this->session->set_userdata('total',$total); 
						if($this->session->userdata('status')=="admin")
						{
							$li=$this->base.'admin.php/news/index/0/'.$id;
						}
						else if($this->session->userdata('status')=="active")
						{
							$li=$this->base.'admin.php/user/news/index/'.$id;
						}						
						redirect($li, 'refresh');
					}					
					else
					{
						$data['message']="UserID/Password is incorrect";
						$this->load->view('user/login',$data);
					}				
			}
		}
	}
	


?>
