<?php 
if(!empty($member))
{ ?>
<form name="frm" method="post" action="<?php echo $base;?>admin.php/member/editmember"  enctype="multipart/form-data">

<?php
	
	
	foreach($member as $mem) { } 
	
}	
else
{?>
<form name="frm" method="post" action="<?php echo $base;?>admin.php/member/addmember"  enctype="multipart/form-data">


<?php }

?>
<div class="contentarea2">  
<div style=" float:left; width:20px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:112px; padding-top:25px;">    Name: <span style="color:#CC0000;" >*  </span></div>

<div style=" float:left; height:20px;  width:300px;margin-top:20px;"> 

<input tabindex="2" style="width:200px; " type="text" name="name" id="name"  value="<?php if(!empty($member)) { echo $mem->name; } else { echo set_value('name'); }?>" />  
<?php echo form_error('name'); ?>

</div>

<div class="cl" style="line-height:10px;"></div><br />
<div style=" float:left; width:20px; height:25px;"></div>
<div  class="font"style=" float:left; height:20px;  width:112px; padding-top:2px;">   Email: <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:300px;">  
  <input tabindex="2" style="width:200px; " type="text" name="email" id="email"  value="<?php if(!empty($member)) { echo $mem->email; } else { echo set_value('email'); }?>" />
  	  <?php echo form_error('email'); ?>
    </div>


<div class="cl"></div><br />

<?php 
if(empty($member))
{ ?>
<div style=" float:left; width:20px; height:25px;"></div>
	<div  class="font"style=" float:left; height:20px;  width:112px;">  Password:  <span style="color:#CC0000;" >*  </span></div>
	<div style=" float:left; height:20px;  width:300px;"> 
	   <input tabindex="3" style="width:200px; " type="password" name="password" id="password"  value="<?php if(!empty($member)) { echo $mem->password; } else { echo set_value('password'); }?>" />  
	   <?php echo form_error('password'); ?>
	   </div>
	<div class="cl"></div> <br />
<div style=" float:left; width:20px; height:25px;"> </div>
<div class="font" style=" float:left; height:20px;  width:114px;"> Confirm password: <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:300px;">    <input tabindex="4" style="width:200px; " type="password" name="confirmpwd" id="confirmpwd"   value="<?php if(!empty($member)) {  echo $mem->password; } else { echo set_value('confirmpwd'); }?>"/>  </div>
<div class="cl"></div> <br />
<?php } ?>

<div style=" float:left; width:20px; height:25px;"></div>
<div  class="font"style=" float:left; height:20px;  width:112px;">   Gender: <span style="color:#CC0000;" >*  </span> </div>
<div class="floatleft" style="height:20px;  width:300px;"><span class="floatleft" style="height:20px;  width:200px;">
<select tabindex="6" name="gender" style="width:200px;">
    <option value="" <?php if(!empty($member)) { if($mem->gender=="") { echo "selected"; } } else { echo set_select('gender', '', TRUE);} ?>>Select Gender</option>
    <option value="male" <?php if(!empty($member)) { if($mem->gender=="male") { echo "selected"; } } else { echo set_select('gender', 'male');} ?> >Male</option>
    <option value="female"  <?php if(!empty($member)) { if($mem->gender=="female") { echo "selected"; } } else { echo set_select('gender', 'female');}?> >Female</option>
   
  </select>
    <?php echo form_error('gender'); ?>
</span></div>
<div class="cl"></div> <br />
<div style=" float:left; width:20px; height:25px;"></div>
<div  class="font"style=" float:left; height:20px;  width:112px;">Phone: <span style="color:#CC0000;" >*  </span> </div>
<div style=" float:left; height:20px;  width:300px;">    <input tabindex="6" style="width:200px; " type="text" name="phone" id="phone"  value="<?php if(!empty($member)) {  echo $mem->phone; } else { echo set_value('phone'); }?>" />  
 <?php echo form_error('phone'); ?> </div>
<div class="cl"></div> <br />
<div style=" float:left; width:20px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:112px;">Mobile:  <span style="color:#CC0000;" >*  </span></div>
<div style=" float:left; height:20px;  width:300px;">    <input tabindex="7" style="width:200px; " type="text" name="mobile" id="mobile"   value="<?php if(!empty($member)) {  echo $mem->mobile; } else { echo set_value('mobile'); }?>"/>   <?php echo form_error('mobile'); ?> </div>
<div class="cl"></div> <br />

<div style=" float:left; width:20px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:112px;">Address :</div>
<div style=" float:left; height:20px;  width:303px;">    <input tabindex="8" style="width:200px; " type="text" name="address" id="address"   value="<?php if(!empty($member)) {  echo $mem->address; } else { echo set_value('address'); } ?>"/>   <?php echo form_error('address'); ?> </div>
<div class="cl"></div> <br />

<div style=" float:left; width:20px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:112px;">City :</div>
<div class="floatleft" style="height:20px;  width:300px;"><span class="floatleft" style="height:20px;  width:300px;">
<input tabindex="8" style="width:200px; " type="text" name="city" id="city"  value="<?php if(!empty($member)) {  echo $mem->city; } else { echo set_value('city'); }?>"/> 
</span></div>

<div class="cl"></div><br />


<div style=" float:left; width:20px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:112px;">Country :</div>
<div class="floatleft" style="height:20px;  width:300px;">
<span class="floatleft" style="height:20px;  width:300px;">
<input tabindex="8" style="width:200px; " type="text" name="country" id="country"  value="<?php if(!empty($member)) {  echo $mem->country; } else { echo set_value('country'); }?>"/> 
</span></div>

<div class="cl"></div> <br />



<div style=" float:left; width:20px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:112px;">Zip :</div>
<div style=" float:left; height:20px;  width:303px;"> 
<input tabindex="8" style="width:200px; " type="text" name="zip" id="zip"  value="<?php if(!empty($member)) {  echo $mem->zip; } else { echo set_value('zip'); }?>"/> 
  <?php echo form_error('zip'); ?> 
 </div>
<div class="cl"></div> <br />

<div style=" float:left; width:20px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:112px;">
Active: </div>
<div style=" float:left; height:20px;  width:300px; "> 
<input type="checkbox" name="active" id="active"  value="1" <?php if(!empty($member)) { if($mem->memstatus=="active") { ?> checked="true" <?php } } else { echo set_checkbox('active', '1');  }?> />

</div>
<div class="cl"></div> <br />


<div style=" float:left; width:20px; height:25px;"></div>
<div class="font" style=" float:left; height:20px;  width:112px;">Photo upload:  </div>
<div style=" float:left; height:20px;  width:300px; ">
<div style=" float:left; height:20px;  width:303px;">
  <input tabindex="8" style="width:200px; " type="file" name="userfile" id="userfile" value="" />
  <div><?php if(!empty($member)){ if(!empty($mem->photo)) { $ph=explode(".",$mem->photo); if(!empty($ph)) { $link=$ph[0]."_thumb." .$ph[1];} ?> <img src="<?php echo $base;?>member/thumb/<?php echo $link;?>"/>   <?php } } ?></div>
</div> 
</div>
<div class="cl"></div><br />




<div style=" float:left; width:20px; height:25px;"></div>
<div class="font" style=" float:left; height:30px;  width:112px; padding-top:8px;">Projects:</div>
<div class="font" style=" float:left; padding:3px; border:1px solid #666666; height:135px; width:265px; padding-top:8px;">
  	<?php
	$i=1;
	foreach($list as $li)
	{ 
		$pt="p".$i;
		
		
		?>
			<input type="checkbox" name="<?php echo $pt;?>" id="<?php echo $pt;?>" value="<?php echo $li->projectid;?>" <?php if($head=="Edit Member") { ?> checked <?php } ?>/>
				<?php echo $li->title;?>
	<?php
	$i++;
	 }
	
	
	
	?>

</div>







<div class="cl"></div>



<div align="center" style="padding-top:8px">
<?php if(!empty($member)) {  ?>
<input type="hidden" name="id" id="id" value="<?php echo $mem->memberid;?>" /> 

<?php } ?>
    <input type="submit" name="save" id="save" value="Save" class="input_box"/> &nbsp; &nbsp;
    
      
</div>
<div style=" float:left; height:40px;  width:555px;"> </div>
</div> 
</form>
