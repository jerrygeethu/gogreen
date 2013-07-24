<?php
class Message_model extends Model {
//memberid 	firstname 	lastname 	email 	phone 	mobile 	address 	country
    var $to   = '';//must
	var $from   = '';//must
    var $message = '';
	var $subject = '';
	var $messagefile = '';
	var $status = '';	
	var $date = '';
  
    	

  
var $insert = array ("to"  => "",
           "message" => "",    
    "subject"   => "",    
	 "messagefile"   => "",  
	 "from"   => "",    
	 "date"   => "",    
	 "status"   => "", 
	 "type"   => "",    
    
    );      
   function Message_model()
    {
        // Call the Model constructor
        parent::Model();
         
    }

	function compose($insert)
	{	
	 $this->db->insert('message', $insert);
     $this->db->last_query();
     return $this->db->insert_id(); 
	}
	 function listmessage($email="",$limit,$perpage)
	{
	 $sql="select * from message m1,member m2 where m1.to='".$email."' and m1.type='recieve'";
	 if($perpage!="")
	 {
		 
		$sql.=" LIMIT ".$limit.",".$perpage.""; 
		 
	 }
	
	 $query=$this->db->query($sql);
     return $query->result();
	}
	 function sentmail($id="",$limit,$perpage)
	{
	 $sql="select * from message m1,member m2   where m1.fromid=".$id." and m1.type='send' and m1.to=m2.email";
	 if($perpage!="")
	 {
		 
		$sql.=" LIMIT ".$limit.",".$perpage.""; 
		 
	 }
	
	 $query=$this->db->query($sql);
     return $query->result();
	}
	 function drafts($id="",$limit,$perpage)
	{
	 $sql="select * from message m1,member m2   where m1.fromid=".$id." and m1.status='save' and m1.to=m2.email";
	 if($perpage!="")
	 {
		 
		$sql.=" LIMIT ".$limit.",".$perpage.""; 
		 
	 }
	
	 
	 $query=$this->db->query($sql);
     return $query->result();
	}
	function resend($id)
	{
	 return $this->db->delete('message', array('id' => $id));
         
	}
	function delete($id)
	{
	 return $this->db->delete('message', array('id' => $id));
         
	}	
	
	
	function editnews($insert,$id)
	{
	 return $this->db->update('news', $insert, array('newsid' => $id));
         
	}	
	
}


//end of class 
?>
