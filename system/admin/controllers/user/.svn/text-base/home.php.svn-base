<?php
class Home extends Controller
{
	function Home()
	{
		parent::Controller();
		$this->base = $this->config->item('base_url');
        $this->css = "css/user/style.css";
		$this->load->database();
		$this->load->model('user/member_model');
		$this->load->model('user/messeges_model');
		$this->load->model('user/news_model');
		$this->load->model('user/gallery_model');
		$this->load->model('user/activity_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('string');
		$this->load->helper(array('form', 'url'));
	}
	function edit_profile($member_id)
	{
		if($this->session->userdata('memberid')==FALSE)
		{
			header("Location:".$this->base.'admin.php/user/login');
		}
		else
		{
		$data['base'] = $this->base;
		$data['css'] = $this->css;
		$id = $this->session->userdata('memberid');
		//$data['id'] = $id;
		$data['workerscount'] = $this->activity_model->workers_count($id);
		$data['memdata'] =  $this->messeges_model->memberdata($id);
		$data['member_data'] = $this->member_model->retrive_member_data($id);
		$projects = $this->activity_model->projects_view($id);
		if(!empty($projects))
		{
			foreach($projects[0] as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
		}
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('phno', 'Phone Number', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('zip', 'zip', 'required');
		
		$config['upload_path'] ='./uploads/member';
		//chmod('./uploads/member',0777);
		$config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['max_size'] = '2048';
        $config['max_width'] = '1920';
        $config['max_height'] = '1280'; 
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        
        $arr['name'] =$this->input->post('name');
		$arr['email'] = $this->input->post('email');
		$arr['gender'] = $this->input->post('gender');
		$arr['phone'] = $this->input->post('phno');
		$arr['mobile'] = $this->input->post('mobile');
		$arr['address'] = $this->input->post('address');
		$arr['city'] = $this->input->post('city');
		$arr['country'] = $this->input->post('country');
		$arr['zip'] = $this->input->post('zip');
		
        if($this->upload->do_upload('userfile'))
        {
			$d1 = $this->upload->data();
			$data['filename'] = $d1['file_name'];
			$arr['photo'] = $d1['file_name'];
			$this->thumb($d1['file_name'],$d1['file_path']);
		}
/*
		else
		{
			echo  $this->upload->display_errors();
		}
*/
		
		if($this->form_validation->run()==TRUE)
		{
			$this->member_model->edit_user($arr,$id);
			redirect('/user/news/news_list/','refresh');
		}
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/edit_profile',$data);
			$this->load->view('user/footer',$data);
	}
}
	function thumb($filename,$filepath)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = $filepath.$filename;
		$config['new_image'] = $filepath."/thumb/".$filename;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 75;
		$config['height'] = 50;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
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
	$id = $this->session->userdata('memberid');
	$data['workerscount'] = $this->activity_model->workers_count($memid);
	$data['memdata'] =  $this->messeges_model->memberdata($memid);
	$data['memdata'] = $user = $this->member_model->retrive_member_data($memid);
	$projects = $this->activity_model->projects_view($id);
	if(!empty($projects))
	{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
		}
	#echo $this->input->post('npword')." ,, ".$this->input->post('cpword');
	#$this->load->library('form_validation');
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
					redirect('/user/news/news_list/','refresh');
				}
				else
				{
					$data['error'] = "Password Mismatching";
				}
			}
		}
	}
	$this->load->view('user/header',$data);
	$this->load->view('user/left_menu',$data);
	$this->load->view('user/editpassword',$data);
	$this->load->view('user/footer',$data);
	}
}

function projects($id=0)
	{
			if($this->session->userdata('memberid')==FALSE)
		{
			header("Location:".$this->base.'admin.php/user/login');
		}
		else
		{
		$data['base'] = $this->base;
		$data['css'] = $this->css;
		$memid = $this->session->userdata('memberid');
		$data['workerscount'] = $this->activity_model->workers_count($memid);
		$data['memdata'] =  $this->messeges_model->memberdata($memid);
		$data['news'] = $this->news_model->right_side_news();
		$data['image'] = $this->gallery_model->right_gallary();
		$data['projects'] = $projects = $this->activity_model->projects_view($memid);
		$projectid = $this->activity_model->pic_projectid($memid);
		$data['projects_image'] = $this->activity_model->projects_image_view($id);
		$data['id'] = $id;
		$data['no_of_projects'] = count($projects);
	
		$this->load->view('user/header',$data);
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/project',$data);
		$this->load->view('user/right_gallary',$data);
		$this->load->view('user/footer',$data);
		}
	}
function plot_view($id = "")
{
		if($this->session->userdata('memberid')==FALSE)
		{
			header("Location:".$this->base.'admin.php/user/login');
		}
		else
		{
	$data['base'] = $this->base;
	$data['css'] = $this->css;
	$memid = $this->session->userdata('memberid');
	$data['workerscount'] = $this->activity_model->workers_count($memid);
	$data['memdata'] =  $this->messeges_model->memberdata($memid);
	$data['news'] = $this->news_model->right_side_news();
	$data['image'] = $this->gallery_model->right_gallary();
	$data['id'] = $id;
	$data['plots'] = $projects = $this->activity_model->plot_view($id);
	$this->load->view('user/header',$data);
	$this->load->view('user/left_menu',$data);
	$this->load->view('user/project_plot',$data);
	$this->load->view('user/right_gallary',$data);
	$this->load->view('user/footer',$data);
	}
}
}
?>
