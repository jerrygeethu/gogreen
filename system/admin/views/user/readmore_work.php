<form name="readmore_work" id="readmore_work" action = "<?php echo $base;?>admin.php/user/activity/workhistory" >
	<div class="composebox">
		<?php 
			foreach($worker_details  as $worker_details1)
			{
		?>
				<div class="inbox-read">
					<div class="news_img"> <img src="<?php echo $base;?>images/news/<?php echo $worker_details1['mainphoto'];?>" class = "news_img"/></div>  
					<div class="linebx" style="margin-top:5px;"> <h3><u><?php echo $worker_details1['title'];?></u></h3> </div></br>
				</div></br></br>
				<div class="inbox-readtxt"><p> <?php echo $worker_details1['data'];?></p> <br /></div>
		<?php
			}
		?>
	</div>
	
	<div class="composebox_back">
		<a href = "<?echo $base;?>admin.php/user/activity/workhistory" class ="input_box" style = "color:white;"/><center>Back</center></a>
	</div> 
	
	<div style="clear:both;"></div>   
	</div>
	</div>
</form>
