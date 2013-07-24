<!--======================Add Projects========================================-->
<?php 
if($this->session->userdata('status')=="admin")
{
?>								 
								 
								<div id="Message">    
								<div id="message_right">
				  
				  <strong>Project Add</strong>	  
				 
				  <div class="tdiv">
				  <form name="projectform" id="projectform" method="post"  action="<?php echo $base;?>index.php/admin/projects/add">
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
					<td class="ttd">Place<span style="color:#F51B1B;">*</span></td>							
					<td class="ttd"><input type="text" name="place" id="place" size="20" value="<?php echo set_value('place');?>"/><?php echo form_error('place');?></td>
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
					<td class="ttd">Admin</td>					
					<td class="ttd">
					<select name="admin" id="admin" style="width:200px;">
					<?php 
					if($adminlist['total_rows']>0)
					{
						foreach($adminlist['result'] as $row)
						{
						?>
						<option value="<?php echo $row->memberid;?>" <?php if($this->input->post('admin')==$row->memberid) {?>selected="selected"<?php } ?>><?php echo $row->name;?></option>
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
					<?php echo form_error('admin');?>
					</td>		
					</tr> 
					<tr>					
					<td class="ttd" colspan="2"><input type="submit" name="addbtn" id="addbtn" value="Add"/></td>		
					</tr> 
				  </table>
				  </form>  				  
				  </div>
                								 					
								 </div>
                 </div>          
<?php
}
?>								    	
