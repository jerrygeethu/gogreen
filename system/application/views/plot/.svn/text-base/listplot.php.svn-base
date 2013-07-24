
			
<script type="text/javascript" language="javascript"  src="<?php echo $base;?>js/calendar.js"></script>
<link href="<?php echo $base;?>css/calendar.css" rel="stylesheet" type="text/css" />						
								  <div id="Message">
                  <div id="message_right">
	
					<!--<div align="right"><strong><a class="link" href="<?php echo $base;?>index.php/admin/plot/addplot/<?php echo intval($hidprojectid);?>">Add Plot </a></strong></div>-->
				  <strong>Plot List</strong>  				 
				  <div class="tdiv">
				  <table class="tab">
					<tr>
						<td class="ttd" colspan="3"></td>
						</tr> 
					<?php 
					$p=0;
					if($getplot['total_rows']>0)
					{
							foreach($getplot['result'] as $row)
							{
								$p++;
								?>
								<tr>
								<td class="ttd"><?php echo "<strong>".$row->title."</strong><br/>".truncate($row->description,0,10);?></td>
								<td class="ttd">
								<form name="plotform" id="plotform" method="post" action="<?php echo $base;?>index.php/admin/plotview">
								<input type="submit" name="viewplot" id="viewplot" value="view"/>
								<input type="hidden" name="plotid" id="plotid" value="<?php echo $row->plotid; ?>"/>
								<input type="hidden" name="projid" id="projid" value="<?php echo $row->projectid; ?>"/>
								</form>
								</td>
								
								
								<td class="ttd">
								<form name="wkform<?php echo $p;?>" id="wkform<?php echo $p;?>" method="post" action="<?php echo $base;?>index.php/admin/workers">
								Work date:<input type="text" name="allotedate<?php echo $p;?>" id="allotedate<?php echo $p;?>" readonly="yes"  size="10"/>
								<img onclick="displayDatePicker('allotedate<?php echo $p;?>');"  value="select" src="<?php echo $base;?>images/calander.jpg"/>								
								No. of Workers:<select name="worker" id="worker">
								<?php 
								for($i=1;$i<=100;$i++)
								{
								?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php
								 }?>
								</select>
								<input type="button" name="addwk" id="addwk" value="Add" onclick="javascript:checkall('wkform<?php echo $p;?>','<?php echo $p;?>');"/>
								<input type="hidden" name="pp" id="pp" value="<?php echo $p; ?>"/>								
								<input type="hidden" name="plotid" id="plotid" value="<?php echo $row->plotid; ?>"/>								
								<input type="hidden" name="projid" id="projid" value="<?php echo $row->projectid; ?>"/>
								
								</form>
								</td>
								</tr> 	
				
								<?php 
								
							}
					}
					else
					{
						?>
						<tr>
						<td class="ttd"><div align="center">No records</div></td>
						</tr> 						
						<?php 
					}
						?>
				  </table>  				  
				  </div>  
					<div><?php print $link; ?></div>   
                 </div>     
                 </div>
<?php echo $addform;?>
<script type="text/javascript" language="JavaScript">
function checkall(formid,p)
{
			if(document.getElementById('allotedate'+p).value=="")
			{
				alert("Enter Date");
				document.getElementById('allotedate'+p).focus();
				return true;
			}						
			document.getElementById(formid).submit();
}		 
		 </script>
