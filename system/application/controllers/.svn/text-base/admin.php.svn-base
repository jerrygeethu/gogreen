<?php
class Admin extends Controller 
{
   
   var $base;
   var $css;
   
	function Admin()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
		$this->css = "login/style.css";
		$this->load->helper('parameter');
		$this->load->database();
		$this->load->model('member_model');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('Empsettings');
	
	}
	
	function index($value='index.html')
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	  
		
		$this->load->view($value,$data);
		
	}
	
	//Member signin functions follows   
	function login($f=0,$start=0)
	{  
		
		
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$data['message']="";
		

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('userid', 'User id', 'trim|required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('psw', 'Password', 'trim|required|min_length[1]|max_length[50]');
		
	 
	 
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$data);	
			
			$this->load->view('info/signin.html',$data);
			$this->load->view('footer',$data);
			
		}
		else
		{
			$user_name = $this->input->post('userid');
			$pass_word = md5($this->input->post('psw'));
		
			
			
				$check=$this->member_model->mem_signin($user_name,$pass_word);
				
				if($check==TRUE )
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
			$config=paging($url,$total,$per_page,4); 
			$this->pagination->initialize($config); 
			$data['link']=$this->pagination->create_links(); 
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
					$this->load->view('header',$data);	
					$this->load->view('info/signin.html',$data);
					$this->load->view('footer',$data);
					}
			
		}
		
		
		
	}
	
 function validate_user($user_name,$pass_word)
 {
	 $data['result_signin'] = $this->member_model->admin_signin($user_name,$pass_word);
	 if($data['result_signin']==TRUE)
	 return TRUE;
	else
	return FALSE;
 }  
 
  function member($limit=0)
 {
  
    if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}      
   $data['css'] = $this->css;
   $data['base'] = $this->base;

   
   
	
   
   
   
   $tot= $this->db->get('member');
   $this->db->order_by("name", "name"); 
   
   $total= $tot->num_rows();
   $this->load->library('pagination');
   
  $config['base_url'] = $this->base.'index.php/admin/member';
  $config['total_rows'] = $total;
  $config['per_page'] = '10';
  $per_page='10';

  
  
   $config['prev_link'] = 'Previous';   
   $config['prev_tag_open'] = '<div id="preview">'; 
   $config['prev_tag_close'] = '</div>'; 
   $config['next_link'] = 'Next'; 
   $config['next_tag_open'] = '<div id="next">'; 
   $config['next_tag_close'] = '</div>'; 
        
           
			
            $this->pagination->initialize($config);
            $data['limit']=$limit;
            $data['details']=$this->db->get('member', $per_page,$limit);   
		
            $data['page']=$this->pagination->create_links();
   

    if($this->session->userdata('memberid')!="")
		{ 

		   $this->load->view('login/adminheader',$data);
		   $this->load->view('login/adminleftmenu',$data);  
		   $this->load->view('login/member',$data); 
		   $this->load->view('login/loginfooter',$data); 
	   }
	   else
	   {
		   $this->logout();
		   
	   }
  
 }
 
 function membergallery($row=0)
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
 	$data['css']=$this->css;
	$data['base']=$this->base;
	
	$this->load->view('login/adminheader',$data);
	$this->load->view('login/adminleftmenu',$data);	
	
		$mid=$this->session->userdata('memberid');
		
		$data['sno']=$row+1;
		// set pagination parameters

		$config['base_url']=$this->base.'index.php/admin/membergallery';

		$config['total_rows']=$this->member_model->getNummembers($mid);
			

		$config['per_page']=12;

		if($data['sno']>$config['total_rows']){$row=0;$data['sno']=$row+1;}


		$this->pagination->initialize($config);

		// store data for being displayed on view file

		$data['users']=$this->member_model->getmember($row,$config['per_page'],$mid);

		$data['links']=$this->pagination->create_links();
	
	$this->load->view('login/membergallery',$data);		    
	$this->load->view('login/loginfooter',$data);
 }
 
 function viewgallery($row=0)
 {
	  if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
 	$data['css']=$this->css;
	$data['base']=$this->base;
	
	$this->load->view('login/adminheader',$data);
	$this->load->view('login/adminleftmenu',$data);	
	
		$mid=$this->session->userdata('memberid');
		$data['sno']=$row+1;
		// set pagination parameters

		$config['base_url']=$this->base.'index.php/admin/viewgallery';

		$config['total_rows']=$this->member_model->getNumUsers($mid);
	

		$config['per_page']=12;

		if($data['sno']>$config['total_rows']){$row=0;$data['sno']=$row+1;}


		$this->pagination->initialize($config);

		// store data for being displayed on view file

		$data['users']=$this->member_model->getUsers($row,$config['per_page'],$mid);

		$data['links']=$this->pagination->create_links();
	
	$this->load->view('login/viewgallery',$data);		    
	$this->load->view('login/loginfooter',$data);
 }
 
 function gallery()
 {
	  if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
 	$data['css']=$this->css;
	$data['base']=$this->base;
	
	$data['error_msg']="";
		

	$this->load->library('form_validation');
	
	$this->form_validation->set_rules('name', 'Name', 'required');
				
	if ($this->form_validation->run() == TRUE)
	{
			$insert['memberid']=$this->session->userdata('memberid');
			$insert['name']=$this->input->post('name');	
			$insert['plotid']=$this->input->post('pname');
			$data=$this->img_upload();
			
			$insert['photo']=$data['photo'];
			$insert['thumb']=$data['thumbnail_name'];
			$rs=$this->db->insert('gallery', $insert); 
			if($rs)
			{
				$data['error_msg']= "Uploaded Successfully";
			}
			
	}
	$this->load->view('login/adminheader',$data);
	$this->load->view('login/adminleftmenu',$data);	
	$this->load->view('login/gallery',$data);		    
	$this->load->view('login/loginfooter',$data);
	
 }
 
function img_upload() 
{
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css']=$this->css;
		$data['base']=$this->base;
		
        $config['upload_path'] = './images/member_gallery/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '1920';
        $config['max_height'] = '1280';    
        $config['encrypt_name'] = TRUE;     
                                    

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()) 
		{
				//echo $this->upload->display_errors(); 
				redirect($data['base'].'index.php/admin/gallery','refresh');
		}
        else 
		{
				
                $fInfo = $this->upload->data();
				            
				chmod('./images/member_gallery/'.$fInfo['file_name'],0777);
				            
				$this->create_thumbnail($fInfo['file_name']);

                $data['uploadInfo'] = $fInfo;
                $data['thumbnail_name'] = $fInfo['raw_name'] . '_thumb' . $fInfo['file_ext'];
			
				$data['photo']=$fInfo['file_name'];
				return $data;
                                  
        }
}

function create_thumbnail($fileName) 
{   
		$data['css']=$this->css;
		$data['base']=$this->base;

        if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}  

        
	    $data['css']=$this->css;
	    $data['base']=$this->base;
        $config1['image_library'] = 'gd2';
        $config1['source_image'] = './images/member_gallery/'.$fileName;  
        $config1['new_image'] = './images/member_gallery/thumb/'.$fileName;     
        $config1['create_thumb'] = TRUE;
        $config1['maintain_ratio'] = FALSE;

        $config1['width'] =150;
        $config1['height'] =150;

        $this->load->library('image_lib', $config1);
       
        
        if(!$this->image_lib->resize()) 
		{

		$this->image_lib->display_errors();
		//echo $this->image_lib->display_errors();
		redirect($data['base'].'index.php/admin/gallery','refresh');

		}
		
}
 
 
 function member_thumbnail($structure,$fileName) 
{   
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}  

        chmod($structure,0777);
        
	    $data['css']=$this->css;
	    $data['base']=$this->base;
	    
        $config1['image_library'] = 'gd2';
        $config1['source_image'] = $structure.'/'.$fileName;  
        $config1['new_image'] = $structure.'/'.$fileName;     
        $config1['create_thumb'] = TRUE;
        $config1['maintain_ratio'] = FALSE;

        $config1['width'] =69;
        $config1['height'] =65;


        $this->load->library('image_lib', $config1);
       
        
        if(!$this->image_lib->resize()) 
		{

		$this->image_lib->display_errors();
		//echo $this->image_lib->display_errors();
		//redirect($data['base'].'index.php/admin/gallery','refresh');

		}
		
}
 
function memberadd()
 {
	  if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
	  $data['css'] = $this->css;
	  $data['base'] = $this->base;
	  $data['message']="";
	  

		
		
		
		  
		 if($this->input->post('edit')=="Edit")
			{
				
				$id=$this->input->post('id');				
			    $data['value'] = $this->db->get_where('member', array('memberid' => $id));
			    
			}
		
		else
		{
			
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email Id', 'required|min_length[5]|valid_email');
		if($this->input->post('submit')=="Add")
		{
		$this->form_validation->set_rules('password', 'Password', 'required|matches[repassword]|min_length[5]');
		$this->form_validation->set_rules('repassword', 'Confirm Password', 'required');
	     }
		
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric');
		$this->form_validation->set_rules('phone', 'Phone', 'numeric');
		
		
		if ($this->form_validation->run() == TRUE)
		{
			
				
			$pname=$insert['name']=trim($this->input->post('name'));
			$insert['email']=trim($this->input->post('email'));
			$insert['password']=trim(md5($this->input->post('password')));
			$insert['phone']=trim($this->input->post('phone'));
			$insert['mobile']=trim($this->input->post('mobile'));
			$insert['address']=trim($this->input->post('address'));
			$insert['city']=trim($this->input->post('city'));
			$insert['country']=trim($this->input->post('country'));
			$insert['zip']=trim($this->input->post('zip'));
			$insert['memstatus']=trim($this->input->post('status'));
			
			
			$structure = './images/memberphoto/'.$pname;
			
			if($this->input->post('submit')=="Add")
			{			
				
				$dir=is_dir($structure);
				if($dir)
				{
					$value="true";
				}
				else
				{
				$value=mkdir($structure,0777);
			     }	
				
				if($value)
				 {
					chmod($structure,0777);
					
				        $path=$this->_upload($structure,$pname);
						$data['message']=$path['message'];
						if(count($path)>1)
				        {  
						$insert['photo']=$path['pat']['file_name'];
					    }
						
						$rs=$this->db->insert('member', $insert); 
				
						if(!empty($rs))
						{
						 $this->member();
						 return($data) ;	
						}
						
					  
					
				}  
		    }
			else if($this->input->post('submit')=="Edit")
			{
				
				$dir=is_dir($structure);
				if($dir)
				{
					       
						  $path=$this->_upload($structure,$pname);
					      $data['message']=$path['message'];
						 
						  if(count($path)>1)
				          {
						  $insert['photo']=$path['pat']['file_name'];
						  }
						  else
						  {
							  if($this->input->post('photo')!="")
							  {
								   $insert['photo']=$this->input->post('photo');
							  }
							  else
							  {
							   $insert['photo']="";
						     }
						  }
			    }
				else
				{     
					 $value=mkdir($structure,0777);
					 if($value)
				     {
					  chmod($structure,0777);
					 
					
				        $path=$this->_upload($structure,$pname);
						$data['message']=$path['message'];
						if(count($path)>1)
				        {  
						$insert['photo']=$path['pat']['file_name'];
					    }
						else
						{
							$insert['photo']="";
						}
				     }
				}
						  
						  $id=$this->input->post('id');
						  
						  $update=$this->member_model->updatemember($insert,$id); 
				
							if(!empty($update))
							{
							 $this->member();
							 return($data) ;	
							}
			
			
		}	
		
		
		
	    }
		else
		{
			
			
			if($this->input->post('submit')=="Edit")
			{
				
				$id=$this->input->post('id');				
			    $data['value'] = $this->db->get_where('member', array('memberid' => $id));
			    
			}
				
			
			
		}
	}
			
		    $this->load->view('login/adminheader',$data);
			$this->load->view('login/adminleftmenu',$data);	
			$this->load->view('login/memberadd',$data);	
			$this->load->view('login/loginfooter',$data);
	    
	
 }

/*function getid()
{
	    $data['css'] = $this->css;
	    $data['base'] = $this->base;
	    $string=$this->input->post('queryString');
	  
	    $getid =$this->member_model->getid($string);
		
	 
	 foreach($getid->result() as $get)
	 {
		$emailid.=$get->email.",";
	 }
	  
	 print $emailid;
	
}*/
function memberdet()
 {
	          if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
	  $data['css'] = $this->css;
	  $data['base'] = $this->base;
	  
	  
	        $this->load->view('login/adminheader',$data);
			$this->load->view('login/adminleftmenu',$data);	
				
				$id=$this->input->post('id');				
			    $data['value'] = $this->db->get_where('member', array('memberid' => $id));
		


			$this->load->view('login/memberdet',$data);	
			$this->load->view('login/loginfooter',$data);	
	 
 }


function _upload($structure,$pname)
{
	
	              
		       		$config['upload_path'] = $structure; 				
					$config['allowed_types'] = 'gif|jpg|png';
				
					$config['file_name']=$pname;
				
			
			
					$this->load->library('upload', $config);	
					$up=$this->upload->do_upload();
					
					if($up)
					{

						$load['message']= "Your photo successfully uploaded";
						$load['pat']=$this->upload->data();
						
						$this->member_thumbnail($structure,$load['pat']['file_name']);

					}
					else
					{

		
						if(is_dir($structure))
						{
							if(file_exists($structure))
							{
					         
						    }
							else
							{
								 rmdir($structure);
							 }
					    }
					$load['message']= $this->upload->display_errors();
					
					}		
					
					
					return($load);

	
	
}



 function news($f=0,$start=0)
 {
	  if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
	 $data['css'] = $this->css;
	 $data['base'] = $this->base;
	 
	
	
	
		$this->limit=4;
		$page['start']=intval($start);
		$page['count']=0; 
		$page['limit'] = $this->limit; 
		$data['news_lst']=$this->member_model->newslist('news',$page); 
		//print_r($data['news_lst']['result']);
		$page['count']=1; 
		$data['newslsts_count']=$this->member_model->newslist('news',$page); 
		$url= $this->base.'index.php/admin/news/'.$f.'/'; 
		$total = $data['newslsts_count']['totalrows'];
		$per_page = $this->limit;  
		$config=paging($url,$total,$per_page,4); 
		$this->pagination->initialize($config); 
	 	$data['link']=$this->pagination->create_links(); 
	 	
	 	
	 	
	 
	  $this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);	
		$this->load->view('login/news',$data);	
	  $this->load->view('login/loginfooter',$data);
	  
 }
 
  function addnews($f=0,$start=0)
	{ 
		if($this->session->userdata('memberid')==FALSE) 
		{	
			header("Location:".$this->base."index.php/admin/login");	
		}
		$data['css'] = $this->css;
	  $data['base'] = $this->base;
	  
	  $data['extra']="<script type=\"text/javascript\" src=\"". $this->base."js/calendar.js\"></script>
							<link href=\"". $this->base."css/calendar.css\" rel=\"stylesheet\" type=\"text/css\" />";
							
		$current_date=date("Y-m-d");
							
			$this->form_validation->set_rules('topic', 'Title', 'required');
			$this->form_validation->set_rules('detail', 'News', 'required');
			$this->form_validation->set_rules('newsdate', 'Date', 'callback_date_check');
			
	    if(($this->input->post('viewBtn')=="") && (($this->input->post('addBtn')!="") || ($this->input->post('editBtn')!="")) || ($this->input->post('delBtn')!=""))
			{
				if($this->form_validation->run() == TRUE)
				{
					$newsid=intval($this->input->post('newsid'));
					$title=$insert['topic']=trim($this->input->post('topic'));
					$insert['detail']=trim($this->input->post('detail'));
					$insert['posted']=$current_date;
					$insert['newsdate']=dmytoymd($this->input->post('newsdate'));
					
					$structure = './images/news/';
					$path=$this->_imageupload();
					if(!empty($path['photo']))
					{
						//$insert['photo']=$path['raw_name'].$path['file_ext'];
						$insert['photo']=$path['photo'];
					}
					
					$insert['status']=1;
					
					if($this->input->post('addBtn')=="Add")
					{	
							$data['news']=$this->db->insert('news', $insert); 
							redirect('/admin/addnews','refresh');
					}
					
					if($this->input->post('editBtn')!="")
					{
						$where['newsid']=intval($this->input->post('newsid'));
						$this->db->where($where); 
						$data['nwsid']=$this->db->update('news',$insert); 
						redirect('/admin/addnews','refresh');
					}
					if($this->input->post('delBtn')!="")
					{
						$where['newsid']=intval($this->input->post('newsid'));
						$this->db->where($where);
						$data['del_nwsid']=$this->db->delete('news'); 
						redirect('/admin/addnews','refresh');
					}
				}
				if($this->input->post('editBtn')!="")
				{
					$data['nid']=intval($this->input->post('newsid'));
				}
		}
		if($this->input->post('viewBtn')!="")
		{	
			$where['newsid']=intval($this->input->post('newsid'));
			$data['listnews']=$this->member_model->selectrow('news',$where['newsid'],"");
			//print_r($data['listnews']);	
		}
		  
		$this->limit=4;
		$data['start']=intval($start);
		$data['count']=0; 
		$data['limit'] = $this->limit; 
		$data['newslst']=$this->member_model->newslist('news',$data); 
		// print_r($data['newslst']['result']);
		$data['count']=1; 
		$data['newslst_count']=$this->member_model->newslist('news',$data); 
		$url= $this->base.'index.php/admin/addnews/'.$f.'/'; 
		$total = $data['newslst_count']['totalrows'];
		$per_page = $this->limit;  
		$config=paging($url,$total,$per_page,4); 
		$this->pagination->initialize($config); 
		$this->pagination->initialize($config); 
	 	$data['link']=$this->pagination->create_links(); 
		 // print_r($data);
	  $this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);	
		$this->load->view('login/addnews',$data);	
	  $this->load->view('login/loginfooter',$data);
  }
  function _imageupload()
  {
		
		$data['css']=$this->css;
		$data['base']=$this->base;
		
        $config['upload_path'] = './images/news/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()) 
		{
				$error= array('error' => $this->upload->display_errors()); 
					 return $error;
		}
    else 
		{

                $fInfo = $this->upload->data();
				            
						
				$data['photo']=$fInfo['file_name'];
				//print_r($data);
				return $data;
                                  
        }
	}
  
  

	function news_farming($id)
	{  
		echo $id;
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;
	 
		//echo $id;
	 
		$where['newsid ']=$id;
		$data['news']=$this->member_model->selectrow('news',$where['newsid ']);
		//print_r($data['news']);
	 
	  $this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);	
		$this->load->view('login/news_farming',$data);	
	  $this->load->view('login/loginfooter',$data);
	}
	
	function date_check($str)
	{
		$posteddate=strtotime(date("Y-m-d"));
		$newdate=strtotime(dmytoymd($str));
		if($posteddate > $newdate)
		{
			$this->form_validation->set_message('date_check', 'Sorry, Invalid date. Please enter date greater than current date!!');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	
	
	function pwd()
	{
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		
			$this->form_validation->set_rules('currentpwd', 'Current Passwod', 'callback_currentpwd_check');
			$this->form_validation->set_rules('newpwd', 'New Passwod', 'trim|required|min_length[5]|max_length[20]|required|matches[confirmpwd]');
			$this->form_validation->set_rules('confirmpwd', 'Confirm Passwod', 'trim|required');
			
				if(($this->input->post('addBtn')!="") && ($this->session->userdata('memberid')!=""))
				{
					if($this->form_validation->run() == TRUE)
					{
						$update['password']=md5($this->input->post('newpwd'));
						
						$where['memberid']=intval($this->session->userdata('memberid'));
						$this->db->where($where); 
						$data['newpwd']=$this->db->update('member',$update);
						redirect('/admin/logout','refresh');
					}
				}
			
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);	
		$this->load->view('login/pwd',$data);	
	  $this->load->view('login/loginfooter',$data);		
	}
	
	function currentpwd_check($str)
	{
		$nwpwd=md5($str);
		$where['memberid']=intval($this->session->userdata('memberid'));
		$data['pwdnew']=$this->member_model->selectpwd('member',$where['memberid'],"");
		$new_pwd=$data['pwdnew']['result']->password;
		
		if($nwpwd!=$new_pwd)
		{
			$this->form_validation->set_message('currentpwd_check', 'Please enter carrect password');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	

 function message($limit="0") 
 {  
	 if($this->session->userdata('memberid')==FALSE) 
	 {	
		 header("Location:".$this->base."index.php/admin/login");	
		}

	 $data['css'] = $this->css;
	 $data['base'] = $this->base;
	 
	
	 $data['type']="";
	    $email=$this->session->userdata('email');
		
	     $tot=$this->member_model->getmessage($id="",$email,$from="");
		 $total= $tot->num_rows();
		 $this->load->library('pagination');

		$config['base_url'] = $this->base.'index.php/admin/message';
		$config['total_rows'] = $total;
		$config['per_page'] = '15';
		$per_page='15';
		
		
		 $config['prev_link'] = 'Previous'; 	 
	     $config['prev_tag_open'] = '<div id="preview">'; 
	     $config['prev_tag_close'] = '</div>'; 
		 $config['next_link'] = 'Next'; 
		 $config['next_tag_open'] = '<div id="next">'; 
	     $config['next_tag_close'] = '</div>'; 
        $type="receive";
		 
         $this->pagination->initialize($config);
		 $data['details'] =  $this->member_model->getmessage($id="",$email,$from="",$type="receive",$limit,$per_page);

         $data['page']=$this->pagination->create_links();

	   	
		if($this->session->userdata('memberid')!="")
		{ 
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);
		$this->load->view('login/message',$data);
		$this->load->view('login/loginfooter',$data);
	    }	
		
		else
		{
			redirect('admin/logout', 'refresh');
		}
 }
  function sentmessage($limit="0") 
 {  if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
	 $data['css'] = $this->css;
	 $data['base'] = $this->base;
	 
	 
	    $from=$this->session->userdata('memberid');
		$data['type']="sendmail";
		 $tot=$this->member_model->getmessage($id="",$email="",$from,$type="send");
		 $total= $tot->num_rows();
		 $this->load->library('pagination');
		
		$this->load->library('pagination');

		$config['base_url'] = $this->base.'index.php/admin/sentmessage';
		$config['total_rows'] = $total;
		$config['per_page'] = '15';
		$per_page='15';
		
		
		 $config['prev_link'] = 'Previous'; 	 
	     $config['prev_tag_open'] = '<div id="preview">'; 
	     $config['prev_tag_close'] = '</div>'; 
		 $config['next_link'] = 'Next'; 
		 $config['next_tag_open'] = '<div id="next">'; 
	     $config['next_tag_close'] = '</div>'; 
        
		 
         $this->pagination->initialize($config);
		 $type="send";
		
	 	 $data['details'] =  $this->member_model->getmessage($id="",$email="",$from,$type="send",$limit,$per_page);
		 $data['page']=$this->pagination->create_links();
	   
	 
	    $this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);	
		$this->load->view('login/message',$data);	
	    $this->load->view('login/loginfooter',$data);
	 
 }
 function messagecompose($id="")
 {   if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
	 $data['css'] = $this->css;
	 $data['base'] = $this->base;
	 $data['extra']='<script type="text/javascript" src="'.$this->base.'js/dropdown/jquery-1.4.2.min.js"></script>';
	 
   
	 
	    $this->load->library('form_validation');
		
		if($this->input->post('rep')=="")
		{
			$this->form_validation->set_rules('to[]', 'To', 'required');
			$data['rep']="";
		}
		else
		{
			$this->form_validation->set_rules('toreplay', 'To', 'required');
			$data['rep']="1";
			
		}
		
		
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('body', 'Message Body', 'required');
		$data['emailid'] = $this->member_model->getid();
		
		
		
	   if($id!="" && $this->input->post('send')=="" )
	   {
		   
		        $data['value'] = $this->member_model->getmessage($id);
			
			    $this->load->view('login/adminheader',$data);
				$this->load->view('login/adminleftmenu',$data);	
				$this->load->view('login/messagecompose',$data);	
				$this->load->view('login/loginfooter',$data);
		   
	   }
	   
	  else if($id!="" && $this->input->post('send')=="Send" )
	   {
					if($this->form_validation->run() == TRUE)
					{
				
							 $to=$this->input->post('to');							
							 $insert['subject']=$this->input->post('subject');
							 $insert['body']=$this->input->post('body');
							 $insert['date']=date("Y-m-d");
							 $insert['from']=$this->session->userdata('memberid');
							  if(!empty($to))
								 {
								 for($i=0;$i<count($to);$i++)
								 {
								 $insert['to']=$to[$i];
								 $insert['type']="send";
								 $rs=$this->db->insert('message', $insert);
								 $insert['type']="receive";
								 $rs=$this->db->insert('message', $insert);
								 } 
								 }
								 else
								 {
								 $insert['to']=$this->input->post('toreplay');
								 
								 $insert['type']="send";
								 $rs=$this->db->insert('message', $insert);
								 $insert['type']="receive";
								 $rs=$this->db->insert('message', $insert);
								 }
								 
							 if($rs)
							 {			 
							  $this->message();			 
							 }
					 
					 }
					else
					{
					$this->load->view('login/adminheader',$data);
					$this->load->view('login/adminleftmenu',$data);
					
					$this->load->view('login/messagecompose',$data);
				    
					$this->load->view('login/loginfooter',$data);
						
					} 
		 
	   
		
		   
	  }
	   
	   else
	   {
	   
	    
	
		
		
		if ($this->form_validation->run() == TRUE)
		{
	
				
				 $to=$this->input->post('to');
				
				
				
					 
				 $insert['subject']=$this->input->post('subject');
				 $insert['body']=$this->input->post('body');
				 $insert['date']=date("Y-m-d");
				 $insert['from']=$this->session->userdata('memberid');
				  if(!empty($to))
					 {
					 for($i=0;$i<count($to);$i++)
					 {
					 $insert['to']=$to[$i];
								 $insert['type']="send";
								 $rs=$this->db->insert('message', $insert);
								 $insert['type']="receive";
								 $rs=$this->db->insert('message', $insert);

					 } 
					 }
					 else
								 {
								 $insert['to']=$this->input->post('toreplay');
								 $insert['type']="send";
								 $rs=$this->db->insert('message', $insert);
								 $insert['type']="receive";
								 $rs=$this->db->insert('message', $insert);

								 }
				 if(!empty($rs))
				 {			 
				  $this->message();			 
				 }
		 
	    }
		else
		{
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);	
		$this->load->view('login/messagecompose',$data);	
	    $this->load->view('login/loginfooter',$data);
			
		}
	}
	 
 }
 function messageinbox($id,$type="")
 {    if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
	 $data['css'] = $this->css;
	 $data['base'] = $this->base;
	 
	 $data['type']="";
	 
	    if($type!="")
		{
			$data['type']=$type;
		}
	    $data['value'] = $this->member_model->getmessage($id);
		
		
	    $this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);	
		$this->load->view('login/messageinbox',$data);	
	    $this->load->view('login/loginfooter',$data);
	 
 }
 function delete()
 {    if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
	 $data['css'] = $this->css;
	 $data['base'] = $this->base;
	 $type=$this->input->post('type');   
	 	 if($type!="")

	         {
				 $type1="send";
			 }
	 else
	 {
		$type1="receive"; 
	 }
	    $fullid=$this->input->post('fullid');
		
	    if($fullid!="")
		{
		$full=explode(",",$fullid);
		for($i=0;$i<count($full);$i++)
		 {
			 $id=$full[$i];
			 
			 $this->member_model->messagedelete($id,$type1);
		 }
		}
		
	
	  
		
	if($type!="")
	{	
           $this->sentmessage();
	  }
	  else
	  {
		  $this->message();
		  
		  
	  }
	 
 }
 

 function logout()
 {
	$this->session->unset_userdata('memberid');
	$this->session->unset_userdata('fullname');
	$this->session->unset_userdata('status');
	$this->session->unset_userdata('memphoto');
	$this->login();
 }

 
 
 
/* ================projects================*/ 
 function projects($f=0,$start=0)
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$this->load->helper('url');
		$this->load->library('pagination');
		
		
		$this->form_validation->set_rules('ptitle', 'title', 'required');
		$this->form_validation->set_rules('place', 'Place', 'required');
		$this->form_validation->set_rules('extent', 'Extent', 'required');
		$this->form_validation->set_rules('admin', 'Admin', 'required');
		if ($this->form_validation->run() == FALSE)
		{
		}
		else
		{
				if($this->input->post('addbtn')!="")
				{
					$insert['title']=trim($this->input->post('ptitle'));
					$insert['description']=trim($this->input->post('desc'));
					$insert['place']=trim($this->input->post('place'));
					$insert['extent']=trim($this->input->post('extent'));
					$insert['remarks']=trim($this->input->post('remarks'));
					$insert['admin']=trim($this->input->post('admin'));
					$timestamp=strftime("%Y-%m-%d %H:%M:%S %Y"); 
					$insert['createdate']=strftime("%Y-%m-%d %H:%M:%S", strtotime($timestamp));
					$insert_status=$this->member_model->insertproject($insert);
					 redirect('/admin/projects/', 'refresh');
				}
		}

		//getadmin list
		$data['adminlist']=$this->member_model->adminlist();
		//pagination for project list
		$this->limit=10;
		$page['start']=intval($start);
		$page['count']=0; 
		$page['limit'] = $this->limit; 
		$data['getproject']=$this->member_model->projectlist($page); 
		$page['count']=1; 
		$data['getproject_count']=$this->member_model->projectlist($page);
		$url= $this->base.'index.php/admin/projects/'.$f.'/'; 
		$total = $data['getproject_count']['total_rows'];
		$per_page = $this->limit;  
		$config=paging($url,$total,$per_page,4); 
		$this->pagination->initialize($config); 
	 	$data['link']=$this->pagination->create_links(); 

		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);	
		$data['addform']=$this->_common($data,trim($f));		
		$this->load->view('projects/listproject',$data);	
		$this->load->view('login/loginfooter',$data);
 }
 
 
 function projectview($pid=0,$start=0)
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$this->load->library('pagination');
		$data['hidprojectid']=$page['hidprojectid']=($this->input->post('projectid')!="")?$this->input->post('projectid'):$pid;
		
		
		/*=========edit click==========*/
		if($this->input->post('ptitle')!="")
		{ 	 	 	 	 	 	
				$where['projectid']=$this->input->post('projectid');
				$update['title']=$this->input->post('ptitle');
				$update['description']=$this->input->post('desc');
				$update['place']=$this->input->post('place');
				$update['extent']=$this->input->post('extent');
				$update['remarks']=$this->input->post('remarks');
				$update['admin']=$this->input->post('admin');
				$status=$this->member_model->updatetable($update,$where,'project');
		
		}
		/*=========edit click==========*/
		
		
		//getadmin list
		$data['adminlist']=$this->member_model->adminlist();
		//get project row
		$data['projectrow']=$this->member_model->getprojectrow(intval($data['hidprojectid']));
		$data['editform']=$this->load->view('projects/editproject',$data,TRUE);	
		
		
/*=========project activities==========*/		
		//pagination for  project activities
/*
		$this->limit=5;
		$page['start']=intval($start);
		$page['count']=0; 
		$page['limit'] = $this->limit; 
		$data['project_act']=$this->member_model->projectactivities($page); 
		$page['count']=1; 
		$data['project_act_count']=$this->member_model->projectactivities($page);
		$url= $this->base.'index.php/admin/projectview/'.$data['hidprojectid'].'/'; 
		$total = $data['project_act_count']['total_rows'];
		$per_page = $this->limit;  
		$config=paging($url,$total,$per_page,4); 
		$this->pagination->initialize($config); 
	 	$data['link']=$this->pagination->create_links(); 
*/
/*=========project activities==========*/		



	$this->limit=5;	
		$page['start']=intval($start);
		$page['count']=0; 
		$page['limit'] = $this->limit; 
		$data['plot_act']=$this->member_model->plotactivities($page); 
		$page['count']=1; 
		$data['plot_act_count']=$this->member_model->plotactivities($page);
		$url= $this->base.'index.php/admin/projectview/'.$data['hidprojectid'].'/'; 
		$total = $data['plot_act_count']['total_rows'];
		$per_page = $this->limit;  
		$config=paging($url,$total,$per_page,4); 
		$this->pagination->initialize($config); 
	 	$data['link']=$this->pagination->create_links(); 

		
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('projects/projectdetails',$data);		
		$this->load->view('login/loginfooter',$data);
 }
 
 
  function viewprojects($start=0)
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$this->load->library('pagination');
	
		$this->limit=10;
		$data['page']=$page['start']=intval($start);
		$page['count']=0; 
		$page['limit'] = $this->limit; 
		$data['projectrow']=$this->member_model->listproject($page); 
		
		$page['count']=1; 
		
		
		$data['projectrowcount']=$this->member_model->listproject($page);
		$url= $this->base.'index.php/admin/viewprojects/'; 
		$total = $data['projectrowcount']['total_rows'];
		$per_page = $this->limit;  
		$config=paging($url,$total,$per_page,3); 
		$this->pagination->initialize($config); 
	 	$data['link']=$this->pagination->create_links(); 
		
		

		
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('projects/viewprojects',$data);		
		$this->load->view('login/loginfooter',$data);
 }
 
   function viewprojectdet($id=0,$page=0)
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$this->load->library('pagination');
	
		 
		 $data['projectrow']=$this->member_model->listprojectrow($id); 
		
		
	
        $data['page']=$page;
		
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('projects/projectdet',$data);		
		$this->load->view('login/loginfooter',$data);
 }
 function actdet($id=0,$page=0)
 {
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$this->load->library('pagination');
	
		 
		 $data['projectrow']=$this->member_model->actdetail($id); 
		
		
	
        $data['page']=$page;
		
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('login/actdet',$data);		
		$this->load->view('login/loginfooter',$data);
 }
 
 
 function plot($f=0,$pid=0,$start=0)
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;		
		$this->load->library('pagination');
		$this->load->helper('url');
		$data['hidprojectid']=$page['hidprojectid']=($this->input->post('projectid')!="")?$this->input->post('projectid'):$pid;
		$data['projectname']=$this->member_model->projectname($data['hidprojectid'],"project");
		
		
		if($this->input->post('fromproject')!=1)//to avoid form submit from projectlist page
		{
					$this->form_validation->set_rules('owner', 'owner', 'required');
					$this->form_validation->set_rules('ptitle', 'title', 'required');
					$this->form_validation->set_rules('loc', 'Location', 'required');
					$this->form_validation->set_rules('extent', 'Extent', 'required');
					if ($this->form_validation->run() == FALSE)
					{
					}
					else
					{
							if($this->input->post('addbtn')!="")
							{ 	 	 	 	 	
								$insert['projectid']=intval($data['hidprojectid']);
								$insert['title']=trim($this->input->post('ptitle'));
								$insert['description']=trim($this->input->post('desc'));
								$insert['location']=trim($this->input->post('loc'));
								$insert['extent']=trim($this->input->post('extent'));
								$insert['owner']=trim($this->input->post('owner'));
								$insert['remarks']=trim($this->input->post('remarks'));
								$timestamp=strftime("%Y-%m-%d %H:%M:%S %Y"); 
								$insert['createdate']=strftime("%Y-%m-%d %H:%M:%S", strtotime($timestamp));
								$insert_status=$this->member_model->insertplot($insert);
								redirect('/admin/plot/addplot/'.intval($insert['projectid']).'', 'refresh');
							}
					}
		}
			
		//getowner list
		$data['ownerlist']=$this->member_model->adminlist();
		//pagination for plot list
		$this->limit=2;
		$page['start']=intval($start);
		$page['count']=0; 
		$page['limit'] = $this->limit; 
		$data['getplot']=$this->member_model->plotlist($page); 
		$page['count']=1; 
		$data['getplot_count']=$this->member_model->plotlist($page);
		//$url= $this->base.'index.php/admin/plot/'.$f.'/'.$page['hidprojectid'].'/'; 
		$url= $this->base.'index.php/admin/plot/addplot/'.$page['hidprojectid'].'/'; 
		$total = $data['getplot_count']['total_rows'];
		$per_page = $this->limit;  
		$config=paging($url,$total,$per_page,5); 
		$this->pagination->initialize($config); 
	 	$data['link']=$this->pagination->create_links(); 
		
		
		
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);		
		$data['addform']=$this->_common($data,trim($f));		
		$this->load->view('plot/listplot',$data);	
		$this->load->view('login/loginfooter',$data);
 }


 function plotview($plotid="")
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;	
		$data['client']=0;
		if($plotid!="")
		{
			$data['hidplotid']=$plotid;
			$data['client']=1;
		}
		else
		{
		$data['hidplotid']=$this->input->post('plotid');
	    }
		$data['hidprojid']=$this->input->post('projid');
		
		
		
		/*=========edit click==========*/
		if($this->input->post('ptitle')!="")
		{ 	 		 	 	 	
				$where['plotid']=$this->input->post('plotid');
				$update['title']=$this->input->post('ptitle');
				$update['description']=$this->input->post('desc');
				$update['location']=$this->input->post('place');
				$update['extent']=$this->input->post('extent');
				$update['remarks']=$this->input->post('remarks');
				$update['owner']=$this->input->post('admin');
				$status=$this->member_model->updatetable($update,$where,'plots');		
		}
		/*=========edit click==========*/
		
		
		//todays date
		$data['today']=date('d/m/Y');		
		$dbtoday=date('Y-m-d');
		$data['wk_count']=$this->member_model->getwkcount($dbtoday,$data['hidplotid']);
		
		//getadmin list
		$data['adminlist']=$this->member_model->adminlist();
		//get plot row
		$data['plotrow']=$this->member_model->plotrow(intval($data['hidplotid']),intval($data['hidprojid']));
		$data['editform']=$this->load->view('plot/editplot',$data,TRUE);	
		
		
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);				
		$this->load->view('plot/plotdetails',$data);	
		$this->load->view('login/loginfooter',$data);	
 }

 

 
	 
	 
	 
	 function workerslist()
     {
			 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$this->load->helper('url');	
			
		
		
					 
					$status=$this->session->userdata('status');
					$id=$this->session->userdata('memberid');
					
					if($status=="admin")
					{
					$data['list']=$this->member_model->workerslist();
				    }
					else
					{
					 $data['list']=$this->member_model->workerslist($id);
						
					}
					
					$this->load->view('login/adminheader',$data);
					$this->load->view('login/adminleftmenu',$data);			
					$this->load->view('login/workerslist',$data);	
					$this->load->view('login/loginfooter',$data);				
				
							
	
	 
	 }
 
 

 

 
 function workers()
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$this->load->helper('url');	
		$data['plotid']=($this->input->post('plotid')!="")?intval($this->input->post('plotid')):0;
		$data['projid']=($this->input->post('projid')!="")?intval($this->input->post('projid')):0;		
		
		
				if($this->input->post('worker')!="")
				{ 	 
					$p=$this->input->post('pp');
					$insert['plotid']=trim($this->input->post('plotid'));
					$insert['alloteddate']=dmytoymd($this->input->post('allotedate'.$p));
					$insert['workerscount']=trim($this->input->post('worker'));
					
					//delete existing
					$delete_status=$this->member_model->deleteworker($insert);					
					$insert_status=$this->member_model->insertworker($insert);									
				}			
				redirect('/admin/plot/0/'.intval($data['projid']).'', 'refresh');		 
	 }
 
 function workercount()
 {
	 
	$date=dmytoymd($_POST['queryString']);
	$plotid=$_POST['pid'];
	$wk_count=$this->member_model->getwkcount($date,$plotid);
	if(!empty($wk_count->workerscount)) { echo $wk_count->workerscount; } else { echo "0";}
 }

 
 

 function activity($f=0,$tid=0,$type=0,$start=0)
 {
	 if($this->session->userdata('memberid')==FALSE) 
	 {	
		 header("Location:".$this->base."index.php/admin/login");	
	 }
		$data['css'] = $this->css;
		$data['base'] = $this->base;				
		$this->load->library('pagination');
		$this->load->helper('url');
		$data['hidtypeid']=$page['hidtypeid']=($this->input->post('typeid')!="")?$this->input->post('typeid'):$tid;
		$data['hidtype']=$page['hidtype']=($this->input->post('type')!="")?$this->input->post('type'):$type;
		$data['projectname']=$this->member_model->projectname($data['hidtypeid'],$data['hidtype']);
		
		if($this->input->post('fromactivtiy')!=1)//to avoid form submit from projectlist page
		{
					$this->form_validation->set_rules('ptitle', 'title', 'required');
					if ($this->form_validation->run() == FALSE)
					{
					}
					else
					{ 	 	 	 	 	
							if($this->input->post('addbtn')!="")
							{ 	 	 	 	 	
								$insert['typeid']=intval($data['hidtypeid']);
								$insert['type']=$data['hidtype'];
								$insert['title']=trim($this->input->post('ptitle'));
								$insert['data']=trim($this->input->post('desc'));
								$insert['enteredby']=$this->session->userdata('memberid');
								$timestamp=strftime("%Y-%m-%d %H:%M:%S %Y"); 
								$insert['createdate']=strftime("%Y-%m-%d %H:%M:%S", strtotime($timestamp));
								$insert_status=$this->member_model->insertactivity($insert);
								redirect('/admin/activity/0/'.intval($insert['typeid']).'/'.$insert['type'].'', 'refresh');
							}
					}		
		}
		
		
		//pagination for plot list
		$this->limit=5;
		$page['start']=intval($start);
		$page['count']=0; 
		$page['limit'] = $this->limit; 
		$data['getactivity']=$this->member_model->activitylist($page); 
		$page['count']=1; 
		$data['getactivity_count']=$this->member_model->activitylist($page);
		$url= $this->base.'index.php/admin/activity/'.$f.'/'.$page['hidtypeid'].'/'.$page['hidtype'].'/'; 
		$total = $data['getactivity_count']['total_rows'];
		$per_page = $this->limit;  
		$config=paging($url,$total,$per_page,6); 
		$this->pagination->initialize($config); 
	 	$data['link']=$this->pagination->create_links(); 		
				
		
		
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);		
		$data['addform']=$this->_common($data,trim($f));		
		$this->load->view('activity/listact',$data);	
		$this->load->view('login/loginfooter',$data);
 }
 function editactivity()
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;		
		$this->load->helper('url');	
		$data['hidactid']=$this->input->post('actid');
		$data['hidtypeid']=$this->input->post('typeid');
		$data['hidtype']=$this->input->post('type');
		$data['actrow']=$this->member_model->activityrow($data['hidactid']);
		
		$this->form_validation->set_rules('ptitle', 'title', 'required');
				if($this->form_validation->run() == FALSE)
				{
				}
				else
				{ 	 	 	 	 	
						if($this->input->post('editbtn')!="")
						{ 	 	 	
							$where['activityid']=intval($this->input->post('actid')); 	 	
							$update['title']=trim($this->input->post('ptitle'));
							$update['data']=trim($this->input->post('desc'));
							$insert_status=$this->member_model->updatetable($update,$where,'activity');
							//activity/addact/8/project
							redirect('/admin/activity/addact/'.$data['hidtypeid'].'/'.$data['hidtype'].'', 'refresh');
						}
				}		
		
		
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('activity/editactivity',$data);	
		$this->load->view('login/loginfooter',$data);
 }
 
 function viewactivity()
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
	   $data['css'] = $this->css;
	   $data['base'] = $this->base;		
	   
		$id=$this->session->userdata('memberid');	 
	 	$act=$data['viewact']=$this->member_model->viewactivity($id);
	 	
	 
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('login/viewactivity',$data);	
		$this->load->view('login/loginfooter',$data);
		
	 
 }
  function management()
 {
	 if($this->session->userdata('memberid')==FALSE) 
	 {	
		 header("Location:".$this->base."index.php/admin/login");	
	 }
	   $data['css'] = $this->css;
	   $data['base'] = $this->base;		
		
	    
		$id=$this->session->userdata('memberid');	 
		$status=$this->session->userdata('status');	 
		if($status="admin")
		{
		$data['viewact']=$this->member_model->management();
		}
		else
		{
	 	$data['viewact']=$this->member_model->management($id);
	    }
	  
	 
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('login/management',$data);	
		$this->load->view('login/loginfooter',$data);
 }
 
 function plantation()
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
	   $data['css'] = $this->css;
	   $data['base'] = $this->base;		
	   
	    $this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('login/history',$data);	
		$this->load->view('login/loginfooter',$data);
	 
	 
 }
 
 
 
 
 
 
 
 
 function _common($data,$f)
 {
	 if($f == "add")
	 {
		 return $this->load->view('projects/addproject',$data,TRUE);	
	 }
	 else  if($f == "addplot")
	 {
		 return $this->load->view('plot/addplot',$data,TRUE);	
	 }
	 else  if($f == "addact")
	 {
		 return $this->load->view('activity/addact',$data,TRUE);	
	 }
	 else  if($f == "wk")
	 {
		 return $this->load->view('plot/addworker',$data,TRUE);
	 }
	 else
	 {
		 return "";		
	 }
 }
 
 function activitydetails($start=0)
 {
	 if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$this->load->library('pagination');
		
		
		
		
	 	$this->limit=5;
		$page['start']=intval($start);
		$page['count']=0; 
		$page['limit'] = $this->limit; 
		$data['activity']=$this->member_model->allactivities($page); 
		
		$page['count']=1; 
		$data['activity_count']=$this->member_model->allactivities($page);
		$url= $this->base.'index.php/admin/activitydetails/'; 
		$total = $data['activity_count']['total_rows'];
		$per_page = $this->limit;  
		$config=paging($url,$total,$per_page,3); 
		$this->pagination->initialize($config); 
	 	$data['link']=$this->pagination->create_links(); 
		
		
	 
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('activity/activities',$data);	
		$this->load->view('login/loginfooter',$data);
 }
 function viewact()
 {
		if($this->session->userdata('memberid')==FALSE) {	header("Location:".$this->base."index.php/admin/login");	}
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		
		
		
		$data['id']=$this->input->post('actid');
		$data['actdetails']=$this->member_model->actdet($data['id']);
	
		$data['typeid']=$this->member_model->gettypename($data['actdetails']->typeid);
		
		$this->load->view('login/adminheader',$data);
		$this->load->view('login/adminleftmenu',$data);			
		$this->load->view('activity/actcontent',$data);	
		$this->load->view('login/loginfooter',$data);
 }
 
}
/* End of file home.php */
/* Location: ./system/application/controllers/home.*/
