<?php
class Emailcampaign_model extends Model {
    
    var $base;
    
	//Constructor should be same as class name
	function Emailcampaign_model()
	{
		parent::Model();
		$this->base = $this->config->item('base_url');
		
	}
	
	function getEmails($groupids ='',$lastEmailid,$emailPerHr='200')
	{
      //table :emailcampaign       
      //`emailcampaignid``fullname``address``phone``mobile`
      //`email``group``status``lastmailsentdate``lastsmssentdate`		
	
   
       $sql_email = "SELECT e.`email`, e.groupid, max(e.emailid) as id ";  
         $sql_email .= " FROM email e "; 
         $sql_email .= " WHERE e.emailid > ".$lastEmailid." ";
         $sql_email .= " AND e.status = 'active' ";
         $sql_email .= " AND e.groupid in (".$groupids.") ";
         $sql_email .= " group by e.email, e.groupid "; 
         $sql_email .= " order by max(e.emailid) ";
         $sql_email .= " limit 0, ".$emailPerHr." ";
   
      echo "<br/>Id of last email sent :".$lastEmailid;
      echo "<br/>Email per hour  :".$emailPerHr;
         
      		
		//echo $sql_news;
	   $result_email = $this->db->query($sql_email);
		return $result_email->result();
	        
    }
    
    //Get last send mail id for this campign
   function getlastmailid($campaignid)
   {
      $sql = "SELECT `endemailid` FROM `emailcampaigndet` WHERE emailcampaignid = " .$campaignid ;
      $sql .= " order by `rundatetime` desc limit 0,1" ;
      $query = $this->db->query($sql);
      
      if($query->num_rows() > 0){
         $row = $query->row();
         return  $row->endemailid;
      }else{
         return 0;
      }
     
   }    
   
    function lastemailcampaigndet()
   {
      $sql = "SELECT * FROM `emailcampaigndet` ecdet,`emailcampaign` ec " ;
      $sql .= " where ec.`emailcampaignid`= ecdet.`emailcampaignid` ";            
      $sql .= " order by `rundatetime` desc limit 0,1" ;
      $query = $this->db->query($sql);
      
      if($query->num_rows() > 0){
         $row = $query->row();
         return  $row;
      }else{
         return NULL;
      }
     
   }       
   
   function updateEmails($email)
   {
      $sql_upd ="UPDATE email SET lastmailsentdate = now() WHERE email = '".$email ."'" ;
            $this->db->query($sql_upd); 
   
   }
       
   function updateCampaignDet($campaignid, $startemailid, $lastemailId )
   {
      $sql_det = "INSERT INTO emailcampaigndet(emailcampaignid,rundatetime,startemailid,endemailid) ";
      $sql_det .= " VALUES (".$campaignid.",now(),".$startemailid.",".$lastemailId.") ";
      
      $this->db->query($sql_det);
      if($this->db->affected_rows()>0)
         {
            $sql_upd ="UPDATE emailcampaign SET status = 'running' WHERE emailcampaignid = ".$campaignid ;
            $this->db->query($sql_upd); 
         } 
      
   } 
    
   //To get  campaigns to run	
	function getCurrentCampaigns()
	{
         //Select all campaigns with status equal to 'running' 
         // Or 'queue'  and date just over.
          $sql_camp = " SELECT * FROM emailcampaign e "; 
          $sql_camp.=" WHERE ( status = 'running') " ;
          $sql_camp.=" OR (status='queue' AND e.`startdatetime`<= now() ) "; 
          $result_camp = $this->db->query($sql_camp);
		   
		   return $result_camp->result();
	}
	
	
    
}
