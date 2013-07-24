<script type="text/javascript" src="<?php echo $base;?>js/calendar.js" ></script>
<script type="text/javascript">

function show(value)
{
	if(value=="private")
	{
		
		document.getElementById('sh').style.display="block";
		
	}
	else
	{
		document.getElementById('sh').style.display="none";
	}
	
	
}

</script>
<?php 
$this->form_validation->set_error_delimiters('<div class="error">', '</div>') ?>
<?php if(!empty($news)) { foreach($news as $ns) {  }  } ?>
<?php if(!empty($news)) { ?>
<form name="frm" method="post" action="<?php echo $base;?>admin.php/news/editnews/<?php echo $ns->newsid;?>/<?php echo $limit;?>"  enctype="multipart/form-data">
<?php } else { ?>
<form name="frm" method="post" action="<?php echo $base;?>admin.php/news/addnews"  enctype="multipart/form-data">

<?php } ?>
<div class="contentarea2">
  <div class="cl" style="line-height:10px;">       
  
  <div class="addproject" >    
<div style=" float:left; width:10px; height: 45px;"></div>

<div class="font" style=" float:left; height:20px;  width:100px; padding-top:20px;"> Title: <span style="color:#CC0000;" >*  </span>  </div>
<div style=" float:left; height:20px;  width:250px; padding-top:12px;">
    <input tabindex="1" style="width:180px;"  type="text" name="title" id="title" value="<?php if(!empty($news)){ echo $ns->title;} else {  echo set_value('title');   }?>"/>
	
	<?php echo form_error('title'); ?>
	
	  </div>
<div class="cl"></div> <br />

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:100px;"> Category:<span style="color:#CC0000;" >*  </span>  </div>
	<div style=" float:left; height:20px;  width:250px;">
  <select name="category" onchange="show(this.value);" style="width:185px;">
  <option value="" <?php if(!empty($news)){ if($ns->category==""){ echo "selected";}}?>>Select category</option>
  <option value="private" <?php if(!empty($news)){ if($ns->category=="private"){ echo "selected";}}?> >Private</option>
  <option value="public" <?php if(!empty($news)){ if($ns->category=="public"){ echo "selected";}}?>>Public</option>
  </select>
  <?php echo form_error('category'); ?>
</div>
<div class="cl"></div><br />

<?php if(!empty($news)){  if($ns->category=="private") {  ?>
	
	
<div >

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:100px;"> Project: <span style="color:#CC0000;" >*  </span> </div>
	<div style=" float:left; height:20px;  width:250px;">
  <select name="project1" id="project1" style="width:185px;">
  <option value="">Select Project</option>
 <?php foreach($project as $proj)
 { ?>
 <option value="<?php echo $proj->projectid;?>" <?php if($ns->project==$proj->projectid) { ?>selected <?php }?>><?php echo $proj->title;?></option>
 
 <?php } ?>
  </select>
  <?php echo form_error('project'); ?>
</div>
<div class="cl"></div><br />
<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:100px;"> Owner: <span style="color:#CC0000;" >*  </span> </div>
	<div style=" float:left; height:20px;  width:250px;">
  <select name="owner1" id="owner1" style="width:185px;">
  <option value="">Select Owner</option>
  <?php foreach($member->result() as $mem)
 { ?>
 <option value="<?php echo $mem->memberid;?>" <?php if($ns->owner==$mem->memberid) { echo "selected";}?>><?php echo $mem->name;?></option>
 
 <?php } ?>
  </select>
   <?php echo form_error('owner'); ?>
</div>
<div class="cl"></div><br />
</div>
	
	
	
<?php } }?>	


<div style="display:none;" id="sh">

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:100px;"> Project: <span style="color:#CC0000;" >*  </span> </div>
	<div style=" float:left; height:20px;  width:250px;">
  <select name="project" style="width:185px;">
  <option value="">Select Project</option>
 <?php foreach($project as $proj)
 { ?>
 <option value="<?php echo $proj->projectid;?>"><?php echo $proj->title;?></option>
 
 <?php } ?>
  </select>
  <?php echo form_error('project'); ?>
</div>
<div class="cl"></div><br />
<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:100px;"> Owner: <span style="color:#CC0000;" >*  </span> </div>
	<div style=" float:left; height:20px;  width:250px;">
  <select name="owner" style="width:185px;">
  <option value="">Select Owner</option>
  <?php foreach($member->result() as $mem)
 { ?>
 <option value="<?php echo $mem->memberid;?>"><?php echo $mem->name;?></option>
 
 <?php } ?>
  </select>
   <?php echo form_error('owner'); ?>
</div>
<div class="cl"></div><br />
</div>





<div style=" float:left; width:10px; height:25px;"></div>
<div class="font"style=" float:left; height:20px;  width:100px;"> Author: <span style="color:#CC0000;" >*  </span>  </div>
<div style=" float:left; height:20px;  width:250px;">    <input tabindex="3" style="width:180px; " type="text" name="author" id="author" value="<?php if(!empty($news)){ echo $ns->author;}?>" />  <?php echo form_error('author'); ?> </div>
<div class="cl"></div> <br />

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:100px;"> News: <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left;   width:250px; padding-top:1px;">    
<label>
<textarea name="news"  id="news"  rows="6" cols="23" ><?php if(!empty($news)){ echo $ns->news; } else {  echo set_value('news');   }?></textarea><?php echo form_error('news'); ?> 
</label>
  </div>
<div class="cl"></div> <br />

	

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:100px;"> Photo upload: <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:100px; ">
<div style=" float:left; height:20px;  width:100px;">
  <input tabindex="8" style="width:100px; " type="file" name="userfile" id="userfile" value="" /></div> 
  <div style=" float:left; height:20px;  width:100px;">
  <?php if(!empty($news)) { if($ns->photo!="") { $ph=explode(".",$ns->photo); if(!empty($ph)) { $phimg=$ph[0]."_thumb.".$ph[1]; }?><img src="<?php echo $base;?>uploads/news/thumb/<?php echo  $phimg;?>" />
  <input type="hidden" name="oldimg" id="oldimg" value="<?php echo $ns->photo;?>" />
  
  <?php } } ?></div>
 

</div>
<div class="cl"></div><br />	
	
	
	
<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:100px;"> Remarks: </div>
<div style=" float:left;   width:250px; padding-top:1px;">    
<label>
<textarea name="remarks"  id="remarks"  rows="6" cols="23" ><?php if(!empty($news)){ echo $ns->remarks;} else {  echo set_value('remarks');   }?></textarea>
</label>
  </div>
<div class="cl"></div> <br />

<div style=" float:left; width:10px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:100px;"> Active: <span style="color:#CC0000;" >*  </span> </div>
	<div style=" float:left; height:20px;  width:150px;"> 
	 <input type="checkbox" name="active" id="active"  value="1" <?php if(!empty($news)) { if($ns->status=="1") { ?> checked="true" <?php } } ?>  /> 
	 
	   <?php echo form_error('active'); ?> 
	  </div>
    <div class="cl"></div> <br />
	
<div style=" float:left; width:10px; height:25px;"></div>	
<div class="font" style=" float:left; height:20px;  width:100px;">Date:<span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:180px;">    
<input tabindex="5" style="width:180px; " value="<?php if(!empty($news)){ echo ymdtodmy($ns->newsdate);} else {  echo set_value('newsdate');   }?>" type="text" name="newsdate" id="newsdate" /> <?php echo form_error('newsdate'); ?>   </div>
<div style=" float:left; height:30px;  width:30px; padding-left:7px; padding-top:1px;">
 <img src="<?php echo $base;?>images/calendar.png" onclick="displayDatePicker('newsdate')" alt="calender" width="26" height="26" border="0" />
 	  
 </div>
 
<div class="cl"></div> <br />
	
<div class="cl"></div> <br />
<div class="cl"></div>

<div class="cl"></div>

</div>
  
  
  
  
  
  
  
  </div><br />
 <br />
 <br />
 
<div class="cl"></div>



<div class="linkbuttons" align="center">
<?php if(!empty($news)) { ?>

<input type="submit" name="editsubmit" id="editsubmit" value="Save" class="input_box"/> 
<?php } else {  ?>
<input type="submit" name="add" id="add" value="Save" class="input_box"/> 
<?php } ?>
&nbsp; &nbsp;
      
</div>

</div>
</form>

