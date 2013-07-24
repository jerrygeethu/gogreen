                  <div id="Message">
                  <div id="message_right">
				  
				  <strong>Photo Gallery</strong>
				  
				  
				  <div class="tdiv">
				  <form name="memberform" id="memberform" method="post" enctype="multipart/form-data" action="<?php echo $base;?>index.php/admin/gallery">
			      <?php $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); ?>
				  
				  <table class="tab">
					<tr>
						 <td class="ttd">Name</td>
						 <td class="ttd"><input type="text" name="name" id="name" />
						 
						 <?php echo form_error('name'); ?>
						 </td>
					</tr> 
					
					<tr>
						 <td class="ttd">Plot Title</td>
					  <td class="ttd"><select name="pname">
					  <?php  
					 $query = $this->db->get('plots');
					foreach($query->result() as $row)
				  	{
					//print_r($row);
					?>
					<option value="<?php echo $row->plotid;?>"><?php echo $row->title;}?></option></select>
						 
						 <?php echo form_error('pname'); ?>
						 </td>
					</tr> 
					 
					<tr>
						 <td class="ttd">Photo</td>
						 <td class="ttd"><input type="file" name="userfile" id="userfile" /></td>
					</tr>  
										
						<tr> 
						<td class="ttd"  colspan="2" align="center"><input type="submit" name="submit" id="submit"  value="Upload" />
						<font color="#FF0000"><?php  if($error_msg!="") echo $error_msg;?></font>
						</td>
						
						</tr>
						  
						
				  </table>
				  </form>
				  
				  
				  </div>
                 
                 </div>
                 
                 </div>
       
