                  <!--begin:plot_text-->
                 <div id="Message">
				 <div  align="right" style="margin-right:10px;">
				 <?php 
				 if($type!="")
				 { ?>
				 <a href="<?php echo $base;?>index.php/admin/sentmessage" class="link" >Back To Inbox</a>
				 <?php } 
				 else
				 {				 
				 ?> <a href="<?php echo $base;?>index.php/admin/message" class="link">Back To Inbox</a>
				 <?php } ?>
				 
				 </div>
				 <?php foreach($value->result() as $val)
				 { } ?>
                   <div id="message_right">
                 <div id="msg_sub">
				 
				 <?php 
				 if(!empty($val->subject))
				 {
				 echo " Subject: ".$val->subject;
			      }
				 ?>
				 
				 </div>
                 <div class="clear"></div>  
                 <div class="msg_text_inbox">
                 <div class="msg_from"><?php 
				 if(!empty($val->sender))
				 {
					 if($type!="")
					 {
				       echo " To: ".$val->sender;
				      }
					  else
					  {
						   echo " From: ".$val->sender;
					  }
			     }
				 
				 ?> </div>
                 <div class="msg_date"><?php 
				 		if(!empty($val->date))
						{	
							$date = date_create($val->date);
							echo date_format($date, 'M-d');
				        }			 
				 
				?></div>
                 <div class="clear"></div>
                  <div style="background-color:white;"></div> <p align="justify">
                   <?php
				  if(!empty($val->sender))
				 { echo $val->body;
				 
				 } ?>
				   </p></div>
                 </div>
                 <div class="clear"></div>
				 <?php  if($type=="")
					 { ?>
                 <div id="delete">
				 
				 <a href="<?php echo $base;?>index.php/admin/messagecompose/<?php if(!empty($val->id)) { echo $val->id; }?>">Reply</a>
			
				 
				 </div>
              	 <?php } ?>
                   </div>
                   <div class="clear"></div>
                  <!--end:plot_text-->
               </div>
              <!--end:middle-->
              
