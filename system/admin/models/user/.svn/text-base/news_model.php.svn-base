<?php
	class News_model extends model
	{
		function News_model()
		{
			parent::model();
		}
		function news_list($start,$perpage)
		{
			$query = "SELECT `newsid`, `title`, `news`, `author`, `posteddate`, `photo`, `category`, `status`, `newsdate`, `project`, `owner`, `remarks`, DATE_FORMAT( `newsdate` , '%W' ) AS day FROM `news`  ORDER BY `newsid` DESC limit $start,$perpage";
			$res = $this->db->query($query);
			return($res->result_array());
		}
		function news_list1()
		{
			$query = $this->db->get('news');
			return($query->result());
		}
		function retrive_news($id)
		{
			$this->db->select('title,news,newsdate,photo');
			$result = $this->db->get_where('news',array('newsid'=>$id));
			return ($result->result());
		}
		function right_side_news()
		{
			$this->db->select('newsid,title,news,photo,newsdate');
			$this->db->order_by("newsid", "desc"); 
			$query = $this->db->get('news',2,0);
			return ($query->result_array());
		}
	}
?>
