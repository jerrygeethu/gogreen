<script type = "text/javascript">
function PrintContent()
{
var DocumentContainer = document.getElementById('divtoprint');
var WindowObject = window.open("", "PrintWindow","width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes,align=center");
WindowObject.document.write(DocumentContainer.innerHTML);
WindowObject.document.close();
WindowObject.focus();
WindowObject.print();
WindowObject.close();
}
</script>

<form name="riskmanagement" id = "riskmanagement">
	<div style="width:540px; float:left;">
		<div class="heading"><h3>Activity Risk Management</h3></div>
<?php 
		if(!empty($risk_list))
		{
 ?>
		<div class="middlesection">
			<div class="middleheader">
				<table border="0" >
					<tr>
						 <th class="plantheadertext" align="center">Project </th>
						 <th class="plantheadertext" align="center">Plot </th>
						 <th class="plantheadertext" align="center">Crop </th>
						 <th class="plantheadertext" align="center">Details </th>
						 <th class="plantheadertext" align="center">No. of risks </th>
					</tr>
					<?php
						foreach($risk_list as $risk_list1)
						{
							$start=$start+1;
							$link1="<tr>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_risk/'.$risk_list1['id']."\">".$risk_list1['project_name']."</a></td>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_risk/'.$risk_list1['id']."\">".$risk_list1['title']."</a></td>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_risk/'.$risk_list1['id']."\">".$risk_list1['crop']."</a></td>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_risk/'.$risk_list1['id']."\">".substr($risk_list1['details'],0,10)."...</a></td>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_risk/'.$risk_list1['id']."\">".$risk_list1['number']."</a></td>
											<td class ='linebx' style = 'width:500px;margin-left:10px;'></td>
										</tr>";
									echo $link1;
						}
					?>
				</table>
				<div class="pagination" align="right"> 
				   <p>&nbsp;</p>
				   <?php echo $page;?>
				</div>
			</div>
		</div>	
		<input type="button" name = "download" id ="download" value = "Print" class = "input_box" style = "float:right;margin-top:12px;" onclick = "PrintContent();">
		 <?php 
}
else
{
	?>
	<div style="clear:both;Padding-top:20px;padding-left:20px;"><?php echo "The details will be updated soon";?></div>
	<?php }
?>  
	</div>
</form>   
  


<!--===================Print Area===============-->
	<div style = "display:none;height:200px;text-align:left;" id ="divtoprint">
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
									  <td bgcolor=\"#9DDB5B\">Details</td>
									  <td bgcolor=\"#9DDB5B\">No. of risks </td>
								  </tr> ";
							  }
							  foreach($count as $count1)
								{
							  $table_head .= "
								  <tr>
									  <td bgcolor=\"#EBF6E0\">".$count1['project_name']."</td>
									  <td bgcolor=\"#EBF6E0\">".$count1['title']."</td>
									  <td bgcolor=\"#EBF6E0\">".$count1['crop']."</td>
									  <td bgcolor=\"#EBF6E0\">".substr($count1['details'],0,5)."</td>
									  <td bgcolor=\"#EBF6E0\" style = 'text-align:center;'>".$count1['number']."</td>
								  </tr>";
								}
							$table_head .= " </table>
							<div style=\"float:left; width:700px; padding-top:5px; padding-bottom:10px; background-color:#AAAAAA;\">
						<p style='color:#FFF; font-style:normal; font-size:11px; margin-left:20px;'>Copy right @ gogreenearth.in </p>
						</div>
					</div>" ;
				echo $table_head;
			?>
    </div>
