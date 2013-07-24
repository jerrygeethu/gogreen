<?php 
	if(!empty($crop)) 
	{ 
?>
		<div class="contentarea1" style="width:750px; padding-left:30px;padding-bottom:20px;"><br />
			<div style="width:660px; height:auto; ">
				<div class="cropview"> 
					<div align="left" class="contentheader">

						<div class="crop"> &nbsp;Crop</div>
						<div class="images">  &nbsp;Images</div>
						<div class="status">Description </div>
						<div  class="view"> &nbsp; View </div>
						<div class="edit"> &nbsp; Edit</div>
						<div class="delete"> &nbsp; Delete</div>

						<?php 
							foreach($crop as $cp) 
							{ 
						?>	
								<div style="width:655px; height:100px; border:#999999 solid 1px;">       
									<div class="crop_text "> &nbsp;<?php echo $cp->crop;?></div>  
									<div class="imagesize"><img style="padding:3px;" src="<?php echo $base;?>uploads/crop/<?php echo $cp->photo;?>" alt="img" width="70" height="59" /></div>
									<div class="status_text"><?php echo $cp->description;?></div>
									<div class="viewitem" > 
										<form name="frm" action="<?php echo $base;?>admin.php/activity/viewcrop/<?php echo $cp->id;?>/<?php echo $limit;?>" method="post">
											<input type="submit" name="input4" id="input4" value="View" /> 
										</form>
									</div>
									<div class="viewitem" >
										<form name="frm" action="<?php echo $base;?>admin.php/activity/editcrop/<?php echo $cp->id;?>/<?php echo $limit;?>" method="post">
											<input type="submit" name="edit" id="edit" value="Edit" style width="85px; background-color:#89c533;" />
										</form>
									</div>
									<div class="viewitem" > 
										<form action="<?php echo $base;?>admin.php/activity/deletecrop/<?php echo $cp->id;?>" method="post">
											<input type="submit" name="delete" id="delete" value="Delete" style="padding-left:5px;" width="85px; background-color:#89c533;"  onclick="return confirm('Are you sure you want to delete?');"/>		
										</form>
									</div>
								</div>
						<?php 
							} 
						?>
					</div>
				<div class="cl"></div>
				<div style="font-size:12px; padding-top:5px; color:#00CC33" align="right"> <p>&nbsp;</p><p><?php print_r($page);?></p></div> 
				<div class="cl"></div> <br /> <br /></div>
			</div>
		</div>
<?php 
	}
	else
	{
	echo "<div>Crops are not found</div>";
	}
?>


<div align="right" style='padding-bottom:500px;'>
<form method="post" action="<?php echo $base;?>admin.php/activity/cropadd">
<input type="submit" name="add" id="add" value="Add" class="input_box"/> &nbsp; &nbsp;
</form>

</div>


</div>
</div> <br /><br /><br />

