                  <!--begin:news-->
                <div id="Message">
                  <div class="news_head">
				  
			   <div class="latest_news">Activity Details</div> 
										
                  </div><div class="clear"></div>
								<div class="message_right" style="margin-left:10px;margin-right:10px;">
								<div  style="text-align:right;"><a href="<?php echo $base;?>index.php/admin/viewprojects/<?php echo $page;?>" class="projmore">Back To Project List</a></div>
				  
				  <?php 
				 
				  if(!empty($projectrow))
				  {
					  foreach($projectrow->result() as $projectrow)
					  {
					  }
					  
				  ?>
								
									<div style="margin-top:15px;">
											<strong><?php echo $projectrow->title;?></strong>	</div>										
										
									<div style="margin-top:5px; margin-bottom:5px;text-align:justify;line-height:18px;" >
									<?php echo $projectrow->data;									
										
									?>
									</div>
									<div style="margin-top:5px; margin-bottom:5px;text-align:justify;line-height:18px;" >
									<b>create Date : </b><?php echo $projectrow->createdate;									
										
									?>
									</div>
									
									
									
									<?php } ?>
								
					</div>
									
              </div>  
              
