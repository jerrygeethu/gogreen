<?php if(!empty($list)) { ?>
<div class="contentarea1" style="width:800px;padding-bottom:20px;">
<div align="left" class="contentheader">
	   
  <div style=" float:left; width:18px; border-right:1px solid #FFFFFF; height:24px; padding-top:5px; padding-left:1px;">
	         <input type="checkbox" name="ww" id="w0" /> </div>
        <div style=" float:left; width:175px; height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp;From</div>
        <div style=" float:left; width:202px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Subject</div>
        <div style=" float:left; width:290px;  height:24px; padding-top:1px;  border-right:2px solid #FFFFFF;"> &nbsp; Description</div>
        <div style=" float:left; width:70px;  height:24px; padding-top:1px;"> &nbsp;Date</div>
        </div>
<div align="left" class=" contentarea" ></div>
          <form method="post" action="<?php echo $base;?>admin.php/mail/delete">
	  <?php
	    $i=1;
	   foreach($list as $li)
	  { ?>
	    
  <div align="left" class="contentmatter">
<div align="left" style="font-size:12px;" >
		<div style=" float:left; width:20px; padding-left:1px;  padding-top:2px;">
		 	<input type="checkbox" name="w<?php echo $i;?>" id="w<?php echo $i;?>" />
		    <input type="hidden" name="id<?php echo $i;?>" id="id<?php echo $i;?>"  value="<?php if(!empty($list)) { echo $li->id;}?>"/>

		</div>
        <div >
		<input type="text" readonly name="name" id="id" value="<?php if(!empty($list)) { echo $li->name;}?>"   style=" float:left; width:170px; padding-left:6px;  padding-top:2px; height:46px; border:#999999 solid 1px;"/>
		
		
		</div>
        <div> 
		
				<input type="text" name="subject" id="subject" value="<?php if(!empty($list)) { echo $li->subject;}?>"   style=" float:left; width:195px; padding-left:6px;  padding-top:2px; height:46px; border:#999999 solid 1px;"/>

		
		</div>
        <div >
		
		
<input type="text" name="message" id="message" value=" <?php if(!empty($list)) { echo $li->message;}?>"  style=" float:left; width:290px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"/>

		
		</div>
        <div >
		
		<input type="text"  readonly name="date" id="date" value=" <?php if(!empty($list)) { echo $li->date;}?>" style=" float:left; width:100px;   padding-top:2px;  height:46px; border:#999999 solid 1px;"/>

		
		</div>
       </div>
  </div>   
  <?php $i++; } ?>
 
 
 <div style="font-size:12px; padding-top:5px; color:#00CC33" align="right"> 
   <p>&nbsp;</p>
   
   <p>
   
<?php print_r($page);?>   </p>
 </div>    
    
        

<br /><br />

<div align="right">
   
       <input type="hidden" name="draft" id="draft" value="1" />
      <input type="hidden" name="count" name="count" value="<?php echo $i?>" />
      <input type="submit" name="delete" id="delete" value="Delete" class="input_box"/> &nbsp; &nbsp;
      <input type="submit" name="resend" id="resend" value="Resend" class="input_box"/>
      
</div>

</div>
</form>


</div>
<?php }
   else
   {
	     echo "<div style='padding-bottom:500px;'>Draft Messages are not found</div>";
   }
   
   
    ?>
</div> <br /><br /><br />
