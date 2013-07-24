<form name = "editprofile" id ="editprofile" action="<?php echo $base;?>admin.php/user/home/edit_profile/<?php echo $this->session->userdata('memberid')?>" method = "post" enctype="multipart/form-data">
<?php 
$this->form_validation->set_error_delimiters('<div style="color:red;font-size:12px;">', '</div>');
?>
<div class="heading"> <h3>Edit profile</h3></div>
 <div class="composebox">
 <?php 
 foreach($member_data as $mem_data)
 {
	 ?>
 <div class="composecontant">
 	<div class="profiletext"> Name: <span style="color:red; font-size:12px;">*</span></div>
 	<div  class="composeinputbox"><input tabindex="2"  type="text" name="name" id="name" style="width:300px; height:18px;" value = "<?php echo set_value('name',$mem_data['name']);?>" /></div>
    </div>
    <div style = "float:left;margin-left:32px;"><?php echo form_error('name');?> </div>
     <div class="composecontant">
     	<div class="profiletext"> Email: <span style="color:red; font-size:12px;">*</span></div>
 	    <div  class="composeinputbox">    <input tabindex="2"  type="text" name="email" id="email" style="width:300px; height:18px;" value = "<?php echo set_value('email',$mem_data['email']);?>"/></div>
     </div>
     <div style = "float:left;margin-left:32px;"><?php echo form_error('email');?> </div>
       <div class="composecontant">
     	<div class="profiletext"> Gender: <span style="color:red; font-size:12px;">*</span></div>
 	  <div  class="composeinputbox" align="left"> 
 	 <?php
 	  if($mem_data['gender'] == 'male')
 	  {
 	  ?>
        	 <input type="radio" name="gender" value="male" checked="checked">Male
              <input type="radio" name="gender" value="female">Female
         <?php
	 }
	 else
	 {
         ?>     
              <input type="radio" name="gender" value="male">Male
              <input type="radio" name="gender" value="female" checked="checked">Female
        <?
        }
        ?>
        </div> 
         <?php echo form_error('gender'); ?>
     </div>
     
     
       <div class="composecontant">
     	<div class="profiletext"> Phone no: <span style="color:red; font-size:12px;">*</span></div>
 	    <div  class="composeinputbox">    <input tabindex="2"  type="text" name="phno" id="phno" style="width:300px; height:18px;" value = "<?php echo set_value('phno',$mem_data['phone']);?>"/></div>
     </div>
     <div style = "float:left;margin-left:32px;"><?php echo form_error('phno'); ?></div>
     
       <div class="composecontant">
     	<div class="profiletext"> Mobile no: <span style="color:red; font-size:12px;">*</span></div>
 	    <div  class="composeinputbox">    <input tabindex="2"  type="text" name="mobile" id="mobile" style="width:300px; height:18px;" value = "<?php echo set_value('mobile',$mem_data['mobile']);?>" /></div>
    </div>
     <div style = "float:left;margin-left:32px;"> <?php echo form_error('mobile'); ?></div>
     
     
     <div class="composecontant">
     	<div class="profiletext"> Address <span style="color:red; font-size:12px;">*</span> </div>
 	     
        <div style="float:left; width:250px; padding-top:3px; padding-left:10px;">   
                   <label><textarea name="address"  id="address"  rows="7" cols="35"><?php echo set_value('address',$mem_data['address']);?></textarea></label><?php echo form_error('address'); ?></div>  
     </div>

       <div class="composecontant">
     	<div class="profiletext"> City: </div>
 	    <div  class="composeinputbox">  <input tabindex="2"  type="text" name="city" id="city" style="width:300px; height:18px;" value="<?php echo set_value('city',$mem_data['city']);?>"/></div>
		<?php echo form_error('city'); ?>
     </div>
     
     
      <div class="composecontant">
     	<div class="profiletext"> Country: </div>
 	    <div  class="composeinputbox"><input tabindex="2"  type="text" name="country" id="country" style="width:300px; height:18px;" value="<?php echo set_value('country',$mem_data['country']);?>"/></div><?php echo form_error('country'); ?>
     </div>
     
     
      <div class="composecontant">
     	<div class="profiletext"> Zip: </div>
 	    <div  class="composeinputbox"><input tabindex="2"  type="text" name="zip" id="zip" style="width:300px; height:18px;" value="<?php echo set_value('zip',$mem_data['zip']);?>"/></div><?php echo form_error('zip'); ?>
     </div>
     
	<div class="composecontant">
     	<div class="profiletext"> photo upload : </div>
     	<div><input tabindex = "8" type="file" name="userfile" size="25" value =""  /></div>
     </div>	
     <?}?>
 </div>

 <div class="composesave"> 
      <div class="edit_save">
        <input type="submit" name="input" id="input" value="Save Now" class="input_box" /></div> 
      </div>

<div style="clear:both;"></div>
   </form>  
   </div>
</div>

