<script type="text/javascript" src="<?php echo $base;?>js/calendar.js" ></script>
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


function getowner(plotid)
{
	var base="<?php echo $base;?>";		
	
	 $('#owner').load(""+base+"admin.php/activity/getowner/"+plotid+"",function(str){	
		  

     });
	  if(plotid!="")
	 {
	$('#ownerdiv').show();
     }
	 else
	 {
		$('#ownerdiv').hide();
	 }
	
 }
 
 


 

</script>
<div class="contentarea2">
<form name="frm" method="post" action="<?php echo $base;?>admin.php/activity/activityadd"  enctype="multipart/form-data">

  <div class="cl" style="line-height:10px;">       
  
  <div class="addproject" >
    <div class="font" style=" float:left; height:20px;  width:100px; padding-top:20px;"> Date:  </div>
<div style=" float:left; height:20px;  width:200px; margin-top:13px;">   
 <input tabindex="5" style="width:180px; " type="text" name="date" id="date" /> 
 <?php echo form_error('date'); ?>
  </div>
<div style=" float:left; height:30px;  width:30px; margin-top:13px; margin-left:0px;"> 
<img src="<?php echo $base;?>/images/calendar.png" alt="calender" onclick="displayDatePicker('date')" width="26" height="26" border="0" /> </div>
<div class="cl"></div><br />
<div class="font" style=" float:left; height:20px;  width:100px;"> Projects:</div>
	<div style=" float:left; height:30px;  width:250px;">   
	<select name="project" id="project" style="width:185px;" onchange="getplot(this.value);"> 
 <option value="">Select Project</option>
 <?php foreach($project as $proj)
 { ?>
 <option value="<?php echo $proj->projectid;?>"><?php echo $proj->title;?></option>
 
 <?php } ?>
</select> 

 <?php echo form_error('project'); ?>
 </div>



<div class="cl"></div> <br />
<div id="plotdiv" style="display:none;">
<div class="font"style=" float:left; height:20px;  width:100px;"> Plot:  </div>
<div style=" float:left; height:30px;  width:250px;"> 
  <select name="plot" id="plot" style="width:185px;" onchange="getowner(this.value);">
 
</select> 
<?php echo form_error('plot'); ?>
 </div>
<div class="cl"></div> <br />
</div>


<div id="ownerdiv" style="display:none;">
<div class="font" style=" float:left; height:20px;  width:100px;"> Owner:  </div>
<div style=" float:left; height:30px;  width:250px;"> 
  
<select name="owner" id="owner" style="width:185px;">

</select> 
<?php echo form_error('owner'); ?>

</div>
<div class="cl"></div> <br />
</div>



<div class="font" style=" float:left; height:20px;  width:100px;"> Activity:  </div>
	<div style=" float:left; height:30px;  width:250px;">   
	 <input tabindex="4" style="width:180px; " type="text" name="activity" id="activity" /> 
	 <?php echo form_error('activity'); ?>
	  </div>
    <div class="cl"></div> <br />
    <div class="font" style=" float:left; height:20px;  width:100px;"> Description: </div>
<div style=" float:left;   width:250px; padding-top:1px;">    
<label>
<textarea name="description"  id="description"  rows="6" cols="23" ></textarea>
 <?php echo form_error('description'); ?>
</label>
  </div>
<div class="cl"></div> <br />
<div class="font" style=" float:left; height:20px;  width:100px;">No. of Workers: </div>
<div style=" float:left; height:30px;  width:250px;">   

 <select name="workers" id="workers" tabindex="4" style="width:180px; " >
 <option value="">Select</option>
 <?php for($i=1;$i<51;$i++)
 { ?>
  <option value="<?php echo $i;?>"><?php echo $i;?></option>
  <?php } ?>
   
 </select>
  <?php echo form_error('workers'); ?>
 </div>
<div class="cl"></div> <br />


<div class="font" style=" float:left; height:20px;  width:100px;"> Remarks: </div>
<div style=" float:left;   width:170px; padding-top:1px;">    
<label>
<textarea name="remarks"  id="remarks"  rows="6" cols="23" ></textarea>
</label>
  </div>

<div class="cl"></div>

</div>
  
  
  
  
  
  
  
  </div><br />
 <br />
 <br />
 
<div class="cl"></div>



<div class="linkbuttons" align="center">
    <input type="submit" name="input" id="input" value="Add" class="input_box"/> &nbsp; &nbsp;
      <input type="submit" name="input2" id="input2" value="Clear" class="input_box"/>
      
</div>
</form>

</div>

