  <div id="Message">
                  <div id="message_right">
	
					
				  <strong>Activity List</strong>  				 
				  <div class="tdiv">
				  <table class="tab">
					<tr>
						<td class="ttd" colspan="2"></td>
						</tr> 
					<?php 
					if($activity['total_rows']>0)
					{
							foreach($activity['result'] as $row)
							{
								?>
								<tr>
								<td class="ttd" width="90%"><?php echo "<strong>".$row->title."</strong><br/>".truncate($row->data,0,10);?></td>
								<form name="actfrm" id="actfrm" method="post" action="<?php echo $base;?>index.php/admin/projectview/<?php echo $row->projectid;?>">
								<td class="ttd" width="10%">
								<input type="submit" name="viewbtn" id="viewbtn" value="view"/>
								<input type="hidden" name="type" id="type" value="<?php echo $row->type;?>"/>
								<input type="hidden" name="typeid" id="typeid" value="<?php echo $row->typeid;?>"/>
								<input type="hidden" name="actid" id="actid" value="<?php echo $row->activityid;?>"/>
								</td>
								</form>
								</tr> 						
								<?php 
							}
					}
					else
					{
						?>
						<tr>
						<td class="ttd"><div align="center">No records</div></td>
						</tr> 						
						<?php 
					}
						?>
				  </table>  				  
				  </div>  
					<div><?php print $link; ?></div>   
                 </div>     
                 </div>
