

      
<form name="draft-read" id="draft-read" action = "http://192.168.1.29/gogreen/admin.php/user/messege/get_send_mail">
 <div class="composebox">
   <div class="inbox-read">
   <?php 
		foreach($value as $row)
		{
			
   ?>
   From: <?php echo $row['to'];?> <br />
   Subject: <?php echo $row['subject'];?>
<div class="linebx"></div>
       </div> 
       <div class="inbox-readtxt">
         <p> <?php echo "<pre>".$row['message'];?> </p> <br />
       <?php } ?>
        <div class="composesave"> 
      <div style="float:left; padding-left:25px;">
       <!-- <input type="submit" name="reply" id="input" value="Reply" class="input_box" />-->
      </div> 
      <div style="float:left; padding-left:25px;">
        
      </div> 
      </div>
        </div>

</div>
 <div style="clear:both;"></div>      
</form>
   </div>
</div>

