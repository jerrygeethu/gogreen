<?php
class Gallery_model extends model
{
	function Gallery_model()
	{
		parent::model();
	}
	function retrive_image($id1,$start1,$perpage1)
	{
		$query = "select id,name,photo,thumb,memberid,plotid from gallery where memberid = 0  or memberid = $id1 limit $start1,$perpage1";
		$result =$this->db->query($query);
		return $result->result_array();
	}
	function count_image($id1)
	{
		$query = "select id,name,photo,thumb,memberid,plotid from gallery where memberid = 0  or memberid = $id1";
		$result =$this->db->query($query);
		return $result->result_array();
	}
	function count_video($id1)
	{
		$query = "select * from videos where memberid = 0  or memberid = $id1";
		$result =$this->db->query($query);
		return $result->result_array();
	}
	function retrive_video($id1,$start1,$perpage1)
	{
		$query = "select * from videos where memberid = 0  or memberid = $id1 limit $start1,$perpage1";
		$result =$this->db->query($query);
		return $result->result_array();
	}
	function right_gallary()
	{
		$query = "select thumb from gallery order by id desc limit 4";
		$result =  $this->db->query($query);
		return $result->result_array();		
	}
}
?>
