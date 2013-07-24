<?php
class Gallery_model extends Model {
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
   function Gallery_model()
    {
        // Call the Model constructor
        parent::Model();
         
    }

	function addphoto($insert)
	{
	 $this->db->insert('gallery', $insert);
     $this->db->last_query();
     return $this->db->insert_id(); 
	}
	function addvideos($insert)
	{
	 $this->db->insert('videos', $insert);
     $this->db->last_query();
     return $this->db->insert_id(); 
	}
	 function listphoto($id="",$limit,$perpage)
	{
	 
	     $query="select * from gallery ";
			if($id!="")
			{
				$query.=" where id=".$id."";
			}
			 $query.=" ORDER BY  id ASC";
			if($perpage!="")
			 {
				 
				$query.=" LIMIT ".$limit.",".$perpage.""; 
				 
			 } 
     $result= $this->db->query($query); 
	 return $result->result();  	 
	}
	
	 function listvideos($id="",$limit,$perpage)
	{
	  $query="select * from videos ";
			if($id!="")
			{
				$query.=" where id=".$id."";
			}
			 $query.=" ORDER BY  id ASC ";
			if($perpage!="")
			 {
				 
				$query.=" LIMIT ".$limit.",".$perpage.""; 
				 
			 }  
     $result= $this->db->query($query);
	 return $result->result();
	}
	
	
	function deletephoto($id)
	{
		
		return $this->db->delete('gallery', array('id' => $id));
		 
	}
	function deletevideo($id)
	{
		
		return $this->db->delete('videos', array('id' => $id));
		 
	}
	function editnews($insert,$id)
	{
	 return $this->db->update('news', $insert, array('newsid' => $id));
         
	}	
	
}


//end of class 
?>
