<?php
class Messeges_model extends model
{
	function Messeges_model()
	{
		parent::model();
	}
	
	function memberdata($id)
	{
	$query = $this->db->get_where('member', array('memberid' => $id ), 1);
	return($query->result_array());
    }
   
    function count_email($id1="",$status="")
    {
		$query = $this->db->get_where('message',array('fromid'=>$id1,'status'=>$status));
		return($query->result_array());
	}
	
	function get_email($id1,$s,$perpage,$limit)	
	{

			$this->db->order_by("id", "desc");
			$query = $this->db->get_where('message',array('fromid'=>$id1,'status'=>$s,'type'=>'recieve'),$limit,$perpage);
			return($query->result_array());
	}
	function get_draft_email($id1,$s,$perpage,$limit)	
	{

			$this->db->order_by("id", "desc");
			$query = $this->db->get_where('message',array('fromid'=>$id1,'status'=>$s,'type'=>'save'),$limit,$perpage);
			return($query->result_array());
	}
	function count_inbox_email($email1,$status)
    {
		$query = $this->db->get_where('message',array('to'=>$email1,'type'=>$status));
		return($query->result_array());
	}
	
	function get_inbox_mail($email1,$s,$perpage,$limit)
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get_where('message',array('to'=>$email1,'type'=>$s),$limit,$perpage);
		return($query->result_array());
	}
	
	function del($str)
	{
		$query = "delete from message where id IN($str)";
		$this->db->query($query);
	}
	
	function get_message($id)
	{
		$query =$this->db->get_where('message',array('id'=>$id));
		return($query->result_array());
	}
	
	function update($id1,$arr1)
	{
		$this->db->where('id',$id1);
		$this->db->update('message',$arr1);
	}
	
	
	function insert($filedata1)
	{
		
		$this->db->insert('message',$filedata1);
		
	}
		
}
?>
