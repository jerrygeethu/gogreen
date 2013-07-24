
<form name="crop_details">
<div style="width:520px; float:left;">
 <div class="heading"> <hi>Activity Crop details </div>
            <?php
            if(!empty($crop_details))
            {
				?>
        <div class="middlesection">
 		<div class="middleheader">
 		
        	<div class="headertext" align="center">Sl.No </div>
        	<div class="headerline"> </div>
        	<div class="headertext" align="center">Crop </div>
        	<div class="headerline"> </div>
        	<div class="headertext1" align="center">Description </div>
        	<div class="headerline"> </div>
        	<div class="headertext" align="center">Image</div>
        </div>     
<?php
				foreach($crop_details as $crop)
				{
					$start= $start+1;
					$link1  = "<div class='listtext' align='center'>".$start."</div>
					<div class='listtext' align='center'>".$crop['crop']."</div>
					<div class='listtext1' align='center'>".substr($crop['description'],0,12)."...</div>
					<div class='listtext' align='center'> <img src=".$base.'uploads/crop/'.$crop['photo']." style='height:25px;width:25px;'/></div>
					<div class = 'linebx' style = 'width:500px;margin-left:10px;'></div>";
					echo  anchor($base.'admin.php/user/activity/readmore_crop/'.$crop['id'],$link1);
				}
		?>
   </div>
   <?php
	}
			else
			{
				?>
				<div style="padding:50px;"><?php echo "There are no crop details available now. It will be updated soon.";?></div>
		<?php
			}
			?>
	
      <div class="composebox_back"> 
		<div class="pagination" align = "right"><?echo $page;?></div>
	</div>
   		
   </div>
   </form>  
 
    


