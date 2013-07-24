<?php
class News_model extends Model {
    
    var $base;
    
	//Constructor should be same as class name
	function News_model()
	{
		parent::Model();
		$this->base = $this->config->item('base_url');
		
	}
	
	function getNews($value ='',$newsid='')
	{
		$sql_news = "SELECT newsid, title, news,  posteddate, category, status FROM news  ";
		if($newsid!='') 
		{	
		$sql_news .= " WHERE newsid = ". $newsid;
		
		$query = "UPDATE gogreen.news SET status = '1' WHERE news.newsid =". $newsid; 
		$this->db->query($query);
		}
		
		if($value!='') { 
			$sql_news .= " ORDER BY posteddate DESC LIMIT ".$value;
		}
		else {
			//DESC
			$sql_news .= " ORDER BY posteddate DESC";
		}
			//echo $sql_news;
	    $result_news = $this->db->query($sql_news);
		return $result_news->result();
	        
    }
	
	function addnews($type,$topic,$detail)
	{
		$data = array(
               'topic' => $topic ,
               'detail' => $detail ,
               'category' => $type,
			   
        );
		$this->db->insert('news', $data);
	}
	
	function getnewstype()
	{
		//echo $query_cartype = "SELECT distinct type FROM vehicle WHERE type";
		 $query_newstype = "SHOW COLUMNS FROM news LIKE 'category'";
// 		$result_cartype = $this->db->query($query_cartype);
// 	    	$total_rows = $result_cartype->num_rows();
// 	    	return $result_cartype->result();
		
// 		$row = $this->db->query($query_cartype)->row()->type;
// 		$regex = "/'(.*?)'/";
// 		preg_match_all( $regex , $row, $enum_array );
// 		$enum_fields = $enum_array[1];
// 		return( $enum_fields );
		
// 		$query_enum = "SHOW COLUMNS FROM $table LIKE '$column' ";
// 		
		$resultenum = $this->db->query($query_newstype);
		if($resultenum->num_rows > 0){
		 $rowenum=$resultenum->row()->Type;
        	$options=explode("','",preg_replace("/(enum|set)\('(.+?)'\)/","\\2",$rowenum));
    		}
		return $options;

	}
    
}
