<div class="contentarea2">
<?php foreach($crop as $cp) { } ?>
<form action="<?php echo $base;?>admin.php/activity/editcrop/<?php echo $cp->id;?>" method="post" enctype="multipart/form-data">

  <div class="cl" style="line-height:10px;">       
  
  <div class="addproject" >    


<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;">    Name: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">   
 <input tabindex="1" style="width:177px;"  type="text" name="name" id="name" <?php if(!empty($cp)) { ?>value="<?php echo $cp->crop;?>"<?php }?>  /> 
 </div>
<div class="cl"></div> <br />
<div class="font" style=" float:left; height:115px;  width:100px; margin-top:10px;"> Description: &nbsp;  <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<textarea name="description"  id="description"  rows="6" cols="23" ><?php if(!empty($cp)) {  echo $cp->description;  }?></textarea>
</label>  </div>
<div class="cl"></div>

<div class="font" style=" float:left; height:20px;  width:100px; margin-top:6px;"> Photo: </div>
<div style=" float:left; height:20px;  width:303px;">
  <input tabindex="8" style="width:300px; " type="file" name="userfile" id="userfile" />
  <?php if(!empty($cp)) {  ?> <img src="<?php echo $base;?>uploads/crop/<?php echo $cp->photo;?>" width="30" height="30" border="0"/>
  <input type="hidden" name="oldphoto" id="oldphoto" value="<?php echo $cp->photo;?>" />
  
   <?php }?>
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
      
</div>


</form>

</div>
