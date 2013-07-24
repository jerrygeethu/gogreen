<div class="viewarea" style="width:600px;  float:left; margin-left:35px; border:#CCCCCC solid 1px; -webkit-border-radius:6px; -moz-border-radius:6px;">
<?php foreach($list as $li)
{ } ?>

	<div style="width:500px;  float:left;">
	 <div class="userimg"> 
   	   <div align="right" style="width:90px; height:90px;  margin-top:15px;"><img src="<?php echo $base;?>/uploads/news/<?php echo $li->photo;?>" alt="avatar" width="74" height="83" align="left" /></div>
      <!-- <div class="urnme" > &nbsp;Admin</div>-->
     </div>
     <div class="font" style=" float:left;  width:200px; margin-top:60px; font-family:Arial, Helvetica, sans-serif; font-size:14px; margin-left:10px; font-weight:bold;"><?php echo $li->title;?></div>
     <div style=" float:left; margin-top:10px; margin-left:12px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"> <?php echo $li->news;?> </div> 
     <div style=" float:left;  margin-top:10px; margin-left:120px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Author:</b><?php echo $li->author;?> </div>
	 <div style=" float:left;  margin-top:10px; margin-left:120px; width:300px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>Remarks:</b><?php echo $li->remarks;?></br> </br></br></div>


	 
    </div>
    <div style=" float:left; width:100px; height:100px;"></div> 
	
	
	</div>

