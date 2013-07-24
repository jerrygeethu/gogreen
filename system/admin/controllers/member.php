<?php

class Member extends Controller {

     var $base;
     var $css;
	 
	function Member()
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
		$this->load->library('form_validation');
		$this->load->helper('url');
		
	}
	
	function index($limit="")
	{
		$data['base'] = $this->base;
		$data['head'] ="Member  List";
		
		$list=$this->member_model->memberlist($id="",$limit,$perpage="");
		
		$this->load->library('pagination');

		$config['base_url'] =  $this->base.'admin.php/member/index';
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
		
		$data['list']=$this->member_model->memberlist($id="",$limit,$perpage);
		$data['page']=$this->pagination->create_links();
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('memberlist',$data);
	
		$this->load->view('footer',$data);
	}
	function addmember()
	{
		$data['base'] = $this->base;
		$data['head'] ="Add Member";
		
		$li=$data['list']=$this->project_model->getproject();
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirmpwd', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');		
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[7]|max_length[12]|numeric');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|min_length[10]|numeric');
		$this->form_validation->set_rules('zip', 'Zip', 'numeric|min_length[6]');
		$this->form_validation->set_rules('address', 'Address', '');
		$this->form_validation->set_rules('city', 'City', '');
		$this->form_validation->set_rules('country', 'Country', '');
		$this->form_validation->set_rules('active', 'Active', '');
		
		
	
		
		if( $this->form_validation->run() == true)
		{
			
			$insert['name']=$this->input->post('name');
			$insert['email']=$this->input->post('email');			
			$insert['password']=md5($this->input->post('password'));		
			$insert['gender']=$this->input->post('gender');
			$insert['phone']=$this->input->post('phone');
			$insert['mobile']=$this->input->post('mobile');
			$insert['address']=$this->input->post('address');
			$insert['city']=$this->input->post('city');
			$insert['country']=$this->input->post('country');
			$insert['zip']=$this->input->post('zip');
			
			if($this->input->post('active')=="1")
			{
			$insert['memstatus']="active";
		    }
		
			
			
			$value=$this->upload();
			if(!empty($value))
			{
				$insert['photo']=$value;				
			}
			$insert['date']=date("Y-m-d");
			
			
			$insert_status=$this->member_model->memberadd($insert);
			
			
			
			if(!empty($insert_status))
		    {
			  $limit=count($li);
			 
			 for($j=1;$j<=$limit;$j++)
			 {
				 $var="p".$j;
				 
				 $ins['owner']=$insert_status;
		         $ins['createdate']=date("Y-m-d");
				 $ins['projectid']=$this->input->post($var);
				 $ins['status']="Pending";
				
				 $plotid=$this->member_model->plotadd($ins);
				
			 }
			$data['message']="Member added";
			
			
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
		$this->load->view('addmember',$data);
		$this->load->view('rightmenu',$data);
		
		$this->load->view('footer',$data);
	   }
	}
	function upload()
	{
		$config['upload_path'] = './uploads/member/';
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
			$config1['source_image'] ='./uploads/member/'.$name;
			$config1['new_image'] = './uploads/member/thumb/'.$name;
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
	function editmember($id="")
	{
		$data['base'] = $this->base;
		$data['head'] ="Edit Member";
		
		if($id=="")
		{
		$id=$this->input->post('id');
	    }
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		
		$data['member']=$this->member_model->memberlist($id,$limit="",$perpage="");
		$li=$data['list']=$this->project_model->projectlist1($id);
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');		
		$this->form_validation->set_rules('gender', 'Gender', 'required');		
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[7]|max_length[12]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|min_length[10]');
		
		if($this->input->post('save')=="Save" && $this->form_validation->run() == true)
		{
			
			$insert['name']=$this->input->post('name');
			$insert['email']=$this->input->post('email');			
			$insert['gender']=$this->input->post('gender');
			$insert['phone']=$this->input->post('phone');
			$insert['mobile']=$this->input->post('mobile');
			$insert['address']=$this->input->post('address');
			$insert['city']=$this->input->post('city');
			$insert['country']=$this->input->post('country');
			$insert['zip']=$this->input->post('zip');
			
			if($this->input->post('active')=="1")
			{
			$insert['memstatus']="active";
		    }
		
			
			
			$value=$this->upload();
			if(!empty($value))
			{
				$insert['photo']=$value;				
			}
			$insert['date']=date("Y-m-d");
			
			$insert_status=$this->member_model->memberedit($insert,$id);
			
						
			if(!empty($insert_status))
		    {
				
				
			$data['message']="Member Edited";
			
		    }
			$limit=$this->input->post('limit');
		   
			$this->index();
			
		
		}
		else
		{
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('addmember',$data);
		$this->load->view('rightmenu',$data);		
	 	$this->load->view('footer',$data);
	    }
	}
	function viewmember($id)
	{
		$data['base'] = $this->base;
		$data['head'] ="View Member";
		
		$data['right']=$this->news_model->listnews($nid="",$nlimit="0",$nperpage="3");
		$data['rightphoto']=$this->gallery_model->listphoto($nid="",$nlimit="0",$nperpage="6");

		$data['list']=$this->member_model->memberlist($id,$nlimit="",$nperpage="");
		$data['project']=$this->project_model->projectlist1($id);
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('viewmember',$data);
		$this->load->view('rightmenu',$data);
		$this->load->view('footer',$data);
		
		
	}
	
	function deletemember($id)
	{
		$data['base'] = $this->base;
		
		if($id!="")
		{		
		$status=$this->member_model->memberdelete($id);
	    }
		$this->index();		
	}
	
function editpassword($memid)
{
	if($this->session->userdata('memberid')==FALSE)
		{
			header("Location:".$this->base.'admin.php/user/login');
		}
		else
		{
	$data['base'] = $this->base;
	$data['css'] = $this->css;
	$data['head'] ="Edit Member";
	$id = $this->session->userdata('memberid');
	$data['memdata'] = $user = $this->member_model->retrive_member_data($memid);
	
	$this->form_validation->set_rules('cpword','Current_Password','required');
	$this->form_validation->set_rules('npword','New_Password','required');
	$this->form_validation->set_rules('conpword','confirm_Password','required');
	$data['cpword'] = $this->input->post('cpword');
	$arr['password'] = md5($this->input->post('npword'));
	$password = md5($this->input->post('npword'));
	$con_password = md5($this->input->post('conpword'));
	foreach($user as $user1)
	{
		$data['error'] ="";
		$current_password =md5($this->input->post('cpword'));
		if($current_password != $user1['password'] && $this->input->post('cpword') != "")
		{
			$data['message'] = "Specify correct password";
		}
		else
		{
			$data['message'] = "";
			if(!$this->form_validation->run() == FALSE)
			{ 
				if($arr['password'] == $con_password )
				{
					$this->member_model->edit_pword($memid,$password);
					redirect($this->base.'admin.php/news/index/0/'.$memid,'refresh');
				}
				else
				{
					$data['error'] = "Password Mismatching";
				}
			}
		}
	}
	$this->load->view('header',$data);
	$this->load->view('leftmenu',$data);
	$this->load->view('editpassword',$data);
	$this->load->view('footer',$data);
	}
}
/*
	function editpassword($id)
	{
		$data['base'] = $this->base;
		$data['head'] ="Edit Member";
		
		
		$this->load->view('header',$data);
		$this->load->view('leftmenu',$data);
		$this->load->view('editpassword',$data);
		$this->load->view('rightmenu',$data);		
	 	$this->load->view('footer',$data);
	}
*/
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
