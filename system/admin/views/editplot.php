<?php foreach($plot as $pl)
{
	
}?>
<form name="frm" method="post" action="<?php echo $base;?>admin.php/project/editplot" enctype="multipart/form-data">
<div class="contentarea2">  
<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px; padding-top:20px;">   Project Name: <span style="color:#CC0000;" >*  </span> </div>
<div class="floatleft" style="height:20px;  width:300px; margin-top:15px;">
<span class="floatleft" style="height:20px;  width:200px;">
<input type="hidden" name="plotid" id="plotid" value="<?php echo $pl->plotid;?>" />
<select tabindex="6" name="project" id="project" style="width:204px;">
   
	<?php if(!empty($pl->projectid))
	{ ?>
	<option value="<?php echo $pl->projectid;?>"><?php echo $pl->project;?></option>
	
	<?php } ?>   
   
  </select>
</span>

<?php echo form_error('project'); ?>
</div>

<div class="cl" style="line-height:10px;"></div><br />
<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"> Owner: <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:250px;">  
 <select name="owner" id="owner" style="width:205px;">

 <?php if(!empty($pl->memberid))
	{ ?>
	<option value="<?php echo $pl->memberid;?>"><?php echo $pl->member;?></option>
	
	<?php } ?>   
  
</select>
<?php echo form_error('owner'); ?>
  </div>
<div class="cl"></div> <br /> 

<div style=" float:left; width:10px; height:25px;"></div>
<div  class="font"style=" float:left; height:20px;  width:113px; padding-top:2px;"><span style=" float:left; height:20px;  width:100px;">Location: <span style="color:#CC0000;" >*  </span></span></div>
<div style=" float:left; height:20px;  width:300px;">    <input tabindex="2" style="width:200px; " type="text" name="location" id="location" 
value=" <?php if(!empty($pl->plotlocation))	{ echo $pl->plotlocation;} ?>" /> 
<?php echo form_error('location'); ?>

 </div>
<div class="cl"></div><br />
<div style=" float:left; width:10px; height:25px;"></div>
	<div  class="font"style=" float:left; height:20px;  width:113px;"> Extent: <span style="color:#CC0000;" >*  </span> </div>
	<div style=" float:left; height:20px;  width:300px;">   
	 <input tabindex="3" style="width:200px; " type="text" name="extent" id="extent" value=" <?php if(!empty($pl->plotlocation))	{ echo $pl->plotlocation;} ?>"/> 
	 <?php echo form_error('extent'); ?>
	 
	  </div>
	<div class="cl"></div> <br />
<div style=" float:left; width:10px; height:25px;"> </div>
<div class="font" style=" float:left; height:20px;  width:113px;">Title:  <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:300px;">    
<input tabindex="4" style="width:200px; " type="text" name="title" id="title" value=" <?php if(!empty($pl->plot))	{ echo $pl->plot;} ?>" /> 

	 <?php echo form_error('title'); ?>
 </div>
<div class="cl"></div> <br />

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"> Description: <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left;   width:200px; padding-top:3px;">    
<label>
<textarea name="description"  id="description"  rows="7" cols="26" ><?php if(!empty($pl->plotdescription))	{ echo $pl->plotdescription;} ?></textarea>
</label>
 <?php echo form_error('description'); ?>

  </div>
<div class="cl"></div> <br />



<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"><span style=" float:left; height:20px;  width:100px;">Remarks:</span></div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<textarea name="remarks"  id="remarks"  rows="7" cols="26" >
<?php if(!empty($pl->plotremarks))	{ echo $pl->plotremarks;} ?></textarea>
</label>  </div>
<div class="cl"></div> <br />

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"><span style=" float:left; height:20px;  width:100px;">Main Photo:<span style="color:#CC0000;" >*  </span></span></div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<input type="file" name="photo1" id="photo1" />

<img src="<?php echo $base;?>uploads/project/<?php echo $pl->mainphoto;?>" width="100" height="100" />
<input type="hidden" name="oldphoto1" id="oldphoto1" value="<?php echo $pl->mainphoto;?>" />

</label>  </div>
<div class="cl"></div> <br />

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:113px;"><span style=" float:left; height:20px;  width:100px;">Popup Photo:<span style="color:#CC0000;" >*  </span></span></div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<input type="file" name="photo2" id="photo2" />
<img src="<?php echo $base;?>uploads/project/<?php echo $pl->subphoto;?>" width="100" height="100" />
<input type="hidden" name="oldphoto2" id="oldphoto2" value="<?php echo $pl->subphoto;?>" />

</label>  </div>
<div class="cl"></div> <br />





<br /><br />

<div align="center">
    <input type="submit" name="edit" id="edit" value="Save" class="input_box"/> &nbsp; &nbsp;
      
</div>

</div>
</form>
