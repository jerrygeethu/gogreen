<div class="contentarea2">
  <?php foreach($list as $li) { } ?>
<form action="<?php echo $base;?>admin.php/plant/editplant/<?php echo $li->plantid;?>" method="post" enctype="multipart/form-data">

  <div class="cl" style="line-height:10px;">       
  
  <div class="addproject" >    
  

  
<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;">Project: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">  
<select tabindex="1" style="width:177px;"   name="project" id="project">
<option value="">Select project</option>
<?php foreach($project as $pr) { ?>

<option value="<?php echo $pr->projectid;?>" <?php if($pr->projectid==$li->projectid) { ?> Selected <?php } ?> ><?php echo $pr->title;?></option>

<?php } ?>

</select>

  
    </div>
<div class="cl"></div>
  
  
  
  
  
<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;"> Plot: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">  
<select tabindex="1" style="width:177px;"   name="plot" id="plot">
<option value="">Select plot</option>
<?php foreach($plot as $pt) { ?>

<option value="<?php echo $pt->plotid;?>" <?php if($pt->plotid==$li->plotid) { ?> Selected <?php } ?>><?php echo $pt->title;?></option>

<?php } ?>


</select>

  
    </div>
<div class="cl"></div>
  
  
  
  
  
  
  
  
  
  


<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;">    Crop: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">
  
<select tabindex="1" style="width:177px;"   name="crop" id="crop">
<option value="">Select Crop</option>
<?php foreach($crop as $cp) { ?>

<option value=<?php echo $cp->id;?> <?php if($cp->id==$li->cropid) { ?> Selected <?php } ?>><?php echo $cp->crop;?></option>

<?php } ?>


</select>
  
  </div>
<div class="cl"></div> <br />


<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;"> No.of crops: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">  
  <input tabindex="8" style="width:177px;" type="text" name="number" id="number"  value="<?php echo $li->number;?>"/>


  
    </div>
<div class="cl"></div> <br />

<div class="font" style=" float:left; height:20px;  width:100px; padding-top:25px;">Planted date: &nbsp; <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:250px; padding-top:20px;">  
  <input tabindex="8" style="width:177px;" type="text" name="date" id="date" value="<?php echo ymdtodmy($li->date,"/");?>" /> <img src="<?php echo $base;?>images/calendar.png" onclick="displayDatePicker('date')" alt="calender" width="26" height="26" border="0" />



  
    </div>
<div class="cl"></div> <br />



<div class="font" style=" float:left; height:115px;  width:100px; margin-top:10px;">Details : &nbsp;  <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left;   width:250px; padding-top:3px;">    
<label>
<textarea name="details"  id="details"  rows="6" cols="23" ><?php echo $li->details;?></textarea>
</label>  </div>
<div class="cl"></div>


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
