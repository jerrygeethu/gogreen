<link href="<?php echo $base;?>css/lightbox.css" rel="stylesheet" type="text/css" />  
		<script src="<?php echo $base;?>js/prototype.js" type="text/javascript"></script>
	<script src="<?php echo $base;?>js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="<?php echo $base;?>js/lightbox.js" type="text/javascript"></script>
	<script src="<?php echo $base;?>js/mootools.js" type="text/javascript"></script> 

                  <!--begin:news-->
                <div id="news">
                  <div class="news_head">
										<div class="latest_news">Latest News</div> 
										<div class="head_line"></div>
                  </div>
								<div class="clear"></div>
								<div class="news01">
									<?php
									//print_r($news_lst['result']);

									if((!empty($news_lst['totalrows'])) || ($news_lst['totalrows'])>0)
									{

										foreach($news_lst['result'] as $value)
										{
											$len=strlen($value->detail);
											
											if(!empty($value->photo))
											{
												$img=$base."images/news/".$value->photo;
												$imgsrc=$base."images/news/".$value->photo;
									?>
													<!--<div id="news01_img"></div>-->
											<div id="news_img"><img src="<?php echo $imgsrc;?>" width="106px" height="59px" alt=""/></div>
									<?php 
											}
									?>
										<p align="justify">
											<strong><?php echo ucfirst($value->topic);?></strong>											
												<?php 
													if($len>300)
													{
														echo ucfirst(truncate($value->detail,0,300));
														echo anchor($base.'index.php/admin/news_farming/'.$value->newsid, 'Read More >>', array('title' => 'News in detailes!'));
													}
													else
													{
														echo ucfirst($value->detail);
													}
												?>
											<form name="listnews" id="listnews" method="post" action="<?php echo $base;?>index.php/admin/addnews">
													<?php if( $this->session->userdata('status')=="admin")
			                                         { ?>
													<input type="submit" name="viewBtn" id="viewBtn" value="Edit"/>
													<?php } ?>
													<input type="hidden" name="newsid" id="newsid" value="<?php if(!empty($value->newsid)) echo $value->newsid;?>"/>
												</form>	
										</p>
										<div style="font-family:Arial;font-size:10px;color:#838383;">Posted on
											<?php 
												$date = date_create($value->posted); 
												echo date_format($date, 'd / m / Y , l');
											?>
										
										</div>
										<br/>
									<?php
										}
									?>
										
									<div align="right">
										<?php echo $link;?>
									</div>
									<?php 
								}
								else
						{
					?>
							<div align="center"> No Records found </div>
					<?php
						}
								?>	
										
								</div>
              </div>  
              
              
              
         <!-------begin:gallery------->
              <div id="gallery">
                <div class="gallery_head">
                
									<div id="gallery01">Gallery</div>
									<div class="gallery_head_line"></div>
									
                </div>
                <div class="clear"></div>
                     
									<div class="news_gallery">
									
										<?php 

									if((!empty($news_lst['totalrows'])) || ($news_lst['totalrows'])>0)
									{
											foreach($news_lst['result'] as $value)
											{
												if(!empty($value->photo))
														{
															$img=$base."images/news/".$value->photo;
															$imgsrc=$base."images/news/".$value->photo;
										?>
															<!--<div id="news01_img"></div>-->
															<a href="<?php echo $img;?>" rel="lightbox[mando]" id="<?php echo $value->photo;?>" >
															<img src="<?php echo $imgsrc;?>"  width="98" height="64" alt=""/>
														</a>
														<div class="lightboxDesc <?php echo $value->photo;?>">News Gallery</div>
													
													<script type="text/javascript"> 
														window.addEvent('domready',function(){
														Lightbox.init({descriptions: '.lightboxDesc', showControls: true});
														});
													</script>
															
										<?php 
													}
										
											}
										}
										?>
										
										
										
                     </div>
                      
                  </div>
                  <!--end:gallery-->        
                      

