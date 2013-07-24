<!--======================Add Projects========================================-->
<?php 
if($this->session->userdata('status')=="admin")
{
?>								 
								 
								<div id="Message">    
								<div id="message_right">
				  
				  <strong>Activity Add</strong>	  
				 
				  <div class="tdiv">
				  <form name="projectform" id="projectform" method="post"  action="<?php echo $base;?>index.php/admin/activity/addact">
				  <table class="tab">
					
					<tr>
					<td class="ttd">Title<span style="color:#F51B1B;">*</span></td>							
					<td class="ttd"><input type="text" name="ptitle" id="ptitle" size="35" value="<?php echo set_value('ptitle');?>"/><?php echo form_error('ptitle');?></td>							
					</tr>			
					<tr>
					<td class="ttd">Description</td>							
					<td class="ttd"><textarea name="desc" id="desc" cols="35" rows="3" wrap="hard"><?php echo $this->input->post('desc');?></textarea></td>							
					</tr> 			
					
					<tr>					
					<td class="ttd" colspan="2">
					<input type="submit" name="addbtn" id="addbtn" value="Add"/>
					<input type="hidden" name="typeid" id="typeid" value="<?php echo $hidtypeid;?>"/>
						<input type="hidden" name="type" id="type" value="<?php echo $hidtype;?>"/>						
					</td>		
					</tr> 
				  </table>
				  </form>  				  
				  </div>
                								 					
								 </div>
                 </div>          
<?php
}
?>								    	
