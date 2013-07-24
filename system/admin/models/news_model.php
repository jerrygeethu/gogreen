<?php
class News_model extends Model {
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
   function News_model()
    {
        // Call the Model constructor
        parent::Model();
         
    }

	function insertnews($insert)
	{
	 $this->db->insert('news', $insert);
     $this->db->last_query();
     return $this->db->insert_id(); 
	}
	 function listnews($id,$limit,$perpage)
	{
		
	 	$query="select * from news ";
			if($id!="")
			{
				$query.=" where newsid=".$id."";
			}
			 $query.=" ORDER BY  newsid DESC";
			if($perpage!="")
			 {
				 
				$query.=" LIMIT ".$limit.",".$perpage.""; 
				 
			 }
			
			
			$result= $this->db->query($query);
			return $result->result();  	 
	 
	}
	
	
	function editnews($insert,$id)
	{
	 return $this->db->update('news', $insert, array('newsid' => $id));
         
	}	
	function newsdelete($id="")
		{
			$query="delete  from news where newsid=".$id." ";
			$result= $this->db->query($query);
			return $result;   
		}
}


//end of class 
?>
