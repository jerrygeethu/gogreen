						<script type="text/javascript" language="javascript">
						function checkall()
						{
							if(document.getElementById('ptitle').value=="")
							{
								alert("Enter title");
								document.getElementById('ptitle').focus();
								return true;
							}
							else if(document.getElementById('place').value=="")
							{
								alert("Enter place");
								document.getElementById('place').focus();
								return true;
							}
							else if(document.getElementById('extent').value=="")
							{
								alert("Enter extent");
								document.getElementById('extent').focus();
								return true;
							}
							else if(document.getElementById('ptitle').value=="")
							{
								alert("Enter title");
								document.getElementById('ptitle').focus();
								return true;
							}
							document.getElementById('projectform').submit();
						}
						</script>
						
						
	<div width="100%" align="center" style="overflow:-moz-scrollbars-vertical;overflow-y:scroll; WIDTH: 100%; HEIGHT: 330px; ">							
						
								<div id="Message">    
								<div id="message_right">
				  
				  <strong>Project Edit</strong>	  
				 
				  <div class="tdiv">
				  <form name="projectform" id="projectform" method="post"  action="<?php echo $base;?>index.php/admin/projectview">
				  <table class="tab">
					<tr>
					<td class="ttd">Title</td>							
					<td class="ttd"><input type="text" name="ptitle" id="ptitle" size="35" value="<?php echo (!empty($projectrow->title))?$projectrow->title:""; ?>"/></td>							
					</tr> 
					<tr>
					<td class="ttd">Description</td>							
					<td class="ttd"><textarea name="desc" id="desc" cols="35" rows="3" wrap="hard"><?php echo (!empty($projectrow->description))?$projectrow->description:""; ?></textarea></td>
					</tr> 
					<tr>
					<td class="ttd">Place</td>							
					<td class="ttd"><input type="text" name="place" id="place" size="20" value="<?php echo (!empty($projectrow->place))?$projectrow->place:""; ?>"/></td>
					</tr> 
					<tr>
					<td class="ttd">Extent</td>							
					<td class="ttd"><input type="text" name="extent" id="extent" size="10" value="<?php echo (!empty($projectrow->extent))?$projectrow->extent:""; ?>"/></td>
					</tr> 
					<tr>
					<td class="ttd">Remarks</td>				
					<td class="ttd"><textarea name="remarks" id="remarks" cols="35" rows="3" wrap="hard"><?php echo (!empty($projectrow->remarks))?$projectrow->remarks:""; ?></textarea></td>			
					</tr> 
					<tr>
					<td class="ttd">Admin</td>					
					<td class="ttd">
					<select name="admin" id="admin"  style="width:200px;">
					<?php 
					if($adminlist['total_rows']>0)
					{
						foreach($adminlist['result'] as $row)
						{
						?>
						<option value="<?php echo $row->memberid;?>" <?php if($projectrow->admin==$row->memberid) { ?>selected="selected"<?php } ?>><?php echo $row->name;?></option>
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
					</td>		
					</tr> 
					<tr>					
					<td class="ttd" colspan="2">
					<input type="button" name="editbtn" id="editbtn" value="Edit" onclick="javascript:checkall();"/>
					<input type="button" name="close" id="close" value="Close"/>
					<input type="hidden" name="projectid" id="projectid" value="<?php echo $projectrow->projectid; ?>"/>
					</td>		
					</tr> 
				  </table>
				  </form>  				  
				  </div>
                								 					
								 </div>
                 </div>          
</div>
