<?php
class Member_model extends Model {
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
    	

   var $member = array ("firstname"  => "","lastname" => "",
    
    "email"   => "","screen_name"   => "",
    "email"   => "",
    "password"   => "",
    "phone"   => "",
    "mobile"   => "",
    "address"   => "",
    "country"   => "",
    "zip"   => "",
    "memstatus"   => "",
    "hash"   =>"",
    "source"   =>""
    
    );      
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
   function Member_model()
    {
        // Call the Model constructor
        parent::Model();
         
    }

	function projectname($pid,$type)
	{
			if($type=="project")
			{
				$query = "select  title	from project where projectid='".$pid."' ";				
			}else
			{
				$query = "select  title	from plots where plotid='".$pid."' ";
			}
      	$result= $this->db->query($query);
				$row=$result->row();    
        return $row->title;	
	}


   //get member details from memberid
	function get_member_details($member_id){

		$query = $this->db->get_where('member', array('memberid 	' => $member_id), 1, 0);
      return $query->result() ;
   }
   
   //get member details from member field data
   function check_member_data($fieldname,$value){

		$query = $this->db->get_where('member', array($fieldname => $value), 1, 0);
      return $query->result() ;
   }



    function admin_signin($username,$password)
    {
		
				
       $query = $this->db->get_where('user', array('username' => $username,'password' => $password ,'status'=>'active'), 1);
       if ($query->num_rows() > 0)
	   {
		   $row=$query->row();
		   $this->session->set_userdata('userid',$row->userid);
		   $this->session->set_userdata('fullname',$row->fullname);
    
          return TRUE;
		  
	  }
	  
	  else return FALSE;
    }

 	 function mem_signin($username,$password)
    {
		
				
       $query = $this->db->get_where('member', array('email' => $username,'password' => $password ), 1);
       if ($query->num_rows() > 0)
	   {
		   $row=$query->row();
		   $this->session->set_userdata('memberid',$row->memberid);
		   $this->session->set_userdata('fullname',$row->name);
		   $this->session->set_userdata('status',$row->memstatus);
		   $this->session->set_userdata('email',$row->email);
		   $this->session->set_userdata('memphoto',$row->photo);
		  
    
          return TRUE;
		  
	  }
	  
	  else return FALSE;
    }


	function insert_entry($data){

      $this->member['firstname'] = isset($data['firstname'])?$data['firstname']:$this->firstname;
      $this->member['lastname'] = isset($data['lastname'])?$data['lastname']:$this->lastname;
      $this->member['email'] = isset($data['email'])?$data['email']:$this->email;      
      $this->member['screen_name'] = isset($data['screen_name'])?$data['screen_name']:$this->screen_name;  
      $this->member['password'] = isset($data['password'])?$data['password']:$this->password;          
      $this->member['phone'] = isset($data['phone'])?$data['phone']:$this->phone;
      $this->member['mobile'] =isset($data['mobile'])?$data['mobile']:$this->mobile;
      $this->member['address'] = isset($data['address'])?$data['address']:$this->address;
      $this->member['country'] = isset($data['country'])?$data['country']:$this->country;
      $this->member['zip'] = isset($data['zip'])?$data['zip']:$this->zip;
      $this->member['memstatus'] = isset($data['memstatus'])?$data['memstatus']:$this->memstatus;
      $this->member['hash'] = isset($data['hash'])?$data['hash']:$this->hash;
      $this->member['source'] = isset($data['source'])?$data['source']:$this->source;
      $this->db->insert('member', $this->member);
      $this->db->last_query();
      return $this->db->insert_id();   
	}

	function update_entry(){
        $this->firstname   = $value['firstname']; // 
        $this->lastname = $value['lastname'];
        $this->email    = $value['email'];
        $this->phone    = $value['phone'];
        $this->mobile    = $value['mobile'];
        $this->address    = $value['address'];
        $this->country    = $value['country'];

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    
    
    function checkEmail($email)
    {
       $query = $this->db->get_where('member', array('email' => $email), 1);
       if ($query->num_rows() > 0)
          return TRUE;
       else
          return FALSE;
    }
    
    function verifyEmail($hash)
    {
       $query = $this->db->get_where('member', array('hash' => $hash), 1);
       
       if ($query->num_rows() > 0)
          {
             $data = array(
              'memstatus'=>2,
              'hash' =>''
             );

            $this->db->where('hash', $hash);
            $this->db->update('member', $data);
         
            return TRUE;       
          
           }
       else
          {
             return FALSE;
          }      
          
     }
   
    function update($insert)
	{
		
		    $this->db->where('hash', $hash);
            $this->db->update('member', $data);
		
	}
	
	function getNumUsers($id)
	{
		$this->db->where('memberid',$id);
		return $this->db->count_all('gallery');
	}
	
	function getusers($row,$no,$id)
	{
		
		$this->db->where('memberid',$id);
		$query=$this->db->get('gallery',$no,$row);
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
	}
	
	function getNummembers($id)
	{
		$query="select a.name,a.thumb,a.photo,a.plotid,b.owner from gallery a left join plots b on a.plotid=b.plotid where b.owner='".$id."'";
		$result= $this->db->query($query);
		return	$result->num_rows();
		
	}
	
	function getmember($row,$no,$id)
	{
		$query="select a.name,a.thumb,a.photo,a.plotid,b.owner from gallery a left join plots b on a.plotid=b.plotid where b.owner=".$id." limit ".$row.",".$no." ";
		$result= $this->db->query($query);
		
		if($result->num_rows()>0)
		{
			return $result->result_array();
		}
	}
	function getid()
	{
		
		
		$query="select * from member where memstatus='active' or memstatus='admin'";
		$result=$this->db->query($query);
		return($result);	
	}
	
	function actdetail($id)
	{
		
		
		$query="select * from activity where activityid='".$id."'";
		$result=$this->db->query($query);
		return($result);	
	}
	

	function updatemember($insert,$id)
	{
		
		
		if($insert['memstatus']=="")
		{
			$insert['memstatus']="inactive";
			
		}
		
		$query="update member set name='".$insert['name']."',email='".$insert['email']."',phone='".$insert['phone']."',mobile='".$insert['mobile']."',address='".$insert['address']."',city='".$insert['city']."',country='".$insert['country']."',zip='".$insert['zip']."',photo='".$insert['photo']."',memstatus='".$insert['memstatus']."' where memberid=".$id."" ;
		
		

		$result=$this->db->query($query);
		return($result);		
	}
    
	function getmessage($id="",$memid="",$from="",$type="",$limit="",$per_page="")
	{
		
		$query="select mes.subject as subject,mes.body as body,mes.date as date,mem.email as sender,mes.id as id,mes.to as reciever from message mes,member  mem where mes.from=mem.memberid";
	
		$query.=" and status='send' ";
		if($id!="")
		{
			$query.=" and mes.id=".$id."";
			
		}
		if($memid!="")
		{
			$query.=" and mes.to='".$memid."'";
		}
		if($from!="")
		{
			$query.=" and mes.from='".$from."'";
		}
		if($type!="")
		{
			$query.=" and mes.type='".$type."'";
		}
		if($limit!="")
		{
			$query.=" LIMIT ".$limit.",".$per_page."";
		}
		
		//echo $query;
		$result=$this->db->query($query);
		return($result);
		
	}
	function messagedelete($id,$type="")
	{
		
		
		$query="update message set status='trash' where id=".$id." and type='".$type."'";
		$result=$this->db->query($query);
				
				$data['result']=$result;
				return $data;
		
	}
		function adminlist()
		{
				$query ="select memberid,name from member where memstatus='active'";
				$result=$this->db->query($query);
				$data['total_rows']=$result->num_rows();
				$data['result']=$result->result();
				return $data;
		}
		function insertworker($insert)
		{
				 $this->db->insert('workers', $insert);
      $this->db->last_query();
      return $this->db->insert_id(); 
		}
		function insertproject($insert)
		{
			 $this->db->insert('project', $insert);
      $this->db->last_query();
      return $this->db->insert_id(); 
		}
		function projectlist($d)
		{
			
			$query="select 
							projectid,title,description
					from
							project					 
							order by projectid desc ";
							
						if($d['count']==0){
							$query .= " LIMIT  ".$d['start']  ." , ". $d['limit'] ."";
							}
							
		$result= $this->db->query($query);
		$data['total_rows']=$result->num_rows();			
		$data['result']=$result->result();    
		return $data;
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
			$query="select * from ".$table."	order by posteddate desc ";
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
}
//end of class 
?>
