<form name="news_updates" id="news_updates" method="post">	
	<div class="composebox_news">
		<?php
			if(!empty($news_data))
			{
				foreach($news_data as $news)
				{
					$y = substr($news['newsdate'],0,4);
					$m = url_title(substr($news['newsdate'],5,2));
					$d = substr($news['newsdate'],8,2);
		?> 

					<div class="inbox-read">
						<div class="datebox"> &nbsp; <?php echo $d."/".$m;?>  </div>
						<div class="daybox">
							<?php echo $news['day'];?>
							<p><?php echo $y;?> </p></div>
							<div class="updatetxt">
								<span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#4c6d1d; font-weight:bold;"><?php echo $news['title'];?></span>
								<p>
									<?php echo substr($news['news'],0,130)."....";?>
									<a href = "<?php echo $base;?>admin.php/user/news/news_read/<?php echo $news['newsid'];?>"><span style="font-family:Arial, Helvetica, sans-serif; font-style:italic; font-size:15px; color:#4c6d1d;"> Read More>> </span></a>
								</p>
							</div>
							<div class="linebx"></div>
						</div> 
					<!--</div> -->
		<?php 
				}
			}
			else
			{
				echo "<span style='margin-left:22px;'>There are no News available now. It will be updated soon.</span>";
			}
		?>
	</div>
	<div class="composebox_back"> 
		<div class="pagination" align = "right"><?echo $page;?></div>
	</div>
	<div style="clear:both;"></div>  
</form >
</div>
</div>
