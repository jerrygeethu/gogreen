<?php

class Newsletter_new extends Controller {
   
   var $base;
   var $css;
   var $mailerrormsg;
   var $lastemailsentId = 0;
   var $campaign;
   
	function Newsletter_new()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
      $this->css = "style.css";
		$this->load->helper('parameter');
		$this->load->database();
	}
	
	function index($value='')
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   //$this->load->view($value,$data);
		
	}
	function email_campaign()
	{
	   echo '<html><body><form action="'.$this->base.'index.php/newsletter_new/call_email_campaign" method="post">
            <input type="password" name="pwd" id="pwd" value="">	         
	         <input type="submit" value="Send Now">
	         <br/>';
       $this->load->model('emailcampaign_model');   	 
	   $det = $this->emailcampaign_model->lastemailcampaigndet();
	   if($det!= NULL)
	      {
	         echo '<br/>Campaign: '.$det->subject.
	              '<br/>Status: '.$det->status.
	              '<br/>Started date: '.$det->startdatetime.
	              '<br/>Last run date: '.$det->rundatetime.
	              '<br/>Sent Email from : '.$det->startemailid." To ".$det->endemailid;
	             
	      }      
	   echo '</form></body></html>';
	}
   function call_email_campaign()
   {
     if($_POST['pwd']=='prime123')
     {
         
      $this->load->model('emailcampaign_model');      
     //get campaigns to run
      $rsCampaigns = $this->emailcampaign_model->getCurrentCampaigns();     
     
     foreach($rsCampaigns AS $camp)
              {
                  
                 //get lastsend email id
                 //from emailcampaigndet                                           
                 $lastmailid = $this->emailcampaign_model->getlastmailid($camp->emailcampaignid);                                 
                  
                 $this->campaign = $camp;//class member 
                                  
                 $resultEmails = $this->emailcampaign_model->getEmails($camp->groupids,$lastmailid,$camp->mailsperhr);
                // print_r($resultEmails);
                 $startemailid = $lastmailid + 1;                     
                if(count($resultEmails)>0){
                     foreach($resultEmails AS $emails)
                     {
                        $mailsent = $this->send_campaign_email($emails->email);
                        
                        if($mailsent)
                        {
                           $this->emailcampaign_model->updateEmails($emails->email);
                           echo "<br/>log:Mail sent to ".$emails->email;
                        }
                        $this->lastemailsentId = $emails->id;
                     }  // end foreach($resultEmails AS $emails)
                     
                     $this->emailcampaign_model->updateCampaignDet($camp->emailcampaignid, $startemailid, $this->lastemailsentId );
                  
                 }
                 else{
                    $this->mailerrormsg .= "No emails found in campaign '".$camp->description."'\n\n";
                 }
                
                  //after each campaign end ,send a info mail to 'from address'
                   $this->send_campaign_email($this->campaign->frommailid);                
                 
              }  // end of foreach($rsCampaigns AS $camp)
      //print_r($resultset);
        echo "<br/><br/>Log:Campaign Closed";
        echo "<br/><br/><form action=\"".$this->base."index.php/newsletter_new/email_campaign\" ><input type=\"submit\" value=\"Go Back\" ></form>";
        }
        else
        {
           $this->email_campaign();
        }
   }   	
   	
	
	function send_campaign_email($email)
   {
      $data['css'] = $this->css;
      $data['base'] = $this->base;
      $this->load->plugin('phpmailer');
    
    $mail = new phpmailer();
    # Principal settings
    
    $mail->IsSMTP();
//Take values for smtp from campaign else use Default values.
    $mail->Mailer   = "smtp";
    $mail->SMTPAuth = true;
    $mail->Host     = ($this->campaign->smtphost =='')?"mail.gogreenearth.in":$this->campaign->smtphost;
    $mail->Username = ($this->campaign->smtpuser =='')?"elatrip@gogreenearth.in":$this->campaign->smtpuser;
    $mail->Password = ($this->campaign->smtppwd =='')?"prime123":$this->campaign->smtppwd;
    $mail->From     = ($this->campaign->frommailid =='')?"travelsupport@elatrip.com":$this->campaign->frommailid;
    $mail->FromName = ($this->campaign->fromname =='')?"Elatrip Travel Support Team":$this->campaign->fromname;
    $mail->Subject  = ($this->campaign->subject =='')?"Welcome to Elatrip":$this->campaign->subject;
    $viewfilename = $this->campaign->filename;
//    
    
    $mail->AddReplyTo($mail->From, $mail->FromName); 
  
    $mail->AddAddress($email, $email); //You can add more emails
    $mail->IsHTML(true); // send as HTML
    # Embed images
   // $mail->AddEmbeddedImage('images/elalogo.gif', "logo_header");

   if($viewfilename!=''){
       $mail->Body     =  $this->load->view('emailcampaign/'.$viewfilename.'',$data,TRUE);
    }else
    {
       $mail->Body     =  $this->campaign->description;
    }
    
    //for sending a confirmation message to sender email:
    if($mail->From == $email)
    {
       $mail->Body =  "Email Campaign ".$this->campaign->subject." sent <br/><br/>". $mail->Body;
    }
   //$mail->AltBody  =  "This is the text-only body";
   
   if(!$mail->Send())
    {
       $this->mailerrormsg = $mail->ErrorInfo;
       return FALSE; 
    }
    else
    {
        $this->mailerrormsg = "Email sent successfully.";         
        return TRUE; 
    }
    
} 
	
}


/* End of file home.php */
/* Location: ./system/application/controllers/home.*/
