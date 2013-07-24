<?php
class Activity_model extends Model {
//memberid 	firstname 	lastname 	email 	phone 	mobile 	address 	country
    var $firstname   = '';//must
	var $name   = '';//must
    var $lastname = '';
    var $email    = '';//must
    var $screen_name    = '';//must
    var $password    = '';//must
    var $phone    = '';
    var $mobile    = '';
    var $address    = '';//must
    var $country    = '';
    var $zip    = '';
    var $memstatus    = '';//must
    var $hash    = '';
    var $source    = '';
    	

  
var $insert = array ("name"  => "",
           "email" => "",    
    "email"   => "","screen_name"   => "",
    "password"   => "",
    "phone"   => "",
   
    "mobile"   => "",
    "address"   => "",
	"city"   => "",
    "country"   => "",
    "zip"   => "",
    "memstatus"   => "",
    "photo"   => "",
    
    );      
   function Activity_model()
    {
        // Call the Model constructor
        parent::Model();
         
    }

	
	 function listactivity($actid,$workid,$limit,$perpage)
	{
	
	 $sql="select w.alloteddate as date,pr.title as project,p.title as plot,
	 w.workerscount as workers,a.status as status,a.title as activity,a.activityid as actid,w.workerid as workid ,
	 pr.projectid as projectid,p.plotid as plotid,a.data as description,a.remarks as remarks,m.memberid as memberid,m.name as member
	 from activity a,plots p,project pr,workers w,member m  
	 where p.plotid= a.plotid and a.projectid=pr.projectid and a.activityid=w.activityid and p.owner=m.memberid"; 
	 if($actid!="")
	 {
		 $sql.=" and a.activityid=".$actid."";
		 
	 }
	 if($workid!="")
	 {
		 $sql.=" and w.workerid=".$workid."";
		 
	 }
	 if($perpage!="")
	 {
				 
		$sql.=" LIMIT ".$limit.",".$perpage.""; 
				 
	 }
	
		 
	 $result=$this->db->query($sql);
	 return($result->result());	
	}
	function insertactivity($insert)
	{
			
			$this->db->insert('activity', $insert);
            $this->db->last_query();
            return $this->db->insert_id(); 
	}
	function insertworkers($insert)
	{
			
			$this->db->insert('workers', $insert);
            $this->db->last_query();
            return $this->db->insert_id(); 
	}
	function updateactivity($insert,$id)
	{
					
		return $this->db->update('activity', $insert, array('activityid' => $id));            
             
	}
	function updateworkers($insert,$id)
	{
			
		return $this->db->update('workers', $insert, array('workerid' => $id));			
		
	}
	function insertcrop($insert)
	{
			
			$this->db->insert('crop', $insert);
            $this->db->last_query();
            return $this->db->insert_id(); 
	}
	function editcrop($insert,$id)
	{
			
					return $this->db->update('crop', $insert, array('id' => $id));			

	}
	function cropview($id,$limit,$perpage)
	{
		
		$sql="select * from crop";
		
		if($id!="")
	    {
		 $sql.=" where id=".$id."";
		 
	     }
	
		 if($perpage!="")
		 {
					 
			$sql.=" LIMIT ".$limit.",".$perpage.""; 
					 
		 }
		 
	 $result=$this->db->query($sql);
	 return($result->result());	
		
	}
		function cropdelete($id="")
		{
			$query="delete  from crop where id=".$id." ";
			$result= $this->db->query($query);
			return $result;   
		}
		
		function listcrop()
		{
			$sql="select * from crop";
			$result=$this->db->query($sql);
	        return($result->result());	  
		}
		
		function insertplant($insert)
	    {
			
			$this->db->insert('plant', $insert);
            $this->db->last_query();
            return $this->db->insert_id(); 
	    }
		
		function listplant($id="")
		{
			$sql="select p.projectid as projectid,p.id as plantid,p.plotid as plotid ,
			cp.id as cropid,pl.title as plot,cp.crop as crop ,p.number as number,
			p.date as date,p.details as details,pr.title as project
			 from plant p,plots pl,crop cp,project pr
			 where p.plotid=pl.plotid and cp.id=p.crop and pr.projectid=pl.projectid";
			
			if($id!="")
			{
				$sql.=" and p.id=".$id." ";
			}
			$result=$this->db->query($sql);
	        return($result->result());	  
		}
		function editplant($insert,$id)
		{
				
						return $this->db->update('plant', $insert, array('id' => $id));			

		}
		
		function deleteplant($id="")
		{
			$query="delete  from plant where id=".$id." ";
			$result= $this->db->query($query);
			return $result;   
		}


  function insertrisk($insert)
	{
			
			$this->db->insert('risk', $insert);
            $this->db->last_query();
            return $this->db->insert_id(); 
	}
	function editrisk($insert,$id)
	{
			
		return $this->db->update('risk', $insert, array('id' => $id));			
		
	}
	function listrisk($id,$limit,$perpage)
	{
			
		$sql="select pr.title as project,pl.title as plot,cp.crop as crop,rs.number as number,pr.projectid as projectid,pl.plotid as plotid,rs.id as riskid ,cp.id as cropid,rs.details as details,rs.image as image
		      from risk rs,crop cp,plots pl,project pr 
		      where cp.id=rs.crop and pl.plotid=rs.plot and rs.project=pr.projectid";
		
		if($id!="")
	    {
		 $sql.=" and rs.id=".$id."";
		 
	     }

		 if($perpage!="")
		 {
					 
			$sql.=" LIMIT ".$limit.",".$perpage.""; 
					 
		 }
		
		 $result=$this->db->query($sql);
	     return($result->result());	   		
			
	}
	function deleterisk($id="")
	{
			$query="delete  from risk where id=".$id." ";
			$result= $this->db->query($query);
			return $result;   
	}
	function search($date,$project,$plot,$limit,$perpage)
	{
			
			 $query="select distinct a.createdate as date,pr.title as project,p.title as plot,
			 w.workerscount as workers,a.status as status,a.title as activity,a.activityid as actid,w.workerid as workid 
			 from activity a,plots p,project pr,workers w  
			 where p.plotid= a.plotid and a.projectid=pr.projectid and a.activityid=w.activityid";
			if(!empty($date))
			{
				 $query.=" and a.createdate='".$date."'";	
				 if(!empty($project))
				 {
					 $query.=" and a.projectid='".$project."'";	
					 if(!empty($plot))
					 {
						  $query.=" and a.plotid='".$plot."'";	
					 }				 
				 }
				 else
				 {
					 
					 if(!empty($plot))
					 {
						  $query.=" and a.plotid='".$plot."'";	
					 }	
					 
				 }							
			}
			else
			{				
				if(!empty($project))
				 {
					 $query.=" and  a.projectid='".$project."'";	
					 if(!empty($plot))
					 {
						  $query.=" and a.plotid='".$plot."'";	
					 }				 
				 }
				 else
				 {
					 
					 if(!empty($plot))
					 {
						  $query.=" and a.plotid='".$plot."'";	
					 }	
					 
				 }	
				// echo $query;	
				
				
				
			}
			
			if($perpage!="")
			{						 
				$query.=" LIMIT ".$limit.",".$perpage.""; 					 
			}
			 
			//echo $query;
			$result= $this->db->query($query);
			
			
			
			 return($result->result());	
			
			
	}
	   function activitydelete($id="")
		{
			$query="delete  from activity where activityid=".$id." ";
			$result= $this->db->query($query);
			return $result;   
		}
		function workerdelete($id="")
		{
			$query="delete  from workers where workerid=".$id." ";
			$result= $this->db->query($query);
			return $result;   
		}

}


//end of class 
?>
