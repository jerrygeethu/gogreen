<?php if(!empty($news)) { ?>
<div class="contentarea1" style="width:800px;padding-bottom:20px;">
<div align="left" class="contentheader">
	   

        <div style=" float:left; width:140px; height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> Title</div>
        <div style=" float:left; width:180px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;">  Description</div>
        <div style=" float:left; width:173px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;">  Category</div>
        <div style=" float:left; width:93px;  height:24px; padding-top:1px; border-right:2px solid #FFFFFF;"> News Date</div>
        <div style=" float:left; width:48px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Edit</div>
        <div style=" float:left; width:60px;  height:24px; padding-top:3px; padding-left:5px;border-right:2px solid #FFFFFF;">  Delete</div>
        <div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px;"> View </div>
</div>

  

<div align="left" class=" contentarea" ></div>


<?php foreach($news as $ns) { ?>     
<div align="left" class="contentmatter">
<div align="left" style="font-size:12px;" >
		
        <div style=" float:left; width:135px; padding-left:6px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $ns->title;?></div>
        <div style=" float:left; width:180px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo truncate($ns->news,0,30);?></div>
        <div style=" float:left; width:173px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"> <?php echo $ns->category;?></div>
        <div style=" float:left; width:93px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"> <?php echo ymdtodmy($ns->newsdate);?></div>
       <div style=" float:left; width:48px; padding-left:5px; height:48px; border:#999999 solid 1px;">
        <form name="frm" action="<?php echo $base;?>admin.php/news/editnews/<?php echo $ns->newsid;?>/<?php echo $limit;?>" method="post">
		  <input type="submit" name="edit" id="edit" value="Edit" style width="85px; background-color:#89c533;" />
		  </form>
        </div>
         <div style=" float:left; width:62px; padding-left:3px; height:48px; border:#999999 solid 1px;"> 
		 
		 <form action="<?php echo $base;?>admin.php/news/deletenews/<?php echo $ns->newsid;?>/<?php echo $limit;?>" method="post">
      <input type="submit" name="delete" id="delete" value="Delete" style="padding-left:5px;" width="85px;background-color:#89c533;" onclick="return confirm('Are you sure you want to delete?');" /> 

		</form>
		 
		 
		
		
		
		</div>
        <div style=" float:left; width:75px; padding-left:5px; height:48px; border:#999999 solid 1px;">
		<form action="<?php echo $base;?>admin.php/news/viewnews/<?php echo $ns->newsid;?>" method="post"> 
      <input type="submit" name="view" id="view" value="View" style width="85px; background-color:#89c533;" />

       </form> 
        </div>
        
    </div>
    </div>   
<?php } ?>
    
 <div style="font-size:12px; padding-top:5px; color:#00CC33" align="right"> 
   <p>&nbsp;</p>
   
   <p><?php print_r($page);?>
</p>
 </div>   
    
        

<br /><br />



</div>

</div>
<?php }
   else
   {
	   echo "<div style='padding-bottom:500px;'>News are not found</div>"; 
	   
   }
   
   
    ?>
</div> <br /><br /><br />
