<style  type="text/css">
#backgroundPopup{
display:none;
position:fixed;
_position:absolute; /* hack for internet explorer 6*/
height:100%;
width:100%;
top:0;
left:0;
background:#000000;
border:1px solid #cecece;
z-index:5;
}
#popupContact{
	display:none;
position:fixed;
_position:absolute; /* hack for internet explorer 6*/
z-index:15;
padding:1px;
font-size:13px;
float:right;
background-color:#FFFFFF;
}
</style>

<script type="text/javascript" language="javascript"  src="<?php echo $base;?>js/calendar.js"></script>
<link href="<?php echo $base;?>css/calendar.css" rel="stylesheet" type="text/css" />	
<script src="<?php echo $base;?>js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
$(function() {
	 $("#contact").click(function(event) {	
		 $("#backgroundPopup").css({
			"opacity": "0.7"
		});
		 $("#backgroundPopup").fadeIn("slow");
		 $("#popupContact").fadeIn("slow");		 
	});
	 $("#close").click(function(event) {
		 $("#backgroundPopup").fadeOut("slow");
		 $("#popupContact").fadeOut("slow");		 
	});
	  	
		
		
		
	$('#get').click(function()
	{
			 var inputString=document.getElementById('wkdate').value;
			 var plotid=document.getElementById('typeid').value;
			 
			 $.post("<?php echo $base;?>index.php/admin/workercount", {queryString: ""+inputString+"",pid: ""+plotid+""}, 
			 function(data)
			 {	
				 //alert("h="+data);
				 	$("#wk").html(data);		
			 });	 
  });
	
	
});
</script>

								
								  <div id="Message">
                  <div id="message_right">
	<?php if($client!=1) { ?>
					<div align="right">
					<strong><a href="#" id="contact" class="link">Edit Plot </a></strong>
					<form name="actfrm" id="actfrm" method="post" action="<?php echo $base;?>index.php/admin/activity/addact">
					<input type="submit" name="addact" id="addact" value="Add activity"/>
					<input type="hidden" name="type" id="type" value="plot"/>
					<input type="hidden" name="typeid" id="typeid" value="<?php echo (!empty($plotrow->plotid))?$plotrow->plotid:""; ?>"/>
					<input type="hidden" name="fromactivtiy" id="fromactivtiy" value="1"/>
					</form>
					</div>
					<?php } ?>
				  <strong>Plot Details</strong>  			
				  <div class="tdiv">
				  <table class="tab">
						<tr>
						<td class="ttd"><strong><?php echo (!empty($plotrow->title))?$plotrow->title:""; ?></strong></td>						
						</tr> 
						<tr>
						<td class="ttd"><?php echo (!empty($plotrow->description))?$plotrow->description:""; ?></td>						
						</tr> 						
						<tr>
						<td class="ttd"><strong>Owner:</strong><?php echo (!empty($plotrow->name))?$plotrow->name:""; ?></td>						
						</tr> 						
						<tr>
						<td class="ttd"><?php echo (!empty($plotrow->extent))?$plotrow->extent:""; ?></td>						
						</tr> 						
						<tr>
						<tr>
						<td class="ttd"><?php echo (!empty($plotrow->location))?$plotrow->location:""; ?></td>						
						</tr> 						
						<tr>
						<td class="ttd"><?php echo (!empty($plotrow->remarks))?$plotrow->remarks:""; ?></td>						
						</tr> 	
						<?php if($client!=1) { ?>					
						<tr>
						<td class="ttd"><strong>Project:</strong><?php echo (!empty($plotrow->projecttitle))?$plotrow->projecttitle:""; ?></td>						
						</tr> 	
						<?php } ?>					
						<tr>
						<td class="ttd"><strong>No. of Workers:</strong><span id="wk"><?php echo (!empty($wk_count->workerscount))?$wk_count->workerscount:"0";?></span>		
						<input type="text" name="wkdate" id="wkdate" readonly="yes" size="10" value="<?php echo $today;?>"/>
						<img onclick="displayDatePicker('wkdate');"  value="select" src="<?php echo $base;?>images/calander.jpg"/>	
						<a href="#" id="get" class="link"><button>GET</button></a>
										
						</td>
						
						</tr> 						
				  </table>  				  
				  </div>  
 
                 </div>     
                 </div>
<div id="backgroundPopup"></div>
<div id="popupContact">
<?php print $editform; ?> 
</div>
