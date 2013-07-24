<script type="text/javascript" src="<?php echo $base;?>js/calendar.js" ></script>
<?php //$this->form_validation->set_error_delimiters('<div class="error">', '</div>'); ?>
<form name="frm" method="post" action="<?php echo $base;?>admin.php/project/editproject"  enctype="multipart/form-data">
<div class="contentarea2">
  <div class="cl" style="line-height:10px;">       
 <?php if(!empty($list->photo)) { $ph=explode(".",$list->photo);  $link=$ph[0]."_thumb.".$ph[1]; 
  }?>
  
<div class="addproject" >
<div class="font" style=" float:left; height:20px;  width:100px; padding-top:20px;">    Title: <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">
 
   <input tabindex="1" style="width:180px;"  type="text" name="title" id="title" value="<?php if(!empty($list)) { echo $list->title; }?>"/>
   <input type="hidden" name="id"  id="id" value="<?php echo $list->projectid;?>" />
   
 <?php //echo form_error('title'); ?> </div>
<div class="cl"></div> <br />
<div class="font" style=" float:left; height:115px;  width:100px;"><span style=" float:left; height:20px;  width:100px;">Description:<span style="color:#CC0000;" >*  </span></span></div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<textarea name="description"  id="description"  rows="6" cols="23" ><?php if(!empty($list)) { echo $list->description; }?></textarea><?php //echo form_error('description'); ?>
</label>  </div>
<div class="cl"></div> <br />
<div class="font"style=" float:left; height:20px;  width:100px;">Location<span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:250px;">    <input tabindex="3" style="width:180px; " type="text" name="location" id="location" value="<?php if(!empty($list)) { echo $list->location; }?>" /><?php //echo form_error('location'); ?>  </div>
<div class="cl"></div> <br />
<div class="font" style=" float:left; height:20px;  width:100px;">Extent:<span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px;">    <input tabindex="4" style="width:180px; " type="text" name="extent" id="extent" value="<?php if(!empty($list)) { echo $list->extent; }?>" /><?php //echo form_error('extent'); ?>  </div>
<div class="cl"></div> <br />
<div class="font" style=" float:left; height:20px;  width:100px;">Start Date:<span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:180px;">    
<input tabindex="5" style="width:180px; " type="text" name="startdate" id="startdate" value="<?php if(!empty($list)) { echo ymdtodmy($list->date); }?>" />  </div>
<div style=" float:left; height:30px;  width:30px; padding-left:7px; padding-top:1px;">
 <img src="<?php echo $base;?>images/calendar.png" onclick="displayDatePicker('startdate')" alt="calender" width="26" height="26" border="0" />
 </div>
<div class="cl"></div> <br />
<div class="font" style=" float:left; height:20px;  width:100px;">Subscribed: <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px;">    
<input tabindex="6" style="width:180px; " type="checkbox" name="subscribed" id="subscribed" <?php if(!empty($list)) { if($list->subscribe=="1"){ ?>checked <?php } } ?> />  </div>
<div class="cl"></div> <br />

<div class="font" style=" float:left; height:20px;  width:100px;">Photo Upload:<span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:250px;">    <input tabindex="6" style="width:180px; " type="file" name="userfile" id="userfile" /></div> 
 <div style=" float:left; height:30px;  width:30px; padding-left:23px; padding-top:1px;">
 <?php if(!empty($list)) { if(!empty($list->photo)) { 
	 $ph=explode(".",$list->photo); $link=$ph[0]."_thumb.".$ph[1]; ?>
	 <img src="<?php echo $base;?>uploads/project/thumb/<?php echo $link;?>" />
	 <input type="hidden" name="oldphoto" id="oldphoto" value="<?php echo $list->photo;?>" />
	 <?php } } ?></div>
<div class="cl"></div> <br />

<div class="font" style=" float:left; height:20px;  width:100px;">Status:<span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:180px;"><select name="status" style="width:185px;">
  <option value=""  <?php if(!empty($list)) {if($list->status=="") { echo "selected"; }  }?>>Select Status</option>
  <option value="pending" <?php if(!empty($list)) {if($list->status=="pending") { echo "selected"; }  }?>>Pending</option>
  <option value="running"  <?php if(!empty($list)) {if($list->status=="running") { echo "selected"; }  }?>>Running</option>
  <option value="finished" <?php if(!empty($list)) {if($list->status=="finished") { echo "selected"; } } ?> >Finished</option>
</select>  </div>
<div class="cl"></div> <br />
<div  class="font"style=" float:left; height:115px;  width:100px;"><span style=" float:left; height:20px;  width:100px;">Remarks:</span></div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<textarea name="remarks"  id="remarks"  rows="6" cols="23" ><?php if(!empty($list)) { echo $list->remarks; }?></textarea>
</label>  </div>
<div class="cl"></div>



</div>
  
  
  
  
  
  
  
  </div><br />

 




<div class="linkbuttons" align="center">
    <input type="submit" name="editsubmit" id="editsubmit" value="Save" class="input_box"/> &nbsp; &nbsp;
    
      
</div>

</div>
</form>
