<?php if(!empty($list)) { ?>
<div class="contentarea1" style="width:800px;padding-bottom:20px;">
<div align="left" class="contentheader">
	   

        <div style=" float:left; width:140px; height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Title</div>
        <div style=" float:left; width:180px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Location</div>
        <div style=" float:left; width:170px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Extent</div>
        <div style=" float:left; width:95px;  height:24px; padding-top:1px; border-right:2px solid #FFFFFF;"> &nbsp;Status</div>
        <div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Edit</div>
        <div style=" float:left; width:60px;  height:24px; padding-top:3px; padding-left:5px;border-right:2px solid #FFFFFF;">  Delete</div>
        <div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px;"> View </div>
</div>

  

<div align="left" class=" contentarea" ></div>
        
		
	<?php 
   
	foreach($list['result'] as $li)
	{ ?>	
		
		
<div align="left" class="contentmatter">
<div align="left" style="font-size:12px;" >
		
        <div style=" float:left; width:135px; padding-left:6px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $li->title;?></div>
        <div style=" float:left; width:180px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $li->location;?></div>
        <div style=" float:left; width:170px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"> <?php echo $li->extent;?></div>
        <div style=" float:left; width:95px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"> <?php echo $li->status;?></div>
       <div style=" float:left; width:50px; padding-left:5px; height:48px; border:#999999 solid 1px;">
	   <form method="post" action="<?php echo $base;?>admin.php/project/viewproject/<?php echo $li->projectid;?>">
          <input type="submit" name="edit" id="edit" value="Edit" style width="85px; background-color:#89c533;" />
		 </form> 
        </div>
         <div style=" float:left; width:62px; padding-left:3px; height:48px; border:#999999 solid 1px;"> 
		<form action="<?php echo $base;?>admin.php/project/deleteproject/<?php echo $li->projectid;?>" method="post">
        <input type="submit" name="delete" id="delete" value="Delete" onclick="return confirm('Are you sure you want to delete?');" style="padding-left:5px;" width="85px; background-color:#89c533;" />
		</form>
		
		</div>
        <div style=" float:left; width:75px; padding-left:5px; height:48px; border:#999999 solid 1px;">
		<form action="<?php echo $base;?>admin.php/project/projectview/<?php echo $li->projectid;?>" method="post">
        <input type="submit" name="view" id="input4" value="View" style width="85px; background-color:#89c533;" />
  </form>
		</div>
        
    </div>
    </div>   
    <?php } ?>
          
      
    
    
 
       
    
    
 
 <div style="font-size:12px; padding-top:5px; color:#00CC33" align="right"> 
   <p>&nbsp;</p>
   
   <p  class="gl">
   <?php print_r($page); ?>
   </p>
   
 </div>   
    
        

<br /><br />



</div>

</div>
<?php }
   else
   {
	    echo "<div style='padding-bottom:500px;'>Projects are not found</div>";
	   
   }
   
   
    ?>
</div> <br /><br /><br />
