<form name="readmore_work" id="readmore_work" action = "<?php echo $base;?>admin.php/user/activity/risk_management" >
	<div class="composebox">
		<?php 
/*
			foreach($risk_details  as $risk_details1)
			{
*/
				
?>
				<div class="inbox-read">
					<div class="news_img"> <img src="<?php echo $base;?>uploads/project/<?php echo $risk_details->image;?>" class = "news_img"/></div><br/><br/>
					<div class="linebx" style="margin-top:5px;"> <h3><u><?php echo $risk_details->crop;?></u></h3> </div></br>
				</div></br>
				<div class="inbox-readtxt">
					<div><?php echo "<b>No Of Workers :</b>".$risk_details->number;?></div>
					<div><?php echo "<b>PlantName :</b>".$risk_details->title;?></div><br/>
					<div><u><b>Details of the Crop :</b></u></div>
					<p> <?php echo $risk_details->details;?></p> <br />
				</div>
		<?php
/*
			}
*/
		?>
	</div>
	
	<div class="composebox_back">
		<a href = "<?echo $base;?>admin.php/user/activity/risk_management" class ="input_box" style = "color:white;"/><center>Back</center></a>
	</div> 
	
	<div style="clear:both;"></div>   
	</div>
	</div>
</form>

