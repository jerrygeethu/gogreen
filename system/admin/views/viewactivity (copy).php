<script type="text/javascript" >
function getplot(projectid)
{
	var base="<?php echo $base;?>";
	
	
	
	 $('#plot').load(""+base+"admin.php/risk/getplot/"+projectid+"",function(str){
		 
     
     });
	 if(projectid!="")
	 {
	 $('#plotdiv').show();
     }
	 else
	 {
		 $('#plotdiv').hide();
	 }
	
 }
 </script>
<div class="act_contara1"> 
<form method="post" action="<?php echo $base;?>admin.php/activity/search">
<div align="left" class="contentheader1"> Search area  <br /> 
  <div class="font" style=" float:left; height:20px;  width:90px; padding-top:20px; padding-left:10px;"> Date:  </div>
<div style=" float:left; height:20px;  width:250px; margin-top:13px;">   
 <input tabindex="5" style="width:250px; " type="text" name="date" id="date" value=""/>  </div>

<div style=" float:left; height:30px;  width:30px; margin-top:13px; margin-left:8px;">
 <img src="<?php echo $base;?>images/calendar.png" onclick="displayDatePicker('date')" alt="calender" width="26" height="26" border="0" />

 </div>
<div class="cl"></div> <br />
	<div class="font" style=" float:left; height:20px;  width:90px; padding-left:10px;"> Projects:  </div>
	<div style=" float:left; height:20px;  width:250px;">   
		<select  style="width:252px;"  name="project" id="project" onchange="getplot(this.value);">
        <option value="">Select Project</option>
		<?php foreach($project as $pr) {  ?>
		
		<option value="<?php echo $pr->projectid;?>"><?php echo $pr->title;?></option>
		
		
		<?php } ?>
			
			
			
			
 
  
</select> 

 </div>
<div class="cl"></div> <br />
<div id="plotdiv" style="display:none;">
	<div class="font" style=" float:left; height:20px;  width:100px;"> Plots:  </div>
	<div style=" float:left; height:20px;  width:250px;">  
	 <select name="plot" id="plot" style="width:252px;">
  
  
</select>  </div>
<div class="cl"></div> <br /></div>

	<div align="center"><input type="submit" name="search" id="search" value="Search" class="input_box"/> </div> <br />

 </div>

</form>
<br />

<div class="contentarea1" style="width:790px;">

<?php if(!empty($activity)) { ?>
<div align="left" class="contentheader" style="width:696px;">
	   
 
        <div style=" float:left; width:72px; height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Date</div>
        <div style=" float:left; width:100px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Projects</div>
        <div style=" float:left; width:130px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Plot</div>
        <div style=" float:left; width:105px;  height:24px; padding-top:1px; border-right:2px solid #FFFFFF;"> &nbsp; Activity</div>
        <div style=" float:left; width:95px;  height:24px; padding-top:1px; border-right:2px solid #FFFFFF;"> &nbsp; Workers</div>
        <div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Edit</div>
        <div style=" float:left; width:60px;  height:24px; padding-top:3px; padding-left:5px; border-right:2px solid #FFFFFF;">  Delete</div>
        <div style=" float:left; width:50px;  height:24px; padding-top:3px; padding-left:5px;"> View </div>
</div>

  
<?php

 foreach($activity as $act)
{ 
	?>
<div align="left" class=" contentarea" ></div>
        
  <div align="left" class="contentmatter">
<div align="left" style="font-size:12px;" >
  <div style=" float:left; width:67px; padding-left:6px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo ymdtodmy($act->date);?></div>
        <div style=" float:left; width:100px;  padding-top:2px; height:46px; border:#999999 solid 1px;"><?php echo $act->project;?></div>
        <div style=" float:left; width:130px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"><?php echo $act->plot;?></div>
        <div style=" float:left; width:105px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"><?php echo $act->activity;?></div>
         <div style=" float:left; width:95px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"><?php echo $act->workers;?></div>
       <div style=" float:left; width:50px; padding-left:5px; height:48px; border:#999999 solid 1px;">
	   <form id="frm" name="frm" action="<?php echo $base;?>admin.php/activity/activityedit/<?php echo $act->actid;?>/<?php echo $act->workid;?>" method="post">
          <input type="submit" name="edit" id="edit" value="Edit" style width="85px; background-color:#89c533;" />
		  
		  </form>
        </div>
         <div style=" float:left; width:62px; padding-left:3px; height:48px; border:#999999 solid 1px;"> 
		 
  <form action="<?php echo $base;?>admin.php/activity/deleteactivity/<?php echo $act->actid;?>/<?php echo $act->workid;?>" method="post">
        <input type="submit" name="delete" id="delete" value="Delete" style="padding-left:5px;" width="85px; background-color:#89c533;"  onclick="return confirm('Are you sure you want to delete?');"/>		
		
		</form>		
		
		 </div>
        <div style=" float:left; width:55px; padding-left:5px; height:48px; border:#999999 solid 1px;">
<form id="frm" name="frm" action="<?php echo $base;?>admin.php/activity/activityview/<?php echo $act->actid;?>/<?php echo $act->workid;?>" method="post">
<input type="submit" name="view" id="view" value="View" style="width:55px;" />
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
           
 
   <?php }
   else
   {
	   echo "Activities are not found"; 
	   
   }
   
   
    ?>  
    <div align="center">
	<a href="<?php echo $base;?>admin.php/activity/activityadd">
      <input type="submit" name="input3" id="input3" value="Add" class="input_box" style="float:right; margin-right:90px;"/></a>
       
      
</div>
</div>


</div>
</div> <br /><br /><br />
 

