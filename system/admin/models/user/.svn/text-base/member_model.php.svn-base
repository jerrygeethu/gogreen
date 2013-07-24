<?php
class Member_model extends model
{
	function Member_model()
	{
		parent::model();
	}
	function retrive_member_data($mem_id)
	{
		$query = $this->db->get_where('member', array('memberid' =>$mem_id));
		return($query->result_array());
	}
	function edit_user($arr,$id)
	{
		$this->db->where('memberid',$id);
		$this->db->update('member',$arr);
	}
	function edit_pword($id,$password)
	{
		$query =  "update member set password = '$password'  where memberid = '$id'";
		$this->db->query($query);
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
			$result=1;
			//return TRUE;
		}
		else 
		{
			$result=2;
			//return FALSE;
		}
		return $result;
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
}
?>
