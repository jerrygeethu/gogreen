<?php 
	class Activity_model extends model
	{
		function Activity_model()
		{
			parent::model();
		}
		/*************************Crop Part*************************/

		function crop_details($start,$perpage)
		{
			$query = $this->db->get('crop',$perpage,$start);
			return($query->result_array());
		}
		function count_crop_details1()
		{
			$query = $this->db->get('crop');
			return($query->result_array());
		}
		function retrive_crop_details($crop_id1)
		{
			$q= $this->db->get_where('crop',array('id'=>$crop_id1));
			return($q->result_array());
		}

		/*****************************Risk Part**************************/
		function  count_risk($id)
		{
			#$query =  "select r.*,p.title,p.owner from risk r left join plots p on r.plot = p.title where p.owner = $id";
			$query = "select p1.title as project_name,p2.title,p2.owner,c.crop,r.number,r.details,r.id,r.image from project p1 left join risk r on p1.projectid = r.project left join plots p2 on p2.plotid = r.plot left join crop c on c.id = r.crop where p2.owner = $id";
			$result = $this->db->query($query );
			return($result->result_array());
		}
		function risk_list($id,$start1,$perpage1)
		{
			$query = "select p1.title as project_name,p2.title,p2.owner,c.crop,r.number,r.details,r.id,r.image from project p1 left join risk r on p1.projectid = r.project left join plots p2 on p2.plotid = r.plot left join crop c on c.id = r.crop where p2.owner = $id limit $start1,$perpage1";
			//$query = $this->db->get('risk',$perpage1,$start1);
			$result = $this->db->query($query );
			return($result->result_array());
		}
		function retrive_risk_list($id,$id1)
		{
			//$query = "select p1.title as project_name,p2.title,p2.owner,c.crop,r.number,r.details,r.id,r.image from project p1 left join risk r on p1.projectid = r.project left join plots p2 on p2.plotid = r.plot left join crop c on c.id = r.crop where p2.owner = $id";
			$query = "select distinct r.*,p.title,p1.owner,w.workerscount from risk r left join project p on p.projectid = r.project left join plots as p1 on p1.plotid = r.plot left join workers w on p1.plotid = w.plotid where p1.owner = $id1 and r.id=$id";
			//$query = "select r.image,r.crop,r.number,p.title,r.details from risk  r join project p on r.project=p.projectid";
			$result = $this->db->query($query );
			return($result->row());
		} 
		
		/**************************WorkHistory Patrt*********************/
		
		function  workers_count($id)
		{
			$query = "select sum(workerscount) as wc from workers where plotid  IN(select plotid from plots where owner = $id)";
			$result = $this->db->query($query);
			return $result->result();
		}
		function workers_list1($id1)
		{
			$query = "select p1.title as project_name,p2.title,a.title as activity,w.workerscount,w.alloteddate,w.workerid from project p1 left join plots p2 on p1.projectid = p2.projectid left join workers w on p2.plotid = w.plotid left join activity a on a.activityid = w. activityid where p2.owner = $id1";
			#$query = "select p.owner,w.alloteddate,w.workerscount,a.title,a.data,a.remarks from workers w left join activity a on w.activityid = a.activityid left join plots p on p.plotid = w.plotid where p.owner = $id1";
			$result = $this->db->query($query);
			return $result->result_array();
		}

		function workers_list($id1,$start,$perpage)
		{
			$query = "select p1.title as project_name,p2.title,a.title as activity,w.workerscount,w.alloteddate,w.workerid from project p1 left join plots p2 on p1.projectid = p2.projectid left join workers w on p2.plotid = w.plotid left join activity a on a.activityid = w. activityid where p2.owner = $id1 limit $start,$perpage";
			$result = $this->db->query($query);
			return $result->result_array();
		}
		function retrive_work_details($worker_id,$id1)
		{
			$query = "select p.owner,p.mainphoto,w.alloteddate,w.workerscount,a.title,a.data,a.remarks from workers w left join activity a on w.activityid = a.activityid left join plots p on p.plotid = w.plotid where p.owner = $id1 and w.workerid = $worker_id ";
			$result = $this->db->query($query);
			return $result->result_array();
		}
		
		/************************Plant History Part***********************/
		function plant_history1($id)
		{
			$query = "select p1.title as project_name,p2.title,p2.owner,c.crop,p3.number,p3.date,p3.id from project p1 left join plant p3 on p1.projectid = p3.projectid left join crop c on c.id = p3.crop left join plots p2 on p2.plotid = p3.plotid where p2.owner = $id";
			$result = $this->db->query($query);
			return($result->result_array());
		}
			function plant_history($id,$start,$perpage)
		{
			$query = "select p1.title as project_name,p2.title,p2.owner,c.crop,p3.number,p3.date,p3.id from project p1 left join plant p3 on p1.projectid = p3.projectid left join crop c on c.id = p3.crop left join plots p2 on p2.plotid = p3.plotid where p2.owner = $id limit $start,$perpage";
			$result = $this->db->query($query);
			return($result->result_array());
		}
		function retrive_planthistory($plant_id,$id)
		{
			$query="select p1.*,p2.title,p3.status from plant p1 left join plots p2 on p1.plotid = p2.plotid left join project p3 on p3.projectid = p1.projectid where p2.owner = $id and p1.id = $plant_id";
			$result = $this->db->query($query);
			return($result->result_array());
		}
		
	/*****************************Projects*************************/	
		
		function projects_view($id)
		{
			$query = "select distinct p2.projectid,p1.owner,p1.projectid,p2.title as project_name from plots as p1 left join project as p2 on p1.projectid = p2.projectid  where p1.owner = $id";
			$result = $this->db->query($query);
			return $result->result_array();
		}
		function pic_projectid($id)
		{
			$query = "select projectid from plots where owner = $id limit 1";
			$result = $this->db->query($query);
			return $result->result_array();
		}
		function projects_image_view($id)
		{
			$query = "select distinct mainphoto from plots where  projectid = $id ";
			$result = $this->db->query($query);
			return $result->result_array();
		}
		function plot_view($projectid)
		{
			$query = "select * from plots where projectid = $projectid";
			$result = $this->db->query($query);
			return $result->result_array();	
		}
	}
?>
