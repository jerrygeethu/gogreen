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
                    
					  <textarea name="to"  id="to" class="address"><?php print !empty($val->sender)?$val->sender:set_value('to'); ?></textarea>
					  
                     <div class="clear"></div>
					  <?php echo form_error('to'); ?>
                     <div class="compose_txt">
                        <div class="compose_to">Subject</div>
                     </div>
					  <textarea name="subject"  id="subject" class="address"><?php print !empty($val->subject)?"Replay:".$val->subject:set_value('subject'); ?></textarea>
					  <?php echo form_error('subject'); ?>
                   
                     <div class="clear"></div>
                     <div class="attachment"><a href="javascript:show();"><div id="attach_img"></div>Attach a file</a></div>
					 <div id="up" style="display:none;"><input type="file" name="userfile" id="userfile" class="address"></div> 
					
					 
					 <textarea name="body"  id="body" class="compose_text"></textarea>
					  <?php echo form_error('body'); ?>
                     
                     <div class="clear"></div>
                     <div ><input type="submit" name="send" id="send" value="Send" /></div>
					 </form>
					 
                       </div>
					   
					                          </div>
                        <!--end:middle-->
  
<script type="text/javascript">

function show()
{
	
	document.getElementById('up').style.display="block";
}

</script>
 
