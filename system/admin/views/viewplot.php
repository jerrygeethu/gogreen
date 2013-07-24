<div class="viewarea" style="width:600px;  float:left; margin-left:35px; border:#CCCCCC solid 1px; -webkit-border-radius:6px; -moz-border-radius:6px;">
<?php foreach($list as $li)
{ }  ?>

	<div style="width:500px;   float:left;">
	 <div class="userimg"> 
   	   <div align="right" style="width:90px; height:90px;  margin-top:15px;">

<img src="<?php echo $base;?>/uploads/project/<?php echo $li->mainphoto;?>" alt="avatar" width="74" height="83" align="left" />

<img src="<?php echo $base;?>/uploads/project/<?php echo $li->subphoto;?>" alt="avatar" width="74" height="83" align="left" />

	   
	   </div>
      <!-- <div class="urnme" > &nbsp;Admin</div>-->
     </div>
<div class="font" style=" float:left; height:20px;  width:200px; margin-top:60px; font-family:Arial, Helvetica, sans-serif; font-size:14px; margin-left:10px; font-weight:bold;"><b>Project:</b><?php echo $li->project;?></div>
<div style=" float:left; height:20px; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"> <b>Plot:</b><?php echo $li->plot;?> </div> 

<div style=" float:left; height:20px; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Owner:</b><?php echo $li->member;?></div>
<div style=" float:left; height:20px; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Extent:</b><?php echo $li->plotextent;?></div>
<div style=" float:left; height:20px; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Location:</b><?php echo $li->plotlocation;?></div>        
<div style=" float:left; height:20px; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Description:</b><?php echo $li->plotdescription;?></div>        
<div style=" float:left; height:20px; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Remarks:</b><?php echo $li->plotremarks;?></div>        
<div style=" float:left; height:20px; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Status:</b><?php echo $li->plotstatus;?></div>        
    
        
    </div>
    <div style=" float:left; width:100px; height:100px;"></div> </div>

