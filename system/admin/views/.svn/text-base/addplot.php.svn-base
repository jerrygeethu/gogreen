<form name="frm" method="post" action="<?php echo $base;?>admin.php/project/addplot" enctype="multipart/form-data">
<div class="contentarea2">  
<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px; padding-top:20px;">   Project Name: <span style="color:#CC0000;" >*  </span> </div>
<div class="floatleft" style="height:20px;  width:250px; margin-top:15px;">

<select tabindex="6" name="project" id="project" style="width:204px;">
    <option value="">Select Project</option>
	<?php foreach($project as $pr)
	{ ?>
	<option value="<?php echo $pr->projectid;?>"><?php echo $pr->title;?></option>
	
	<?php } ?>   
   
  </select>

<?php echo form_error('project'); ?>

</div>

<div class="cl" style="line-height:10px;"></div><br />
<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"> Owners: <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:250px;">   <select name="owner"  id="owner" style="width:205px;">

 <option value="">Select Owner</option>
	<?php foreach($member as $me)
	{ ?>
	<option value="<?php echo $me->memberid;?>"><?php echo $me->name;?></option>
	
	<?php } ?>   
  
</select> 
<?php echo form_error('owner'); ?>

 </div>
<div class="cl"></div> <br /> 

<div style=" float:left; width:10px; height:25px;"></div>
<div  class="font"style=" float:left; height:20px;  width:113px; padding-top:2px;"><span style=" float:left; height:20px;  width:100px;">Location:<span style="color:#CC0000;" >*  </span> </span></div>
<div style=" float:left; height:20px;  width:300px;">    <input tabindex="2" style="width:200px; " type="text" name="location" id="location" /> 
<?php echo form_error('location'); ?>
 </div>
<div class="cl"></div><br />
<div style=" float:left; width:10px; height:25px;"></div>
	<div  class="font"style=" float:left; height:20px;  width:113px;"> Extent: <span style="color:#CC0000;" >*  </span> </div>
	<div style=" float:left; height:20px;  width:300px;">    
	<input tabindex="3" style="width:200px; " type="text" name="extent" id="extent" /> 
		 <?php echo form_error('extent'); ?>

	 </div>
	<div class="cl"></div> <br />
<div style=" float:left; width:10px; height:25px;"> </div>
<div class="font" style=" float:left; height:20px;  width:113px;">Title: <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:300px;">   
 <input tabindex="4" style="width:200px; " type="text" name="title" id="title" /> 
  <?php echo form_error('title'); ?>
  </div>
<div class="cl"></div> <br />

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"> Description:<span style="color:#CC0000;" >*  </span>  </div>
<div style=" float:left;   width:200px; padding-top:3px;">    
<label>
<textarea name="description"  id="description"  rows="7" cols="26" ></textarea>
 <?php echo form_error('description'); ?>
</label>  </div>
<div class="cl"></div> <br />



<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"><span style=" float:left; height:20px;  width:100px;">Remarks:</span></div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<textarea name="remarks"  id="remarks"  rows="7" cols="26" ></textarea>
</label>  </div>
<div class="cl"></div> <br />

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"><span style=" float:left; height:20px;  width:100px;">Main Photo:<span style="color:#CC0000;" >*  </span></span></div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<input type="file" name="photo1" id="photo1" />



</label>  </div>
<div class="cl"></div> <br />

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"><span style=" float:left; height:20px;  width:100px;">Popup Photo:<span style="color:#CC0000;" >*  </span></span></div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<input type="file" name="photo2" id="photo2" />


</label>  </div>
<div class="cl"></div> <br />


<br /><br />

<div align="center">
    <input type="submit" name="add" id="add" value="Save" class="input_box"/> &nbsp; &nbsp;
     
      
</div>

</div>
</form>
