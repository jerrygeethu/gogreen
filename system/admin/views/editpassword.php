<div class="contentarea1" style="width:800px;height:480px;">
<form name = "editpassword" id ="editpassword" action="<?php echo $base;?>admin.php/member/editpassword/<?php echo $this->session->userdata('memberid')?>" method = "post" >
 <?php 
$this->form_validation->set_error_delimiters('<div style="color:red;font-size:12px;">', '</div>');
?>
<div class="heading"> <h3>Edit Password</h3></div>
 <div class="composebox">
 <?php 

 foreach($memdata as $mem_data)
 {
 ?>

 <div class="composecontant">
 	<div class="profiletext"> User Name:</div>
 	<div class="composeinputbox"><?php echo $mem_data['email'];?></div>
    </div>
     <div class="composecontant">
     	<div class="profiletext">Current Password: <span style="color:red; font-size:12px;">*</span></div>
 	    <div  class="composeinputbox"><input tabindex="2"  type="password" name="cpword" id="cpword" style="width:320px; height:18px;" value = ""/></div>
       <br/><div style="color:red;font-size:12px;clear:both;margin-left:155px;"><?php echo $message;?></div>
       </div>
        <div style = "float:left;margin-left:32px;"><?php echo form_error('cpword');?> </div>
       <div class="composecontant">
     	<div class="profiletext"> New Password <span style="color:red; font-size:12px;">*</span></div>
 	    <div  class="composeinputbox">    <input tabindex="2"  type="password" name="npword" id="npword" style="width:320px; height:18px;" value = ""/></div>
     </div> 
      <div style = "float:left;margin-left:32px;"><?php echo form_error('npword');?> </div>
      <div class="composecontant">
      <div class="profiletext"> Confirm Password <span style="color:red; font-size:12px;">*</span></div>
 	    <div  class="composeinputbox">    <input tabindex="2"  type="password" name="conpword" id="conpword" style="width:320px; height:18px;" value = ""/></div>
     <div style="color:red;font-size:12px;clear:both;margin-left:155px;"><?php echo $error;?></div> 
     </div>
     <div style = "float:left;margin-left:32px;"><?php echo form_error('conpword');?></div>
     <?}?>
 </div>
 <div class="composesave"> 
      <div class="edit_save"><input type="submit" name="input" id="input" value="Save Now" class="input_box" /></div> 
 </div>
 </div>
<div style="clear:both;"></div>
     </form>
</div>
