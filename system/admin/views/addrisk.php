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


function getcrop(plotid)
{
	var base="<?php echo $base;?>";		
	
	 $('#crop').load(""+base+"admin.php/risk/getcrop/"+plotid+"",function(str){	 
		  // alert(str); 

     });
	  if(plotid!="")
	 {
	$('#cropdiv').show();
     }
	 else
	 {
		$('#cropdiv').hide();
	 }
	
 }
 
 


 

</script>


<div class="contentarea2">

<form action="<?php echo $base;?>admin.php/risk/addrisk" method="post" enctype="multipart/form-data">

  <div class="cl" style="line-height:10px;">       
  
  <div class="addproject" >    
  
  
  
<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;">Project: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">  
<select tabindex="1" style="width:177px;"   name="project" id="project" onchange="getplot(this.value);">
<option value="">Select project</option>
<?php foreach($project as $pr) { ?>

<option value="<?php echo $pr->projectid;?>"><?php echo $pr->title;?></option>

<?php } ?>

</select>

  
    </div>
<div class="cl"></div>
  
  
  

 <div id="plotdiv" style="display:none;"> 
<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;"> Plot: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">  
<select tabindex="1" style="width:177px;"   name="plot" id="plot" onchange="getcrop(this.value);">



</select>

  
    </div>
<div class="cl"></div>
  
</div>
  
  
  
  
  
  
  
  
<div id="cropdiv" style="display:none;">

<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;">    Crop: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">
  
<select tabindex="1" style="width:177px;" name="crop" id="crop" >
<!--<option value="">Select crop</option>-->

</select>
  
  </div>
<div class="cl"></div> <br />
</div> 


<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;"> No.of crops: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">  
<input tabindex="8" style="width:177px;" type="text" name="number" id="number" value="" />	

  
    </div>
<div class="cl"></div> <br />


<div class="font" style=" float:left; height:115px;  width:100px; margin-top:10px;">Details : &nbsp;  <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<textarea name="details"  id="details"  rows="6" cols="23" ></textarea>
</label>  </div>
<div class="cl"></div>

<div class="font" style=" float:left; height:20px;  width:100px; margin-top:6px;"> Photo: </div>
<div style=" float:left; height:20px;  width:303px;">
  <input tabindex="8" style="width:300px; " type="file" name="userfile" id="userfile" />
</div> 
<div class="cl"></div> <br />
<div class="cl"></div> <br />



</div>
  
  
  
  
  
  
  
  </div><br />
 <br />
 <br />
 
<div class="cl"></div>



<div class="linkbuttons" align="center">
    <input type="submit" name="add" id="add" value="Save" class="input_box"/> &nbsp; &nbsp;
      <input type="submit" name="input2" id="input2" value="Print" class="input_box"/>
      
</div>


</form>

</div>
