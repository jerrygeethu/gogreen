<div class="contentarea1" style="width:800px;padding-bottom:20px;">
<?php if(!empty($list)) { ?>
<div align="left" class="contentheader">
	   

        <div style=" float:left; width:140px; height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Name</div>
        <div style=" float:left; width:180px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Email</div>
        <div style=" float:left; width:170px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Mobile</div>
        <div style=" float:left; width:95px;  height:24px; padding-top:1px; border-right:2px solid #FFFFFF;"> &nbsp;Date</div>
        <div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Edit</div>
        <div style=" float:left; width:60px;  height:24px; padding-top:3px; padding-left:5px;border-right:2px solid #FFFFFF;">  Delete</div>
        <div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px;"> View </div>
</div>

  <?php foreach($list as $li) { ?>

<div align="left" class=" contentarea" ></div>
        
  <div align="left" class="contentmatter">
<div align="left" style="font-size:12px;" >
	
        <div style=" float:left; width:135px; padding-left:6px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $li->name;?></div>
        <div style=" float:left; width:180px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $li->email;?></div>
        <div style=" float:left; width:170px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"> <?php echo $li->mobile;?></div>
        <div style=" float:left; width:95px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"><?php echo ymdtodmy($li->date);?></div>
       <div style=" float:left; width:50px; padding-left:5px; height:48px; border:#999999 solid 1px;">
	   <form action="<?php echo $base;?>admin.php/member/editmember" method="post">
	   <input type="hidden" name="limit" id="limit" value="<?php echo $limit;?>" />
	   <input type="hidden" name="id" id="id" value="<?php echo $li->memberid;?>" /> 
          <input type="submit" name="edit" id="edit" value="Edit" style width="85px; background-color:#89c533;" />
		 </form> 
        </div>
			 

         <div style=" float:left; width:62px; padding-left:3px; height:48px; border:#999999 solid 1px;">
		 
		<form action="<?php echo $base;?>admin.php/member/deletemember/<?php echo $li->memberid;?>" method="post">
        <input type="submit" name="delete" id="delete" value="Delete" style="padding-left:5px;" width="85px; background-color:#89c533;"  onclick="return confirm('Are you sure you want to delete?');"/>		
		
		</form>
		 </div>
        <div style=" float:left; width:75px; padding-left:5px; height:48px; border:#999999 solid 1px;">
		<form action="<?php echo $base;?>admin.php/member/viewmember/<?php echo $li->memberid;?>" method="post"> 
          <input type="submit" name="input4" id="input4" value="View" style width="85px; background-color:#89c533; "/>
       </form> 
	   
	    </div>
        
    </div>
    </div>   

        
<?php } ?>
     
      
    
    
 
       
    
    
 
 <div style="font-size:12px; padding-top:5px; color:#00CC33" align="right"> 
   <p>&nbsp;</p>
   
   <p>
   <?php print_r($page);?>
   </p>
 </div>   
    
        

<br /><br />


<?php }
   else
   {
	   echo "Members are not found"; 
	   
   }
   
   
    ?>


</div>
</div> 
