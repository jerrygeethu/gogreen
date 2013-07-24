
								
								  <div id="Message">
                  <div id="message_right">
	
					<div align="right"><strong><a href="<?php echo $base;?>index.php/admin/activity/addact/<?php echo intval($hidtypeid)."/".$hidtype;?>">Activity Add</a></strong></div>
				  <strong>Activity List of <?php echo (!empty($projectname))?$projectname:"";?></strong>  				 
				  <div class="tdiv">
				  <table class="tab">
					<tr>
						<td class="ttd" colspan="2"></td>
						</tr> 
					<?php 
					if($getactivity['total_rows']>0)
					{
							foreach($getactivity['result'] as $row)
							{
								?>
								<tr>
								<td class="ttd" width="90%"><?php echo "<strong>".$row->title."</strong><br/>".truncate($row->data,0,50);?></td>
								<form name="actfrm" id="actfrm" method="post" action="<?php echo $base;?>index.php/admin/editactivity">
								<td class="ttd" width="10%">
								<input type="submit" name="editbtn" id="editbtn" value="Edit"/>
								<input type="hidden" name="actid" id="actid" value="<?php echo $row->activityid;?>"/>
								<input type="hidden" name="typeid" id="typeid" value="<?php echo $hidtypeid;?>"/>
								<input type="hidden" name="type" id="type" value="<?php echo $hidtype;?>"/>
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
<?php echo $addform;?>
