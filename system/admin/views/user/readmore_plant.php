<form name="readmore_plant" id="readmore_plant" action = "<?php echo $base;?>admin.php/user/activity/plant_history" >
	<div class="composebox">
		<?php 
			foreach($plant_details  as $plant_details1)
			{
		?>
				<div class="inbox-read">
					<!--<div class="news_img"> <img src="<?php //echo $base;?>uploads/crop/<?php //echo $plant_details1['photo'];?>" class = "news_img"/></div>  -->
					<div style="margin-top:5px;"> <h3><u><?php echo $plant_details1['title'];?></u></h3> </div></br>
				</div> </br></br>
				<div class="inbox-readtxt">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $plant_details1['details'];?></p> <br />
				</div> 
		<?php
			}
		?>
	</div>
	
	<div class="composebox_back">
		<a href = "<?echo $base;?>admin.php/user/activity/plant_history" class ="input_box" style = "color:white;"/><center>Back</center></a>
	</div> 
	
	<div style="clear:both;"></div>   
	</div>
	</div>
	
</form>

