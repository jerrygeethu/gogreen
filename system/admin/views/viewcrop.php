<div class="viewarea" style="width:600px;  float:left; margin-left:35px; border:#CCCCCC solid 1px; -webkit-border-radius:6px; -moz-border-radius:6px;">
<?php foreach($crop as $cp)
{ } ?>

	<div style="width:500px;  float:left;">
	 <div class="userimg"> 
   	   <div align="right" style="width:90px; height:90px;  margin-top:15px;"><img src="<?php echo $base;?>/uploads/crop/<?php echo $cp->photo;?>" alt="avatar" width="74" height="83" align="left" /></div>
      <!-- <div class="urnme" > &nbsp;Admin</div>-->
     </div>
     <div class="font" style=" float:left;  width:200px; margin-top:60px; font-family:Arial, Helvetica, sans-serif; font-size:14px; margin-left:10px; font-weight:bold;"><?php echo $cp->crop;?></div>
     <div style=" float:left; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><?php echo $cp->description;?> </div> 



	 
    </div>
    <div style=" float:left; width:100px; height:100px;"></div> 
	
	
	</div>
