  <script type="text/javascript"> 
  	    $(document).ready(function() { 

	      $("#resendmail").validate(); 
	    }); 
	  </script>  
	  
<form method="post"  id = "resendmail" name = "resendmail" action="<?php echo $base;?>admin.php/user/messegs/resend_mail/<?php echo $msgid;?>" enctype="multipart/form-data">
<div class="heading"> <h2> Resend the mail</h2></div> 
<div class="composebox">
	<div class="composecontant">
	<?php foreach($value as $row)
	{
		?>
		<div class="composetext"> To : </div>
		<div  class="composeinputbox">    <input tabindex="2"  class = "required" type="text" name="to" id="to"  readonly='readonly' value = "tintu.primemove@gmail.com" style="width:300px; height:18px;" />  </div>
    </div>
    
     <div class="composecontant">
     	<div class="composetext"> Subject : </div>
 	    <div  class="composeinputbox">    <input tabindex="2"  type="text" name="subject" id="subject" style="width:300px; height:18px;" class="required" value="<?php echo $row['subject'];?>"/>  </div>
     </div>
 
     <div class="composecontant">
     	<div class="composetext"> Message : </div>
        <div style="float:left; width:250px; padding-top:3px; padding-left:10px;color:red;">    
			<label><textarea name="message"  id="message"  rows="7" cols="35" class = "required"><?php echo $row['message'];?></textarea></label>
		</div>
      </div>
	
	<div class="composecontant">
     	<div class="composetext"> Upload file : </div>
     	<div  > <input tabindex = "8"type="file" name="userfile" size="20"  /> </div>
     	<div><?php echo $msg;?></div>
     </div>
</div>


<div class="composesave"> 
      <div style="float:right; padding-left:25px;">
        <input type="submit" name="resend" id="resend" value="Resend" class="input_box" />
      </div> 
  
</div>
<?}?>
<div style="clear:both;"></div>      
<!--<input type="submit" value="upload" /> -->
 

  </div>
</div>
</form> 

