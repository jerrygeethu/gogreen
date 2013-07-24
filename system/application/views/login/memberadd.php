                  <div id="Message">
                  <div id="message_right">
				   <?php 
				  if(!empty($value))
				  {
				  foreach($value->result() as $val)
				  {  } 
				
			   }
			
			  ?>
				  
				  <strong>Member 
				  <?php if(!empty($value))
				     {   echo "Edit";   }
					  else   { echo "Add";}
					  ?>
					  
					  </strong>
				  
				 
				  <div class="tdiv">
				  <form name="memberform" id="memberform" method="post" enctype="multipart/form-data" action="<?php echo $base;?>index.php/admin/memberadd">
			      <?php $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); ?>
				  <table class="tab">
					  
						<tr>
						 <td class="ttd">Name <span class="error">*</span></td><td class="ttd"><input type="text" name="name" id="name" value="<?php print !empty($val->name)?$val->name:set_value('name'); ?>"/>
						 
						 <?php echo form_error('name'); ?>
						 </td>
					</tr> 
					<tr>
						 <td class="ttd">Email Id <span class="error">*</span></td><td class="ttd"><input type="text" name="email" id="email" value="<?php print !empty($val->email)?$val->email:set_value('email'); ?>"  />
						 	 <?php echo form_error('email'); ?>
						 </td>
					</tr>  
					 <?php if(empty($val))
						 { ?>
					<tr>
						 <td class="ttd">Password <span class="error">*</span></td><td class="ttd">
						 
						
                      <input type="password" name="password" id="password"  value="<?php print !empty($val->password)?$val->password:set_value('password'); ?>" />
					 
						  <?php echo form_error('password'); ?>
						 
						 </td>
					</tr>  
					
					<tr>
						 <td class="ttd">Confirm Password <span class="error">*</span></td><td class="ttd">
						 
						
                      <input type="password" name="repassword" id="repassword"  value="<?php print !empty($val->repassword)?$val->password:set_value('repassword'); ?>" />
					 
						  <?php echo form_error('repassword'); ?>
						 
						 </td>
					</tr>  
					 <?php } ?>
					<tr>
						 <td class="ttd">Phone <span class="error">*</span></td><td class="ttd">
						 <input type="text" name="phone" id="phone" value="<?php print !empty($val->phone)?$val->phone:set_value('phone'); ?>" />
						  <?php echo form_error('phone'); ?>
						 </td>
					</tr>  
					<tr>
						 <td class="ttd">Mobile <span class="error">*</span></td><td class="ttd"><input type="text" name="mobile" id="mobile" value="<?php print !empty($val->mobile)?$val->mobile:set_value('mobile'); ?>"  />
						 
						   <?php echo form_error('mobile'); ?>
						 </td>
					</tr>  
					<tr>
						 <td class="ttd">Address</td><td class="ttd">
						 
						 
<input type="text" name="address" id="address" value="<?php if(!empty($val) && ($val->address!="") ){ echo $val->address;}  else { echo set_value('address'); }  ?>"  />			 
					</tr> 
					<tr>
						 <td class="ttd">City</td><td class="ttd"><input type="text" name="city" id="city" value="<?php print !empty($val->city)?$val->city:set_value('city'); ?>" /></td>
					</tr>  
					<tr>
						 <td class="ttd">Country</td><td class="ttd"><input type="text" name="country" id="country" value="<?php print !empty($val->country)?$val->country:set_value('country'); ?>" /></td>
					</tr>  
					<tr>
						 <td class="ttd">Zip</td><td class="ttd"><input type="text" name="zip" id="zip" value="<?php print !empty($val->zip)?$val->zip:set_value('zip'); ?>" />
						
						 </td>
						 
					</tr>  
					<tr>
						 <td class="ttd">Photo</td><td class="ttd">
						 
						 <input type="file" name="userfile" id="userfile" checked />
						 <?php 
						 if(!empty($val->photo))
						 { 
							 
							 $ph=explode(".",$val->photo);
							 if($ph!="" && count($ph)>0) 
							 {
								 $photo=$ph[0]."_thumb".$ph[1];?>
					<div id="photodiv">
				 <img src="<?php echo $base;?>/images/memberphoto/<?php echo $val->name;?>/<?php echo $photo;?>" />
				 <a href="javascript:remove();" class="link">Remove Photo</a>	
			     <input type="hidden" name="photo" id="photo" value="<?php echo $val->photo;?>" />
			     </div>	 
			  
			  
                       <?php } } ?>
						  
						  
						  </td>
					</tr>  
										<tr>
						 <td class="ttd">Status</td><td class="ttd">
						 <?php 
						 if(!empty($val))
						 {
						 
						 if($val->memstatus=="inactive")
						 { ?>
						 
						 <input type="checkbox" name="status" id="status"  value="2" />
						 <?php } 
						 else
						 { ?>
							 <input type="checkbox" name="status" id="status" checked value="2" />
						<?php }
						 
						 } else { ?>
						  <input type="checkbox" name="status" id="status" checked value="2" />
						 <?php } 
					     
						 ?>
						 
						
						 </td>
					</tr>  
							<tr> 
						<td class="ttd"  colspan="2">
						<input type="hidden" name="id" id="id" value="<?php if(!empty($val->memberid)){ echo $val->memberid; } ?>" />
						<input type="submit" name="submit" id="submit" <?php if(!empty($val->memberid)){ ?> value="Edit" <?php } else { ?>Value="Add" <?php } ?> /></td>
					</tr>  
				  </table>
				  </form>
				  
				  
				  </div>
                 
                 </div>
                 
                 </div>
       
<script type="text/javascript">
function remove()
{
	document.getElementById('photo').value="";
	document.getElementById('photodiv').style.display="none";
	
}

</script>
