                  <!--begin:plot_text-->
                 <div id="Message">
				  <?php
				  if(!empty($value))
				  {
				   if($value->num_rows!=0)
				 { 
					 foreach($value->result() as $val)
					 {
					 }
				 }
			 }
					 ?>
                   <div id="message_right">
				   <form method="post" action="<?php echo $base;?>/index.php/admin/messagecompose">
				   <?php $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); ?>
                     <div class="compose_txt">
                        <div class="compose_to">To</div>
                     </div>
                    <?php if(!empty($val) || $rep=="1")
					{ ?>
					<textarea name="toreplay"  id="toreplay" class="address" ><?php print !empty($val->sender)?$val->sender:set_value('to'); ?></textarea>
					<input type="hidden" name="rep" id="rep" value="1" />
					<?php } else { ?>
					<div align="left" style="padding-left:45px;"> 
					Click Below and select members
					
					<select name="to[]" id="to" class="sbox"  multiple="multiple"  ><?php 
					
					
					
					
					foreach($emailid->result() as $eid)
					 { ?><option  value="<?php echo $eid->email;?>" <?php print !empty($val->sender)?$val->sender:set_value('to'); ?>><?php 
					 echo $eid->email;
					 ?></option><?php } ?></select>
						 
						 
						 </div>
						 <?php } ?>
					
					 <!--<input type="text" name="to"  id="to" class="address" autocomplete="off" value="<?php print !empty($val->sender)?$val->sender:set_value('to'); ?>" />
					 -->
					
					  <div class="clear"></div>
                     <div class="clear"></div>
					 <?php if(!empty($val) || $rep=="1")
					{ 
					   echo form_error('toreplay');
				  }
				  else
				  {
					  echo form_error('to[]');
					 
				  }
					  ?>
                     <div class="compose_txt">
                        <div class="compose_to">Subject</div>
                     </div>
					  <textarea name="subject"  id="subject" class="address"><?php print !empty($val->subject)?"Reply:".$val->subject:set_value('subject'); ?></textarea>
					  <div class="clear"></div>
					 
					  <?php echo form_error('subject'); ?>
                   
                    
                   
					
					 
					 <textarea name="body"  id="body" class="compose_text"><?php print !empty($val->body)?$val->body:set_value('body'); ?></textarea>
					 
                     
                     <div class="clear"></div>
					  <?php echo form_error('body'); ?>
					    
                     <div ><input type="submit" name="send" id="send" value="Send" /></div>
					 </form>
					 
                       </div>
					   
					                          </div>
                        <!--end:middle-->

<script language="javascript" type="text/javascript">
			$(document).ready(function(){				
						
		 $("#to").dropdownchecklist();								
			});
			</script>
