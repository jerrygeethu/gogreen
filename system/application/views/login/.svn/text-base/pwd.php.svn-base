
<form name="pwd" id="pwd" method="post" action="<?php echo $base;?>index.php/admin/pwd">
	<div class="news_head">
     <div class="latest_news"><strong>Password Change</strong></div> 
  </div>
  
  <div id="Message">
		<div id="message_right">
				<div class="tdiv">
					<?php $this->form_validation->set_error_delimiters('<div class="error">', '</div>');?>
							<table class="tab">
								<tr>
									<td class="ttd">Current Password</td>
									<td class="ttd">
										<input type="password" name="currentpwd" id="currentpwd"  value="<?php  print set_value('currentpwd');?>" />
										<?php echo form_error('currentpwd'); ?>
									</td>
								</tr> 
								
								<tr>
									<td class="ttd">New Password</td>
									<td class="ttd">
										<input type="password" name="newpwd" id="newpwd"  value="<?php print set_value('newpwd');?>" />
										<?php 
											if($this->input->post('newpwd')=="")
											{
												echo form_error('newpwd'); 
											}
										?>
									</td>
								</tr> 
								
								<tr>
									<td class="ttd">Confirm Password</td>
									<td class="ttd">
										<input type="password" name="confirmpwd" id="confirmpwd"  value="<?php print set_value('confirmpwd');?>" />
										<?php
											if($this->input->post('confirmpwd')=="")
											{
												echo form_error('confirmpwd'); 
											}
											else if(($this->input->post('confirmpwd')=="") && ($this->input->post('newpwd')!=""))
											{
												echo form_error('confirmpwd'); 
											}
											else
											{
												echo form_error('newpwd'); 
											}
										?>
									</td>
								</tr> 
								
								<tr>
									<td class="ttd" colspan="2">
										<input type="submit" name="addBtn" id="addBtn" value="Save"/>
										<input type="reset" name="cancelBtn" id="cancelBtn" value="Cancel"/>
									</td>
								</tr> 
								
							</table>
				</div>
		</div>
	</div>
	
</form>
