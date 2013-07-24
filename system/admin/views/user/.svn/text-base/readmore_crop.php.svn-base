<form name="readmore_crop" id="readmore_crop" action = "<?php echo $base;?>admin.php/user/activity/crop_details" >
	<div class="composebox">
		<?php 
			foreach($crop_details  as $crop_details1)
			{
		?>
				<div class="inbox-read">
					<div class="news_img"> <img src="<?php echo $base;?>uploads/crop/<?php echo $crop_details1['photo'];?>" class = "news_img"/></div>  
					<div class="linebx" style="margin-top:5px;"> <h3><u><?php echo $crop_details1['crop'];?></u></h3> </div></br>
				</div> </br></br>
				<div class="inbox-readtxt"><p> <?php echo $crop_details1['description'];?></p> <br /></div>
		<?php
			}
		?>
	</div>
	
	<div class="composebox_back">
		<a href = "<?echo $base;?>admin.php/user/activity/crop_details" class ="input_box" style = "color:white;"/><center>Back</center></a>
	</div> 
	
	<div style="clear:both;"></div>   
	</div>
	</div>
</form>
