
								
								  <div id="Message">
                  <div id="message_right">
	
					
				  <div align="right"><strong><a class="link" href="<?php echo $base;?>index.php/admin/projects/add">Project Add</a></strong></div>  
				 <strong>Projects</strong>
				  <div class="tdiv">
				  <table class="tab">
				  <tr>
					<td class="ttd" colspan="5"></td></tr>
					<?php 
					if($getproject['total_rows']>0)
					{
						foreach($getproject['result'] as $row1)
						{
						?>
						<tr>
						<td class="ttd"><?php echo "<strong>".$row1->title."</strong><br/>".truncate($row1->description,0,10);?></td>
						<td class="ttd">						
						<form name="projectform" id="projectform" method="post" action="<?php echo $base;?>index.php/admin/projectview">
						<input type="submit" name="viewbtn" id="viewbtn" value="view"/>
						<input type="hidden" name="projectid" id="projectid" value="<?php echo $row1->projectid;?>"/>
						</form>						
						</td>
						<td class="ttd">
						<?php 
						//if($this->session->userdata('status')=="admin")
						{
						?>
						<form name="plotaddfrm" id="plotaddfrm" method="post" action="<?php echo $base;?>index.php/admin/plot/addplot/<?php echo $row1->projectid;?>">
						<input type="submit" name="viewbtn" id="viewbtn" value="Add Plot"/>
						<input type="hidden" name="fromproject" id="fromproject" value="1"/>					
						</form>
						<?php
						}
						?>
						</td>
						<td class="ttd">
						<form name="plotform" id="plotform" method="post" action="<?php echo $base;?>index.php/admin/plot">
						<input type="submit" name="viewplotbtn" id="viewplotbtn" value="Plot list"/>
						<input type="hidden" name="projectid" id="projectid" value="<?php echo $row1->projectid;?>"/>
						</form>
						</td>
						<td class="ttd">
						<?php 
						//if($this->session->userdata('status')=="admin")
						{
						?>
						<form name="activityfrm" id="activityfrm" method="post" action="<?php echo $base;?>index.php/admin/activity/addact">
						<input type="submit" name="viewbtn" id="viewbtn" value="Add activity"/>
						<input type="hidden" name="typeid" id="typeid" value="<?php echo $row1->projectid;?>"/>
						<input type="hidden" name="fromactivtiy" id="fromactivtiy" value="1"/>	
						<input type="hidden" name="type" id="type" value="project"/>	
										
						</form>
						<?php
						}
						?>						
						</td>					
						</tr> 
						<?php 
						}
					}
					
					?>
				  </table>  				  
				  </div>
          <div><?php print $link; ?></div>   
 
                 </div>     
                 </div>
								 
						<?php echo $addform;?>
						
				
