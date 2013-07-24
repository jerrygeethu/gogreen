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
	  
});
</script>
								
								  <div id="Message">
                  <div id="message_right">
	
					<div align="right">
					<form name="plotaddfrm" id="plotaddfrm" method="post" action="<?php echo $base;?>index.php/admin/plot/addplot/<?php echo $hidprojectid;?>">
						<input type="submit" name="viewbtn" id="viewbtn" value="Add Plot "/>
						<input type="hidden" name="fromproject" id="fromproject" value="1"/>					
						</form>
						
						<form name="plotform" id="plotform" method="post" action="<?php echo $base;?>index.php/admin/plot">
						<input type="submit" name="viewplotbtn" id="viewplotbtn" value="Plot list"/>
						<input type="hidden" name="projectid" id="projectid" value="<?php echo $hidprojectid;?>"/>
						</form>
						
						<?php 
						if($this->session->userdata('status')=="admin")
						{
						?>
						<form name="activityfrm" id="activityfrm" method="post" action="<?php echo $base;?>index.php/admin/activity/addact">
						<input type="submit" name="viewbtn" id="viewbtn" value="Add activity"/>
						<input type="hidden" name="typeid" id="typeid" value="<?php echo $hidprojectid;?>"/>
						<input type="hidden" name="fromactivtiy" id="fromactivtiy" value="1"/>	
						<input type="hidden" name="type" id="type" value="project"/>	
										
						</form>
						<?php
						}
						if($hidprojectid>0)
						{
								?>						
							<strong><a href="#" id="contact" class="link">Project Edit</a></strong>
								<?php
						}
								?>
					</div>
				  <strong>Project Details</strong>  
				 
				  <div class="tdiv">
				  <table class="tab">
						<tr><td class="ttd" colspan="6"></td></tr>
						<tr>
						<td class="ttd"><strong><?php echo (!empty($projectrow->title))?$projectrow->title:""; ?></strong></td>						
						</tr> 
						<tr>
						<td class="ttd"><?php echo (!empty($projectrow->description))?$projectrow->description:""; ?></td>						
						</tr> 
						<tr>
						<td class="ttd"><?php echo (!empty($projectrow->place))?$projectrow->place:""; ?></td>						
						</tr> 
						<tr>
						<td class="ttd"><?php echo (!empty($projectrow->extent))?$projectrow->extent:""; ?></td>						
						</tr> 
						<tr>
						<td class="ttd"><?php echo (!empty($projectrow->remarks))?$projectrow->remarks:""; ?></td>						
						</tr> 
						<tr>
						<td class="ttd"><?php echo (!empty($projectrow->name))?$projectrow->name:""; ?></td>						
						</tr> 						
				  </table> 
					<?php
					//if($project_act['total_rows']>0)
					if($plot_act['total_rows']>0)
					{ 	
					?> 
					<!--<strong>Activity Details</strong>	-->
					<strong>Plot Activity Details</strong>
					<table class="tab">
								<tr>
							 <th class="tth">Title</th>
							  <th class="tth">Description</th>
								<th class="tth">Entered on</th>
								 <th class="tth">Entered by</th>
						    </tr>
							<?php 					 	 	
							//foreach($project_act['result'] as $row) 
							foreach($plot_act['result'] as $row) 
							{
									?>
									<tr>
										<td class="ttd"><?php echo $row->title;?></td>
										<td class="ttd"><?php echo $row->data;?></td>
										<td class="ttd"><?php echo $row->createdate;?></td>
										<td class="ttd"><?php echo $row->name;?></td>
									</tr>
									<?php 
							}
							?>
					</table>
					<div><?php echo $link;?></div>	
					<?php 
					}
					?> 
				  </div>  
					
					  
					
                 </div>     
                 </div>
<div id="backgroundPopup"></div>
<div id="popupContact">
<?php print $editform; ?> 
</div>

