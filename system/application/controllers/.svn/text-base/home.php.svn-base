<?php

class Home extends Controller {
   
   var $base;
   var $css;
   
	function Home()
	{
		parent::Controller();	
		$this->base = $this->config->item('base_url');
        $this->css = "style.css";
		$this->load->helper('parameter');
	}
	
	function index($value='index')
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   $this->load->view($value,$data);
		
	}
	
	function show($value)
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   $this->load->view('header',$data);		
	   $this->load->view($value,$data);
	   $this->load->view('footer',$data);
	}
	function view($value)
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   
		$this->load->view('header',$data);		
		$this->load->view('info/'.$value,$data);
		$this->load->view('footer',$data);
	}
	function testimonials()
	{
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   
		$this->load->view('header',$data);		
		$this->load->view('testimonials',$data);
		$this->load->view('footer',$data);
	}
   function mail()
   {
	   
	   
	   $data['base'] = $this->base;
	   $data['css'] = $this->css;
	   
	    $this->load->library('form_validation');
      
        $this->load->view('header',$data);
      
      
      
        $this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required'); 
		$this->form_validation->set_rules('message', 'Message', 'required'); 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			
		if ($this->form_validation->run() == FALSE)
		{
         	$this->load->view('enquiry',$data);
		}
		else
		{

		$data['name'] = $this->input->post('name');
		$data['phone'] = $this->input->post('phone');
		$data['email']= $this->input->post('email');
		$data['message']= "
		Mail from : ".$data['name'] ." ,\n
		Mail address :".$data['email'].",\n
		".$this->input->post('message')."\n";
		$data['subject']="Mail from Enquiry form  in gogreenearth.in";
		
	
			
			$rs=$this->mail_enquiry($data);
			if($rs=="true")
			{
				$data['status']="true";
			}
			else
			{
				$data['status']="false";
			}
			$this->load->view('enquiry',$data);
		
		}
		
		$this->load->view('footer',$data);
	   
	   
	   
	   
   }
   function useragent()
	{
        $this->load->library('user_agent');
         
         if ($this->agent->is_browser())
         {
             $agent = $this->agent->browser().' '.$this->agent->version();
         }
         elseif ($this->agent->is_robot())
         {
             $agent = $this->agent->robot();
         }
         elseif ($this->agent->is_mobile())
         {
             $agent = $this->agent->mobile();
         }
         else
         {
             $agent = 'Unidentified User Agent';
         }
         
         $info= "Date/Time = ". date("D M j G:i:s T Y")."\r\n";
         $info.= "User Agent = ".$agent."\r\n";
         $info.= $this->agent->agent_string()."\r\n";
         
         $info.= "Platform = ".$this->agent->platform()."\r\n"; // Platform info (Windows, Linux, Mac, etc.) 
         $info.= "Referrer = ".$this->agent->referrer()."\r\n";
         $info.= "Ip address = ".$this->input->ip_address()."\r\n";
         
         
         return $info;
	} 
    private function mail_enquiry($data=NULL)//subject,msg
	{ 
       //User agent info follows
       $content['msg']=$data['message'];
       $content['msg'].="\r\n\r\nUser Info Follows:\r\n";
       $content['msg'].= "------------------\r\n"; 
       $content['msg'].= $this->useragent(); 	   
	   $content['subject']=$data['subject'];
	    if($content!=NULL)
	    {
   	   
   	    $this->load->library('email');
           		
   		 $this->email->clear();
   		
   		 $config['useragent'] = 'Gogreen';
   		 $config['mailtype'] = 'text'; 
   		 $this->email->initialize($config);
          $this->email->from('noreply@gogreenearth.in', 'Gogreen Earth');
          $this->email->to('info@gogreenearth.in');
           $this->email->cc($this->config->item('feedback_cc')); 
         
         
           $this->email->bcc('tintu.primemove@gmail.com');
   
          $this->email->subject($content['subject']);
          $this->email->message($content['msg']);
       
          if($this->email->send())
		  {
			  return true;
		  }
		  else
		  {
		  
		    return false;
		  }
		  
          
   
        //  echo $this->email->print_debugger();
   
	   }
   }	
	
}


/* End of file home.php */
/* Location: ./system/application/controllers/home.*/
