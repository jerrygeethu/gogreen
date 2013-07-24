<div class="viewarea" style="width:600px;  float:left; margin-left:35px; border:#CCCCCC solid 1px; -webkit-border-radius:6px; -moz-border-radius:6px;">
<?php foreach($activity as $act)
{ } ?>

	<div style="width:500px;  float:left;">

<div class="font" style=" float:left;  width:200px; margin-top:20px; font-family:Arial, Helvetica, sans-serif; font-size:14px; margin-left:10px;"><b>Project:</b><?php echo $act->project;?></div>
<div style=" float:left; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Plot:</b><?php echo $act->plot;?> </div> 
<div style=" float:left; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Activity Date:</b><?php echo ymdtodmy($act->date);?></div> 
<div style=" float:left; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Activity:</b><?php echo $act->activity;?></div> 
<div style=" float:left; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>No.Of Workers:</b><?php echo $act->workers;?></div> 
<div style=" float:left; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Description:</b><?php echo $act->description;?></div> 
<div style=" float:left; margin-top:10px; margin-bottom:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Remarks:</b><?php echo $act->remarks;?></div> 



	 
    </div>
    <div style=" float:left; width:100px; height:100px;"></div> 
	
	
	</div>
