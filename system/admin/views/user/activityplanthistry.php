<script type = "text/javascript">
function PrintContent()
{
var DocumentContainer = document.getElementById('divtoprint');
var WindowObject = window.open("", "PrintWindow","width=715,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes,align=center");
WindowObject.document.write(DocumentContainer.innerHTML);
WindowObject.document.close();
WindowObject.focus();
WindowObject.print();
WindowObject.close();
}
</script>

<form name= 'planthistory' id  ='planthistory' method = "post" action="#">
<div style="width:540px; float:left;">
<div class="heading"> <h3>Activity Plant History</h3></div>
 	<?php 
		if(!empty($plant_history))
		{
 	?>
<div class="middlesection" id = "middlesection">

 	<div class="middleheader">
 <table>
	<tr>
		<th class="plantheadertext" align="center">Project</th>
		<th class="plantheadertext" align="center">Plot Name </th>
		<th class="plantheadertext" align="center">Crop </th>
		<th class="plantheadertext" align="center"> No.of crop </th>
		<th class="plantheadertext" align="center">Date </th>
	</tr>
<?php   
foreach($plant_history as $plant_history1)
	{?>
	<tr><td class='plantlisttext' align='center'><a href="<?php echo $base.'admin.php/user/activity/readmore_plant/'.$plant_history1['id']; ?>"><?php echo $plant_history1['project_name']; ?></a></td>
			<td class='plantlisttext' align='center'><a href="<?php echo $base.'admin.php/user/activity/readmore_plant/'.$plant_history1['id']; ?>"><?php echo $plant_history1['title']; ?></a></td>
			<td class='plantlisttext' align='center'><a href="<?php echo $base.'admin.php/user/activity/readmore_plant/'.$plant_history1['id']; ?>"><?php echo $plant_history1['crop']; ?></a></td>
			<td class='plantlisttext' align='center'><a href="<?php echo $base.'admin.php/user/activity/readmore_plant/'.$plant_history1['id']; ?>"><?php echo $plant_history1['number']; ?></a></td>
			<td class='plantlisttext' align='center'><a href="<?php echo $base.'admin.php/user/activity/readmore_plant/'.$plant_history1['id']; ?>"><?php echo $plant_history1['date']; ?></a></td></tr>
			<td class='linebx' style='margin-left:6px;width:500px;'></td></tr>
		<?php
	}
?>
</table> 

 <div class="pagination" align="right"> 
  <p>&nbsp;</p>
 <?php echo $page;?>
 </div>
</div> 



          <input type="button" name = "download" id ="download" value = "Print" class = "input_box" style = "float:right;margin-top:12px;" onclick = "PrintContent();">
        </div>
       <?php 
}
else
{
	?>
	<div style="clear:both;Padding-top:20px;padding-left:20px;"><?php echo "The plant history will be updated soon";?></div>
	<?php }
?>  
</div>
</form>

<!--///////////////////PRINTING CONTENTS///////////-->
<div style="display:none;" id ="divtoprint">
<?php			
		foreach($memdata as $mem_data)
				{
					
				$table_head = "
				<div style=\"float:left; width:700px; background-color:#EEEEEE;\">
					<div style=\"float:left; width:700px; position:relative; padding-top:20px; padding-bottom:10px; background-color:#82C300;\">
					 <h1 style='color:#FFF; font-style:normal; font-size:22px; margin-left:20px;'>go green</h1>
					 
						<div style=\"position:absolute; right:10px; bottom:0px; width:250px;\">
						<table cellpadding='2px' cellspacing='0px' width='230px' border='0px'>
							<tr>
								<td rowspan='4'> <img src=".$base."uploads/member/".$mem_data['photo']." style='height:55px;'/></td>
							</tr>
							<tr>
								<td style='font-size:18px; color:#FFFFFF;'>".$mem_data['name']."</td>
							</tr>
							<tr>
								<td style='font-size:11px; color:#FFFFFF;'>Call: ".$mem_data['mobile']."</td>
							</tr>
							<tr>
								<td style='font-size:11px; color:#FFFFFF;'>e-mail: ".$mem_data['email']."</td>
							</tr>
						</table>
						
				
						
						</div>
					</div>
				
				<table align=\"center\" style=\"margin:20px; font-size:13px; font-family:Arial,Helvetica,sans-serif;\" width=\"650px\" border=\"0px\" cellpadding=\"5px\" cellspacing=\"1px\" bgcolor=\"#A1BA87\">
								  <tr>
									<th bgcolor='#FFF' colspan='5'><font size='+2'>Activity Plant History</font></th>
								  </tr>
								  
								  <tr>
									  <td bgcolor=\"#9DDB5B\">Project Name </td>
									  <td bgcolor=\"#9DDB5B\">Plot Name </td>
									  <td bgcolor=\"#9DDB5B\">Crop </td>
									  <td bgcolor=\"#9DDB5B\">No. of crop</td>
									  <td bgcolor=\"#9DDB5B\">Date </td>
								  </tr>
							 ";
							  foreach($count as $count1)
								{
							  $table_head .= "
								  <tr>
									  <td bgcolor=\"#EBF6E0\">".$count1['project_name']."</td>
									  <td bgcolor=\"#EBF6E0\">".$count1['title']."</td>
									  <td bgcolor=\"#EBF6E0\">".$count1['crop']."</td>
									  <td bgcolor=\"#EBF6E0\">".$count1['number']."</td>
									  <td bgcolor=\"#EBF6E0\">".$count1['date']."</td>
								  </tr>";
							  }
							$table_head .= " </table>
								<div style=\"float:left; width:700px; padding-top:5px; padding-bottom:10px; background-color:#AAAAAA;\">
					 <p style='color:#FFF; font-style:normal; font-size:11px; margin-left:20px;'>Copy right @ gogreenearth.in </p>
					</div>
							
							</div>" ;
							echo $table_head;
					
				}
			?>	
    </div>

<!--///////////////////PRINTING CONTENTS///////////-->
