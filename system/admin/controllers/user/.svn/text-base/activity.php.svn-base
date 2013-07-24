<?php 
	class Activity extends Controller
	{
		function Activity()
		{
			parent::controller();
			$this->base = $this->config->item('base_url');
			
			$this->css = "css/user/style.css";
			$this->load->database();
			//$this->load->model('member_model');
			$this->load->model('user/messeges_model');
			$this->load->model('user/news_model');
			$this->load->model('user/activity_model');
			$this->load->helper('parameter_helper');
			$this->load->model('user/gallery_model');
			$this->load->library('pagination');
			$this->load->helper('date');
			$this->load->helper('string');
			$this->load->helper('url');
			$this->load->helper('file');
			//$this->load->helper('csv');
			$this->load->helper('form');
			$this->load->library('session');
			
		}
		function crop_details($start = 0)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			
			$data['image'] = $this->gallery_model->right_gallary();
			$data['news'] = $this->news_model->right_side_news();
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
				foreach($projects[0] as $projects1)
				{
				$data['project_id'] = $projects1['projectid'];
				}
			}
			$path = $this->base.'admin.php/user/activity/crop_details';
			$perpage ='10';
			$data['count'] = $count = $this->activity_model->count_crop_details1($id );
			$total = count($count);
			$data['page'] = $this->pagination($path,$total,$perpage,$start);
			$data['start'] = $start;
			$data['crop_details'] = $this->activity_model->crop_details($start,$perpage,$id);
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/activity_cropdetails',$data);
			$this->load->view('user/right_gallary',$data);
			$this->load->view('user/footer',$data);
		}
		function readmore_crop($crop_id1)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
			foreach($projects[0] as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}
			$data['crop_details']  = $this->activity_model->retrive_crop_details($crop_id1);
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/readmore_crop',$data);
			$this->load->view('user/footer',$data);
		}

		function plant_history($start = 0)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$data['image'] = $this->gallery_model->right_gallary();
			$data['news'] = $this->news_model->right_side_news();
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}		
			$data['count'] = $count = $this->activity_model->plant_history1($id);
			$headings = "Project, Plot Name,Crop,No. of crop,Date";
			if($this->input->post('download'))
			{
				#$this->export_database();
				#exit;
			}
			$path = $this->base.'admin.php/user/activity/plant_history/';
			$perpage = 10;
			$total = count($count);
			$data['page'] = $this->pagination($path,$total,$perpage,$start);
			$data['plant_history'] = $this->activity_model->plant_history($id,$start,$perpage);
			
			
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/activityplanthistry',$data);
			$this->load->view('user/right_gallary',$data);
			$this->load->view('user/footer',$data);
		}
		function readmore_plant($plant_id)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
			foreach($projects[0] as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}
			$data['plant_details']  = $this->activity_model->retrive_planthistory($plant_id,$id);
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/readmore_plant',$data);
			$this->load->view('user/footer',$data);
		}
		
		function risk_management($start = 0)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$data['image'] = $this->gallery_model->right_gallary();
			$data['news'] = $this->news_model->right_side_news();
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}
			$data['count'] = $count_risk = $this->activity_model->count_risk($id);
			$total = count($count_risk);
			$path = $this->base.'admin.php/user/activity/risk_management';
			$perpage = '10';
			$data['page'] = $this->pagination($path,$total,$perpage,$start);
			$data['start'] = $start; 		
			$data['risk_list'] = $this->activity_model->risk_list($id,$start,$perpage);
			
			
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/activityriskmanagement',$data);
			$this->load->view('user/right_gallary',$data);
			$this->load->view('user/footer',$data);
		}
		function readmore_risk($risk_id)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}
			$data['risk_details']  = $this->activity_model->retrive_risk_list($risk_id,$id);
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/readmore_risk',$data);
			$this->load->view('user/footer',$data);
		}
		function workhistory($start = 0)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$id = $this->session->userdata('memberid');
			/*****header & right area **************/
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$data['image'] = $this->gallery_model->right_gallary();
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}
			$data['news'] = $this->news_model->right_side_news();
			/*************central***************/
			$path = $this->base.'admin.php/user/activity/workhistory';
			$perpage ='10';
			$data['workdata'] = $count = $this->activity_model->workers_list1($id);
			$total = count($count);
			$data['page'] = $this->pagination($path,$total,$perpage,$start);
			$data['start'] = $start;
			$data['workers_list'] = $this->activity_model->workers_list($id,$start,$perpage);
			
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/activitywrkhistory',$data);
			$this->load->view('user/right_gallary',$data);
			$this->load->view('user/footer',$data);
		}
		function readmore_work($worker_id)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$id = $this->session->userdata('memberid');
			$data['workerscount'] = $this->activity_model->workers_count($id);
			$data['memdata'] =  $this->messeges_model->memberdata($id);
			$projects = $this->activity_model->projects_view($id);
			if(!empty($projects))
			{
			foreach($projects as $projects1)
			{
			$data['project_id'] = $projects1['projectid'];
			}
			}
			$data['worker_details']  = $this->activity_model->retrive_work_details($worker_id,$id);
			$this->load->view('user/header',$data);
			$this->load->view('user/left_menu',$data);
			$this->load->view('user/readmore_work',$data);
			$this->load->view('user/footer',$data);
		}
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
				$start1=$start1+1;
			$this->pagination->initialize($config);
			return($this->pagination->create_links());
		}
/*
		function export_database()
		{
			$delimiter = ",";
			$newline = "\r\n";
			$this->load->dbutil();
			$id = $this->session->userdata('memberid');
			$query = $this->db->query("select p1.title as project_name,p2.title,p2.owner,c.crop,p3.number,p3.date,p3.id from project p1 left join plant p3 on p1.projectid = p3.projectid left join crop c on c.id = p3.crop left join plots p2 on p2.plotid = p3.plotid where p2.owner = ".$id);
			#$array['head']= "<b>Hello</b><br/>";
			$csv_out = $this->dbutil->csv_from_result($query,$delimiter,$newline); 
			#$array['data']=$csv_out;
			$str  = $csv_out;
			$name = "excell.csv";
			$path ="./files/".$name;
			//echo $path;
			if(!write_file($path,$str))
			{
				echo "U can't down load it";
			}
			else 
			{
				echo "download complete";
			}
		}
*/
}
		

?>
