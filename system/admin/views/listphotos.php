<div class="viewarea" style="width:600px;  float:left; margin-left:35px; border:#CCCCCC solid 1px; -webkit-border-radius:6px; -moz-border-radius:6px;">
<div style="width:500px;  float:left;">
<?php 
$i=3;
 if(!empty($photo)) { 
foreach($photo as $ph)
{ 
 ?>


	 <div <?php if($i%3=="0") { ?> class="manageimg1" <?php } else { ?>class="manageimga" <?php } ?> >
	   <img src="<?php echo $base;?>/uploads/gallery/thumb/<?php echo $ph->thumb;?>" alt="img" style="border:solid 1px #000000;"/>
     </div>
     <div style=" float:left; height:20px;  width:40px; margin-top:60px; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:2px; color:#000000;">
     <a href="<?php echo $base;?>admin.php/gallery/deletephoto/<?php echo $ph->id;?>" onclick="confirm('Do you want to delete?');" style="color:#000000; float:left;"> Delete </a>
   	  </div>

     
     <?php  $i++;  } ?>

     <div style=" float:right; height:20px;  width:150px; margin-top:50px;">
	  <span style="float:right; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#99CC00; font-weight:bold;"> 
	  <?php print_r($page);?></span>
     	
     </div>
	 <?php }
   else
   {   echo "</br>";
	   echo " Photos are not found"; 
	   
   }
   
   
    ?>  
	 
    </div>
	<div style=" float:left; width:100px; height:100px;"></div> </div>
