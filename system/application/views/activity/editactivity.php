<div id="Message">    
								<div id="message_right">
				  
				  <strong>Activity Edit</strong>	  
				 
				  <div class="tdiv"> 	
				  <form name="projectform" id="projectform" method="post"  action="<?php echo $base;?>index.php/admin/editactivity">
				  <table class="tab">
					<tr>
					<td class="ttd">Title</td>							
					<td class="ttd"><input type="text" name="ptitle" id="ptitle" size="35" value="<?php echo (!empty($actrow->title))?$actrow->title:""; ?>"/><?php //echo form_error('ptitle');?></td>							
					</tr> 
					<tr>
					<td class="ttd">Description</td>							
					<td class="ttd"><textarea name="desc" id="desc" cols="35" rows="3" wrap="hard"><?php echo (!empty($actrow->data))?$actrow->data:""; ?></textarea></td>
					</tr> 					
					<tr>					
					<td class="ttd" colspan="2">
					<input type="submit" name="editbtn" id="editbtn" value="Update" />
					<input type="hidden" name="actid" id="actid" value="<?php echo $hidactid; ?>"/>
					<input type="hidden" name="typeid" id="typeid" value="<?php echo $hidtypeid; ?>"/>
					<input type="hidden" name="type" id="type" value="<?php echo $hidtype; ?>"/>
					</td>		
					</tr> 
				  </table>
				  </form>  				  
				  </div>
                								 					
								 </div>
                 </div>          
