
                  <!--begin:news-->
                 <div id="news">
                    <div class="news_head">
                      <div class="latest_news">Latest News</div> 
                      <div class="head_line">
                      </div>
                    </div>
                   <div class="clear"></div>
                   <div class="news01">
										<div align="right">
										<?php
											echo anchor($base.'index.php/admin/news', 'Back to News Updates', array('title' => 'News Updates!'));
										?>
										</div>
										<?php
											if(!empty($news['result']->photo))
											{
												$img=$base."images/news/".$news['result']->photo;
												$imgsrc=$base."images/news/".$news['result']->photo;
										?>
												<div id="news_img"><img src="<?php echo $imgsrc;?>" width="106px" height="59px" alt=""/></div>
										<?php
											}
										?>
											<p align="justify">
												<strong><?php  echo ucfirst($news['result']->topic);?></strong>
																<?php  echo $news['result']->detail;?>
																
												<div style="font-family:Arial;font-size:10px;color:#838383;">Posted on  
													<?php 
														$date = date_create($news['result']->posteddate); 
														echo date_format($date, 'd / m / Y , l');
													?>
												</div>
											</p>
                   </div>
                  </div>
                 
                 <!--end:news-->
