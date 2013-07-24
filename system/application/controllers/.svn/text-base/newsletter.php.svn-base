<?php

class Newsletter extends Controller {
   
   var $base;
   var $css;
   var $mailerrormsg;
   var $lastemailsentId = 0;
   
	function Newsletter()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
      $this->css = "style.css";
		$this->load->helper('parameter');
		//$this->load->database();
	}
	
	function index($value='')
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   //$this->load->view($value,$data);
		
	}
	
   function email_campaign()
   {
      $this->load->database();     
      $this->load->model('emailcampaign_model');      
     //get campaigns to run
      $rsCampaigns = $this->emailcampaign_model->getCurrentCampaigns();     
     
     foreach($rsCampaigns AS $camp)
              {
                  
                 //get lastsend email id
                 //from emailcampaigndet                                           
                 $lastmailid = $this->emailcampaign_model->getlastmailid($camp->emailcampaignid);                                 
                  
                  
                                  
                 $resultEmails = $this->emailcampaign_model->getEmails($camp->groupids,$lastmailid,$camp->mailsperhr);
                // print_r($resultEmails);
                if(count($resultEmails)>0){
                  print_r($resultEmails); 
                  $startemailid = $lastmailid + 1;                     
                  $mailsent = $this->process_email_campaign($resultEmails);
                  if($mailsent)
                  {
                     
                     $this->emailcampaign_model->updateCampaignDet($camp->emailcampaignid, $startemailid, $this->lastemailsentId );
                     foreach($resultEmails AS $emails)
                     {
                        $this->emailcampaign_model->updateEmails($emails->email);
                     }  
                  }
                   
                 }
                 else{
                    $this->mailerrormsg .= "No emails found in campaign '".$camp->description."'\n\n";
                 }
                 
              }  // end of foreach($rsCampaigns AS $camp)
      //print_r($resultset);
     
   }   	
   	
	
	function process_email_campaign($emailArr)
   {
      $data['css'] = $this->css;
      $data['base'] = $this->base;
      $this->load->plugin('phpmailer');
    
    $mail = new phpmailer();
    # Principal settings
    
    $mail->IsSMTP();
    $mail->From     = "travelsupport@elatrip.com";
 
    $mail->Host     = "mail.gogreenearth.in";
    $mail->SMTPAuth = true;
    $mail->Password = "prime123";
    $mail->Username = "elatrip@gogreenearth.in";
    $mail->Mailer   = "smtp";

    $mail->FromName = "Elatrip Travel Support Team";
    $mail->AddReplyTo("travelsupport@elatrip.com","Elatrip Travel Support Team"); 
    $mail->AddAddress("travelsupport@elatrip.com","Elatrip Travel Support Team"); 
    $mail->AddBCC("sukeshclt@gmail.com","Sukesh"); 
    $mail->AddBCC("raghu.primemove@gmail.com","N Raghunathan"); 
    foreach($emailArr AS $email)
     {     
       $mail->AddBCC($email->email,$email->email); //You can add more emails
              
    }
    
    $this->lastemailsentId = $email->id;
    $mail->IsHTML(true); // send as HTML
    # Embed images
   // $mail->AddEmbeddedImage('images/elalogo.gif', "logo_header");

    $mail->Subject  =  'Diwali Greetings';
    $mail->Body     =  $this->load->view('diwali/diwali.html',$data,TRUE);
    //$mail->Body     =  $this->load->view('diwali/diwali.html',$data);
   // $mail->Body     = "email body -  mail from gogreenearth.in reply to travelsupport@elatrip.com ";
    //$mail->AltBody  =  "This is the text-only body";
   
    if(!$mail->Send())
    {
       //$msg = "Message was not sent <br>";
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
