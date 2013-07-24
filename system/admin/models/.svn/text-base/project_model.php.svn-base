<?php
class Project_model extends Model {
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
   function Project_model()
    {
        // Call the Model constructor
        parent::Model();
         
    }

	function insertproject($insert)
	{
	 $this->db->insert('project', $insert);
     $this->db->last_query();
     return $this->db->insert_id(); 
	}
	function projectlist($id="",$limit,$perpage)
	{
			
			$query="select 
							*
					from
							project					 
							order by projectid desc ";
							
							if($id!="")
			{
				$query.=" where projectid=".$id."";
			}
			if($perpage!="")
			 {
				 
				$query.=" LIMIT ".$limit.",".$perpage.""; 
				 
			 }
			
							
							
		$result= $this->db->query($query);
		$data['total_rows']=$result->num_rows();			
		$data['result']=$result->result();    
		return $data;
	}
	function projectlist1($id)
	{
			
		$query="select distinct
							pr.title,pr.projectid as projectid
					from
							project pr,plots pl where pl.owner=".$id." and pl.projectid=pr.projectid";				 
		$result= $this->db->query($query);								
		$result=$result->result();    
		return $result;
	}
	function listproject($d)
	{
			
			$da=strtotime("now");
			$dt=date("Y-m-d",$da);
			$memberid=$this->session->userdata('memberid');
			$query="select 
							pt.projectid as projectid,pt.title as title,pt.plotid as plotid,pt.createdate as plotdate,ac.title as activitytitle,ac.activityid as activityid,ws.workerscount as count,pr.title as project
					from
							project	pr,plots pt,activity ac,workers ws
							
					where owner=".$memberid." and pt.plotid=ac.typeid and pt.plotid=ws.plotid and pt.projectid=pr.projectid and ws.alloteddate='".$dt."'" ;				 
					
							
							
						if($d['count']==0){
							$query .= " LIMIT  ".$d['start']  ." , ". $d['limit'] ."";
							}
					
		$result= $this->db->query($query);
		$data['total_rows']=$result->num_rows();			
		$data['result']=$result->result();    
		return $data;
	}
	function viewproject($id)
	{
		$query="select * from project where projectid=".$id."";
		$result=$this->db->query($query);
		$row=$result->row();
		return $row;	
		
	}
	function listprojectrow($pid)
	{
		$query ="select p.*,m.name from project p,member m where p.projectid='".$pid."'";
		$result= $this->db->query($query);
		$row=$result->row();    
        return $row;		  
	}
		

	function getprojectrow($pid)
	{
		$query ="select p.*,m.name from project p,member m where p.projectid='".$pid."' and p.admin=m.memberid";
		$result= $this->db->query($query);
		$row=$result->row();    
    return $row;		  
	}
		function plotlist($d)
		{
			$query="select 
							plotid,projectid,title,description
					from
							plots		
						where
								projectid='".$d['hidprojectid']."'
							order by plotid desc ";
						if($d['count']==0){
							$query .= " LIMIT  ".$d['start']  ." , ". $d['limit'] ."";
							}
							
		$result= $this->db->query($query);
		$data['total_rows']=$result->num_rows();			
		$data['result']=$result->result();    
		return $data;
		}
		function plotrow($plotid,$projid)
		{
				$query="select p.*,m.name,(select title  from project where projectid='".$projid."') as projecttitle from plots p,member m where p.plotid='".$plotid."' and p.owner=m.memberid   ";
				$result= $this->db->query($query);
				$row=$result->row();    
				return $row;				
		}
		function insertplot($insert)
		{
			
			$this->db->insert('plots', $insert);
            $this->db->last_query();
            return $this->db->insert_id(); 
		}
		
		function updateplot($insert,$id)
		{
			$this->db->where('plotid', $id);
            return $this->db->update('plots', $insert); 			              
		}
		
		function activitylist($d)
		{
			$query="select 
							activityid,title,data
					from
							activity		
						where
								typeid='".$d['hidtypeid']."'
								and
								type='".$d['hidtype']."'
							order by activityid desc ";
						if($d['count']==0){
							$query .= " LIMIT  ".$d['start']  ." , ". $d['limit'] ."";
							}
							
		$result= $this->db->query($query);
		$data['total_rows']=$result->num_rows();			
		$data['result']=$result->result();    
		return $data;
		}
		
		function activityrow($id)
		{
			$query="select act.*,m.name from activity act,member m where act.activityid='".$id."' and act.enteredby=m.memberid";
			$result= $this->db->query($query);		
			$row=$result->row();    
			return $row;
		}
		function insertactivity($insert)
		{
			  $this->db->insert('activity', $insert);
			  $this->db->last_query();
			  return $this->db->insert_id(); 
		}
		function projectactivities($d)
		{
				$query="select act.*,m.name from activity act,member m where act.type='project' and act.typeid='".$d['hidprojectid']."' and act.enteredby=m.memberid order by activityid desc";
							if($d['count']==0){
							$query .= " LIMIT  ".$d['start']  ." , ". $d['limit'] ."";
							}
							
			$result= $this->db->query($query);
			$data['total_rows']=$result->num_rows();			
			$data['result']=$result->result();    
			return $data;
		}
		function plotactivities($d)
		{
				$query="select act.*,m.name from activity act,member m where act.type='plot' and act.typeid='".$d['hidprojectid']."' and act.enteredby=m.memberid order by activityid desc";
							if($d['count']==0){
							$query .= " LIMIT  ".$d['start']  ." , ". $d['limit'] ."";
							}
							
			$result= $this->db->query($query);
			$data['total_rows']=$result->num_rows();			
			$data['result']=$result->result();    
			return $data;
		}
		function updatetable($data,$where,$table)
		{
			$this->db->where($where); 
			return $this->db->update($table,$data); 
		}
		function newslist($table,$id)
		{
			$query="select * from ".$table."	order by posted desc ";
						if($id['count']==0){
							$query .= " LIMIT  ".$id['start']  ." , ". $id['limit'] ."";
							}
							
		$result= $this->db->query($query);
		$data['totalrows']=$result->num_rows();			
		$data['result']=$result->result();    
		return $data;
		}
		
		
		function selectresult($table,$where="",$order="")
		{
			
			if(! empty($where)){ 
					$this->db->where($where);
			}
			if(! empty($order)){ 	foreach($order as $key=>$value){ $this->db->order_by( $key, $value );	}}
			$query = $this->db->get($table);
			$data['result']=$query->result();
			
			$data['totalrows']=$query->num_rows();

			return $data;	
		}
	
	function selectrow($table,$where)
	{
		
		$query="
						select 
							newsid, topic, detail, DATE_FORMAT(newsdate,'%d/%m/%Y') as newsdate, newsdate as posteddate,	photo, status 
						from 
							".$table."	
						where 
							newsid=".$where;
		$result= $this->db->query($query);
		$data['result']=$result->row();
		return $data;	
	}	
	
	function selectpwd($table,$id)
	{
		$query="
						select 
							password 
						from 
							".$table." 
						where 
							memberid=".$id."
						";
		$result= $this->db->query($query);
		$data['result']=$result->row();
		return $data;	
	}
	
	function viewactivity($id="")
	{
		$query="select p.title as plotname,a.title as activity,a.data as data from activity a,plots p where p.plotid=a.typeid and a.type='plot'";
	    if($id!="")
		{
		$query.="and p.owner=".$id." ";
	    }
		$query.="order by  a.createdate asc ";
	
		$result= $this->db->query($query);
		$data['totalrows']=$result->num_rows();			
		$data['result']=$result->result(); 
	   return($data);
		
	}
	function workerslist($id="")
		{
			
			    $dt=date("Y-m-d",strtotime ("now"));
				
				$query ="select p.title as title,w.workerscount as workes,p.owner as owner from workers w,plots p where p.plotid=w.plotid and w.alloteddate='".$dt."'";
				if($id!="")
				{
					$query.=" and p.owner=".$id."";
				}
			
				
				$result=$this->db->query($query);
				
				$data['total_rows']=$result->num_rows();
				$data['result']=$result->result();
				return $data;
		}
	function management($id="")
	{
		$query="select * from plots ";
	    if($id!="")
		{
		$query.="where owner=".$id." ";
	    }
		
	
		$result= $this->db->query($query);
		$data['totalrows']=$result->num_rows();			
		$data['result']=$result->result(); 
	   return($data);
		
	}
	function getwkcount($date,$pid)
	{
		$query="select * from workers where plotid='".$pid."'  and alloteddate='".$date."'";
		$result= $this->db->query($query);
		return $result->row();    			
		}
		function deleteworker($data)
		{
			$query="delete from workers where plotid='".$data['plotid']."' and alloteddate='".$data['alloteddate']."'";
			$result= $this->db->query($query);
			return $result;
			}
	function allactivities($d)
	{
			$query="select a.activityid as activityid,a.type as type,a.typeid as typeid,a.title as title,a.data as data,p.projectid as projectid from activity a,plots p  where a.typeid=p.plotid order by a.activityid desc";
			if($d['count']==0){
							$query .= " LIMIT  ".$d['start']  ." , ". $d['limit'] ."";
							}
			$result= $this->db->query($query);
			$data['total_rows']=$result->num_rows();			
			$data['result']=$result->result();    
			return $data;
		}
		
		function actdet($id)
		{
			$query="select act.*,m.name from activity act,member m where act.enteredby=m.memberid and act.activityid='".$id."'";
			$result= $this->db->query($query);
			return $result->row();    			 
		}
		
		
		function gettypename($id)
		{
			$query="select title from project where projectid='".$id."'";
			$result= $this->db->query($query);
			return $result->row();   
		}
		
		function getproject()
		{
		    $query="select projectid,title from project";
			$result= $this->db->query($query);
			return $result->result();  
		}
		function deleteproject($id)
		{
		    
			$query="delete  from member where memberid=".$id." ";
			$result= $this->db->query($query);
			return $result;   
		}
		function getplot($id="")
		{
		    $query="select * from plots";
			if($id!="")
			{
				$query.=" where projectid=".$id."";
				
			}			
			$result= $this->db->query($query);
			return $result->result();  
		}
		function getcrop($id="")
		{
		    $query="select c.id as id,c.crop as crop from plant p,crop c";
			if($id!="")
			{
				$query.=" where p.plotid=".$id." and p.crop= c.id";
				
			}//echo $query;	
			
			$result= $this->db->query($query);
			return $result->result();  
		}
		function getowner($id="")
		{
		    $query="select p.owner as ownerid ,m.name as name from plots p,member m";
			if($id!="")
			{
				$query.=" where p.plotid=".$id." and p.owner= m.memberid";
				
			}	
			
			$result= $this->db->query($query);
			return $result->result();  
		}
		function getno($id="")
		{
		    $query="select * from plant";
			if($id!="")
			{
				$query.=" where crop=".$id."";
				
			}			
			$result= $this->db->query($query);
			return $result->result();  
		}
		function getmember($id)
		{
		    $query="select owner from plots where plotid=".$id."";
			$result= $this->db->query($query);
			return $result->result();  
		}
		function listplot($id="",$limit,$perpage)
		{
			$query="select p.projectid as projectid,m.memberid as memberid,p.plotid as plotid,pr.title as project,m.name as member,p.title as plot,p.extent as plotextent,p.location as plotlocation,p.status as plotstatus,p.description as plotdescription,p.remarks as plotremarks,p.mainphoto as mainphoto,p.subphoto as subphoto from plots p,project pr,member as m where p.projectid=pr.projectid and m.memberid=p.owner";
			if($id!="")
			{
			   $query.=" and p.plotid=".$id."";	
			}
			if($perpage!="")
			 {
				 
				$query.=" LIMIT ".$limit.",".$perpage.""; 
				 
			 }
			$result= $this->db->query($query);
			return $result->result();  
		}
		function plotdelete($id="")
		{
			$query="delete  from plots where plotid =".$id." ";
			$result= $this->db->query($query);
			return $result;   
		}
}


//end of class 
?>
