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

<form name = "workhistory" id = "workhistory">

	<div style="width:540px; float:left;">
		<div class="heading"> <h1> Activity Work History </h1>  </div>
		<?php if(!empty($workers_list))
		{?>
		<div class="middlesection">
			<div class="middleheader">
				<table border="0" >
					<tr>
						 <th class="plantheadertext" align="center">project </th>
						 <th class="plantheadertext" align="center">Plot </th>
						 <th class="plantheadertext" align="center">date </th>
						 <th class="plantheadertext" align="center">Activity </th>
						 <th class="plantheadertext" align="center">Workers Count </th>
					</tr>
					<?php
						foreach($workers_list as $workers_list1)
						{	
							$y= substr($workers_list1['alloteddate'],0,4);
							$m = substr($workers_list1['alloteddate'],5,2);
							$d = substr($workers_list1['alloteddate'],8,2);
							$link1  ="
										<tr>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_work/'.$workers_list1['workerid']."\">".$workers_list1['project_name']."</a></td>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_work/'.$workers_list1['workerid']."\">".$workers_list1['title']."</a></td>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_work/'.$workers_list1['workerid']."\">".$d.'-'.$m.'-'.$y."</a></td>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_work/'.$workers_list1['workerid']."\">".$workers_list1['activity']."</a></td>
											<td class='plantlisttext' align='center'><a href=\"".$base.'admin.php/user/activity/readmore_work/'.$workers_list1['workerid']."\">".$workers_list1['workerscount']."</a></td>
											<td class ='linebx' style = 'width:500px;margin-left:10px;'></td>
										</tr>
									";
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
	<div style="clear:both;Padding-top:20px;padding-left:20px;"><?php echo "The details about the workers will be updated soon";?></div>
	<?php }
?>  
	</div>
</form>  

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
							<th bgcolor='#FFF' colspan='5'><font size='+2'>Activity Work History</font></th>
						</tr>
								  <tr>
									  <td bgcolor=\"#9DDB5B\">Project Name </td>
									  <td bgcolor=\"#9DDB5B\">Plot Name </td>
									  <td bgcolor=\"#9DDB5B\">Date </td>
									  <td bgcolor=\"#9DDB5B\">Activity</td>
									  <td bgcolor=\"#9DDB5B\">Workers Count</td>
								  </tr>";
						 }
						  foreach($workdata as $workdata1)
							{
								$y= substr($workdata1['alloteddate'],0,4);
								$m = substr($workdata1['alloteddate'],5,2);
								$d = substr($workdata1['alloteddate'],8,2);
								$table_head .= "
								  <tr>
									  <td bgcolor=\"#EBF6E0\">".$workdata1['project_name']."</td>
									  <td bgcolor=\"#EBF6E0\">".$workdata1['title']."</td>
									  <td bgcolor=\"#EBF6E0\">".$d.'-'.$m.'-'.$y."</td>
									  <td bgcolor=\"#EBF6E0\">".$workdata1['activity']."</td>
									  <td bgcolor=\"#EBF6E0\" style = 'text-align:center;'>".$workdata1['workerscount']."</td>
								  </tr>";
							  }
							$table_head  .= "</table> 
							<div style=\"float:left; width:700px; padding-top:5px; padding-bottom:10px; background-color:#AAAAAA;\">
						<p style='color:#FFF; font-style:normal; font-size:11px; margin-left:20px;'>Copy right @ gogreenearth.in </p>
						</div>
					</div>" ;
					echo $table_head ;
			?>
    </div>

