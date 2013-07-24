<!--======================Add Projects========================================-->
<?php 
if($this->session->userdata('status')=="admin")
{
?>								 
								 
								<div id="Message">    
								<div id="message_right">
				  
				  <strong> Add Plot  </strong>	  
				 
				  <div class="tdiv">
				  <form name="projectform" id="projectform" method="post"  action="<?php echo $base;?>index.php/admin/plot/addplot">
				  <table class="tab">
					<tr>
					<td class="ttd">Owner</td>							
					<td class="ttd">
					<select name="owner" id="owner" style="width:200px;">
					<?php 
					if($ownerlist['total_rows']>0)
					{
						foreach($ownerlist['result'] as $row)
						{
						?>
						<option value="<?php echo $row->memberid;?>" <?php if($this->input->post('owner')==$row->memberid) {?>selected="selected"<?php } ?>><?php echo $row->name;?></option>
						<?php 
						}
					}
					else
					{
						?>
						<option value="0">No records</option>
						<?php 
					}
					?>
					</select>					
					<?php echo form_error('owner');?>
					</td>							
					</tr>
					<tr>
					<td class="ttd">Title <span style="color:#F51B1B;">*</span></td>							
					<td class="ttd"><input type="text" name="ptitle" id="ptitle" size="35" value="<?php echo set_value('ptitle');?>"/><?php echo form_error('ptitle');?></td>							
					</tr>			
					<tr>
					<td class="ttd">Description</td>							
					<td class="ttd"><textarea name="desc" id="desc" cols="35" rows="3" wrap="hard"><?php echo $this->input->post('desc');?></textarea></td>							
					</tr> 			
					<tr>
					<td class="ttd">Location<span style="color:#F51B1B;">*</span></td>							
					<td class="ttd"><input type="text" name="loc" id="loc" size="35" value="<?php echo set_value('loc');?>"/><?php echo form_error('loc');?></td>							
					</tr> 			
					 			
					<tr>
					<td class="ttd">Extent<span style="color:#F51B1B;">*</span></td>							
					<td class="ttd"><input type="text" name="extent" id="extent" size="10" value="<?php echo set_value('extent');?>"/><?php echo form_error('extent');?></td>							
					</tr>  	
					<tr>
					<td class="ttd">Remarks</td>				
					<td class="ttd"><textarea name="remarks" id="remarks" cols="35" rows="3" wrap="hard"><?php echo $this->input->post('remarks');?></textarea></td>			
					</tr> 		
					<tr>					
					<td class="ttd" colspan="2">
					<input type="submit" name="addbtn" id="addbtn" value="Add"/>					
					<input type="hidden" name="projectid" id="projectid" value="<?php echo $hidprojectid;?>"/>					
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
