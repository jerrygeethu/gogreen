
  <script type="text/javascript"> 
  	    $(document).ready(function() { 

	      $("#composemail").validate(); 
	    }); 
	  </script>  
<form method="post"  id = "composemail" name = "composemail" action="<?php echo $base;?>admin.php/user/messegs/compose_mail" enctype="multipart/form-data">
<div class="heading"> <h2> Compose mail</h2></div> 
<div class="composebox">
	<div class="composecontant">
		<div class="composetext"> To : </div>
		<div  class="composeinputbox">    <input tabindex="2"  class = "required" type="text" name="to" id="to"  readonly='readonly' value = "tintu.primemove@gmail.com" style="width:300px; height:18px;" />  </div>
    </div>
    
     <div class="composecontant">
     	<div class="composetext"> Subject : </div>
 	    <div  class="composeinputbox">    <input tabindex="2"  type="text" name="subject" id="subject" style="width:300px; height:18px;" class="required"/>  </div>
     </div>
 
     <div class="composecontant">
     	<div class="composetext"> Message : </div>
        <div style="float:left; width:250px; padding-top:3px; padding-left:10px;">    
			<label><textarea name="message"  id="message"  rows="7" cols="35" class = "required" ></textarea></label>
		</div>
      </div>
	
	<div class="composecontant">
     	<div class="composetext"> Upload file : </div>
     	<div  > <input tabindex = "8"type="file" name="userfile" size="20" value =  /> </div>
     	<div><?php echo $msg;?></div>
     </div>
</div>


<div class="composesave"> 
      <div style="float:right; padding-left:25px;">
        <input type="submit" name="send" id="send" value="Send" class="input_box" />
      </div> 
     <div style="float:right; padding-left:25px;">
        <input type="submit" name="save" id="save" value="Save Now" class="input_box" />
     </div> 
</div>
<div style="clear:both;"></div>      
 
</form> 
  </div>
</div>
