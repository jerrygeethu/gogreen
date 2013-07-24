<?php 
	if(!empty($list)) 
	{ 
?>
		<div class="contentarea1" style="width:800px;padding-bottom:20px;">
			<div align="left" class="contentheader">
				<div style=" float:left; width:140px; height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Project</div>
				<div style=" float:left; width:180px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Plot</div>
				<div style=" float:left; width:170px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Crop</div>
				<div style=" float:left; width:95px;  height:24px; padding-top:1px; border-right:2px solid #FFFFFF;"> &nbsp;Number</div>
				<div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Image</div>
				<div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Edit</div>
				<div style=" float:left; width:70px;  height:24px; padding-top:3px; padding-left:5px;">  Delete</div>
			</div>
			<?php 
				foreach($list as $li) 
				{ 
			?>
					<div align="left" class=" contentarea" ></div>
					<div align="left" class="contentmatter">
						<div align="left" style="font-size:12px;" >							
							<div style=" float:left; width:135px; padding-left:6px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $li->project;?></div>
							<div style=" float:left; width:180px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $li->plot;?></div>
							<div style=" float:left; width:170px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"> <?php echo $li->crop;?></div>
							<div style=" float:left; width:95px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"><?php echo $li->number;?></div>
							<div style=" float:left; width:55px;   padding-top:2px;  height:46px; border:#999999 solid 1px;">
								<img src="<?php echo $base;?>/uploads/risk/<?php echo $li->image;?>" width="50" height="45"/>
							</div>
						   <div style=" float:left; width:50px; padding-left:5px; height:48px; border:#999999 solid 1px;">
							   <form action="<?php echo $base;?>admin.php/risk/editrisk/<?php echo $li->riskid;?>" method="post">
									<input type="hidden" name="limit" id="limit" value="<?php echo $limit;?>" />
									<input type="submit" name="edit" id="edit" value="Edit" style width="85px; background-color:#89c533;" />
								</form> 
							</div> 
							<div style=" float:left; width:85px; padding-left:3px; height:48px; border:#999999 solid 1px;">		 
								<form action="<?php echo $base;?>admin.php/risk/deleterisk/<?php echo $li->riskid;?>" method="post">
									<input type="submit" name="delete" id="delete" value="Delete" style="padding-left:5px;" width="85px; background-color:#89c533;"  onclick="return confirm('Are you sure you want to delete?');"/>		
								</form>
							</div>  
						</div>
					</div>          
			<?php 
				} 
			?> 
			<div style="font-size:12px; padding-top:5px; color:#00CC33" align="right"><p>&nbsp;</p><p><?php print_r($page);?></p></div><br /><br/>
		</div>
<?php 
	}
	else
	{
		echo "Risks are not found"; 
	}   
?>  

<div align="right" style="width:600px; height:100px; float:right;padding-bottom:500px;">
<div  style="float:right;">
 &nbsp; &nbsp;
 <form action="<?php echo $base;?>admin.php/risk/addrisk" method="post">
  <input type="submit" name="add" id="add" value="Add" class="input_box"/>
  </form>
  </div>

  
</div>


</div>
</div> 
