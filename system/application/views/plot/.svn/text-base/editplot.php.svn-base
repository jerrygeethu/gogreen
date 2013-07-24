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
								alert("Enter location");
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
							document.getElementById('plotform').submit();
						}
						</script>
						
						
						
<div width="100%" align="center" style="overflow:-moz-scrollbars-vertical;overflow-y:scroll; WIDTH: 100%; HEIGHT: 330px; ">						
								<div id="Message">    
								<div id="message_right">
				  
				  <strong> Edit Plot</strong>	   	 	 	 	 	 	 	
				 
				  <div class="tdiv">					
				  <form name="plotform" id="plotform" method="post"  action="<?php echo $base;?>index.php/admin/plotview">
				  <table class="tab">					
					<tr>
					<td class="ttd">Title</td>							
					<td class="ttd"><input type="text" name="ptitle" id="ptitle" size="35" value="<?php echo (!empty($plotrow->title))?$plotrow->title:""; ?>"/></td>							
					</tr> 
					<tr>
					<td class="ttd">Description</td>							
					<td class="ttd"><textarea name="desc" id="desc" cols="35" rows="3" wrap="hard"><?php echo (!empty($plotrow->description))?$plotrow->description:""; ?></textarea></td>
					</tr> 
					<tr>
					<td class="ttd">Location</td>							
					<td class="ttd"><input type="text" name="place" id="place" size="20" value="<?php echo (!empty($plotrow->location))?$plotrow->location:""; ?>"/></td>
					</tr> 
					<tr>
					<td class="ttd">Extent</td>							
					<td class="ttd"><input type="text" name="extent" id="extent" size="10" value="<?php echo (!empty($plotrow->extent))?$plotrow->extent:""; ?>"/></td>
					</tr> 
					<tr>
					<td class="ttd">Remarks</td>				
					<td class="ttd"><textarea name="remarks" id="remarks" cols="35" rows="3" wrap="hard"><?php echo (!empty($plotrow->remarks))?$plotrow->remarks:""; ?></textarea></td>			
					</tr> 					
					<td class="ttd">Owner</td>					
					<td class="ttd">
					<select name="admin" id="admin"  style="width:200px;">
					<?php 
					if($adminlist['total_rows']>0)
					{
						foreach($adminlist['result'] as $row)
						{
						?>
						<option value="<?php echo (!empty($row->memberid))?$row->memberid:"";?>" <?php if(!empty($plotrow->admin)) { if($plotrow->admin==$row->memberid) { ?>selected="selected"<?php } } ?>><?php echo (!empty($row->name))?$row->name:"";?></option>
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
					<input type="hidden" name="plotid" id="plotid" value="<?php echo (!empty($plotrow->plotid))?$plotrow->plotid:""; ?>"/>
					<input type="hidden" name="projid" id="projid" value="<?php echo $hidprojid; ?>"/>
					</td>		
					</tr> 
				  </table>
				  </form>  					
				  </div>
            								 					
								 </div>
                 </div>          
 </div> 
