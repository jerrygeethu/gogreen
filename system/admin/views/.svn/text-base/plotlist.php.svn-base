	<?php 
		if(!empty($plot)) 
		{ 
	?>
			<div class="contentarea1" style="width:800px;padding-bottom:20px;">	
				<div align="left" class="contentheader">
					<div style=" float:left; width:140px; height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Project</div>
					<div style=" float:left; width:180px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Owner</div>
					<div style=" float:left; width:170px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp;Plot  Description</div>
					<div style=" float:left; width:95px;  height:24px; padding-top:1px; border-right:2px solid #FFFFFF;"> &nbsp;Status</div>
					<div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Edit</div>
					<div style=" float:left; width:60px;  height:24px; padding-top:3px; padding-left:5px;border-right:2px solid #FFFFFF;">  Delete</div>
					<div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px;"> View </div>
				</div>
		<?php 
			foreach($plot as $pl)
			{ 
		?>
				<div align="left" class=" contentarea" ></div>
				<div align="left" class="contentmatter">
					<div align="left" style="font-size:12px;" >
						<div style=" float:left; width:135px; padding-left:6px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $pl->project;?></div>
						<div style=" float:left; width:180px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $pl->member;?></div>
						<div style=" float:left; width:170px;   padding-top:2px;  height:46px; border:#999999 solid 1px;">
							<?php
								if(!empty($pl->plot))
								{		 
									echo $pl->plot; echo ",";echo $pl->plotlocation; echo ",";echo $pl->plotextent;
								}		 
							?>
						</div>
						<div style=" float:left; width:95px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"> <?php echo $pl->plotstatus;?></div>
						<div style=" float:left; width:50px; padding-left:5px; height:48px; border:#999999 solid 1px;">
							<form action="<?php echo $base;?>admin.php/project/editplot" method="post" >
								<input type="hidden" name="plotid" id="plotid" value="<?php echo $pl->plotid;?>" />
								<input type="submit" name="input4" id="input4" value="Edit" style width="85px; background-color:#89c533;" />
							</form>
						</div>
						<div style=" float:left; width:62px; padding-left:3px; height:48px; border:#999999 solid 1px;">
							<form action="<?php echo $base;?>admin.php/project/deleteplot/<?php echo $pl->plotid;?>" method="post">
								<input type="submit" name="delete" id="delete" value="Delete" style="padding-left:5px;" width="85px; background-color:#89c533; " onclick="return confirm('Are you sure you want to delete?');"/> 
							</form>		
						</div>
						<div style=" float:left; width:75px; padding-left:5px; height:48px; border:#999999 solid 1px;">
							<form action="<?php echo $base;?>admin.php/project/viewplot/<?php echo $pl->plotid;?>" method="post">
								<input type="submit" name="view" id="view" value="View" style width="85px; background-color:#89c533;" />
							</form>
						</div>
					</div>
				</div>
			</div> 
		<?php 
			} 
		?>  
		<div style="font-size:12px; padding-top:5px; color:#00CC33" align="right"> 
		<p>&nbsp;</p><p><?php print_r($page);?></p>
</div> <br /><br />
<?php }
else
{
	  echo "Plots are not found";
}


?>



<div align="right" style="width:600px; height:100px; float:right;padding-bottom:500px;">


<div  style="float:right;"><form method="post" action="<?php echo $base;?>admin.php/project/addplot"> &nbsp;&nbsp;
<input type="submit" name="input5" id="input5" value="Add" class="input_box"/>
</form></div>

</div>
</div>
</div> 
