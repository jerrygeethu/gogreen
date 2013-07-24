<?php 
	if(!empty($plant)) 
	{ 
?>
		<div class="contentarea1" style="width:800px;padding-bottom:20px;">
			<div align="left" class="contentheader">
					<div style=" float:left; width:150px; height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Plot</div>
					<div style=" float:left; width:190px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Crop</div>
					<div style=" float:left; width:170px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Number</div>
					<div style=" float:left; width:95px;  height:24px; padding-top:1px; border-right:2px solid #FFFFFF;"> &nbsp;Date</div>
					<div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Edit</div>
					<div style=" float:left; width:60px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Delete</div>
					<div style=" float:left; width:45px;  height:24px; padding-top:3px; padding-left:5px;"> View </div>
			</div>
			<?php 
				foreach($plant as $pt) 
				{ 
			?>
					<div align="left" class=" contentarea" ></div>							
					<div align="left" class="contentmatter">
						<div align="left" style="font-size:12px;" >
							<div style=" float:left; width:145px; padding-left:6px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $pt->plot;?></div>
							<div style=" float:left; width:190px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $pt->crop;?></div>
							<div style=" float:left; width:170px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"> <?php echo $pt->number;?></div>
							<div style=" float:left; width:95px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"><?php echo ymdtodmy($pt->date);?></div>
							<div style=" float:left; width:50px; padding-left:3px; padding-right:2px;  height:48px; border:#999999 solid 1px;">
								<form action="<?php echo $base;?>admin.php/plant/editplant/<?php echo $pt->plantid;?>" method="post">
									<input type="hidden" name="limit" id="limit" value="<?php //echo $limit;?>" />
									<input type="submit" name="edit" id="edit" value="Edit" style width="85px; background-color:#89c533;" />
								</form> 
							</div>
							<div style=" float:left; width:62px; padding-left:3px; height:48px; border:#999999 solid 1px;">		 
								<form action="<?php echo $base;?>admin.php/plant/deleteplant/<?php echo $pt->plantid;?>" method="post">
								<input type="submit" name="delete" id="delete" value="Delete" style="padding-left:3px; padding-right:2px; " width="85px; background-color:#89c533;"  onclick="return confirm('Are you sure you want to delete?');"/>		
							</form>
						</div>
						<div style=" float:left; width:50px; padding-left:3px; padding-right:2px; height:48px; border:#999999 solid 1px;">
							<form action="<?php echo $base;?>admin.php/plant/viewplant/<?php echo $pt->plantid;?>" method="post"> 
								<input type="submit" name="view" id="view" value="View" style width="85px; background-color:#89c533; "/>
							</form> 
						</div>        
					</div>
			<?php 
				} 
			?> 
			<div style="font-size:12px; padding-top:5px; color:#00CC33" align="right"> <p>&nbsp;</p><p><?php print_r($page);?></p></div><br /><br />
		</div>  
<?php 
	}
	else
	{
		echo "Plants are not found"; 
	}
?>
    
    <div align="right" style="width:600px; height:100px; float:right;padding-bottom:500px;">
<div  style="float:right;">
 &nbsp; &nbsp;
 <form action="<?php echo $base;?>admin.php/plant/addplant" method="post">
  <input type="submit" name="add" id="add" value="Add" class="input_box"/>
  </form>
  </div>

  
</div>

</div>
</div> 
