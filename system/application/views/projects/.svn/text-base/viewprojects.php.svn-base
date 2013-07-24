                  <!--begin:news-->
                <div id="Message">
                  <div class="news_head">
				  
			   <div class="latest_news">Projects and Plots Owned By <?php echo $this->session->userdata('fullname');?></div> 
										
                  </div><div class="clear"></div>
								<div class="message_right" style="margin-left:10px;">
				  
				  <?php 
				 
				  if(!empty($projectrow))
				  {
				  ?>
								<table class="tab">
									<tr>
										<td class="ttd"><b>Plot</b></td><td class="ttd"><b>Project</b></td><td class="ttd"><b>Activity</b></td><td class="ttd"><b>Today's Workers</b></td>
									</tr>
									<?php foreach($projectrow['result'] as $proj)
											{  ?>
									<tr>
										<td class="ttd"><a class="link" href="<?php echo $base;?>index.php/admin/plotview/<?php echo $proj->plotid;?>"><?php echo $proj->title;?></a></td><td class="ttd"><a class="link" href="<?php echo $base;?>index.php/admin/viewprojectdet/<?php echo $proj->projectid;?>"><?php echo $proj->project;?></a></td><td class="ttd"><a class="link" href="<?php echo $base;?>index.php/admin/actdet/<?php echo $proj->activityid;?>"><?php echo $proj->activitytitle;?></a></td><td class="ttd"><a class="link" href=""><?php echo $proj->count;?></a></td>
									</tr>
									<?php } ?>
									
								</table>
								
								
					<?php }  ?>			
								
					</div>
									
              </div>  
              
