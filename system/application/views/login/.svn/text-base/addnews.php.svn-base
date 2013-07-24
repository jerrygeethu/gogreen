<?php //if($this->input->post('editBtn')!="") echo "dgdfg: ".$nwsid;?>
<form name="addnews" id="addnews" method="post" enctype="multipart/form-data" action="<?php echo $base;?>index.php/admin/addnews">

	<div class="news_head">
     <div class="latest_news"><strong>Add News</strong></div> 
  </div>
                    
	<div id="Message">
		 <div id="message_right">
		 
				
				
				<div class="tdiv">
				<div class="news01">
					
						<?php $this->form_validation->set_error_delimiters('<div class="error">', '</div>');?>
							<table class="tab">
							
								<tr>
									<td class="ttd">Title</td>
									<td class="ttd">
										<input type="text" name="topic" id="topic"  value="<?php  print !empty($listnews['result']->topic)? ($listnews['result']->topic) : set_value('topic');?>" />
										<?php echo form_error('topic'); ?>
									</td>
								</tr> 
								
								<tr>
									<td class="ttd">News</td>
									<td class="ttd">
									<textarea name="detail" id="detail" rows="5" cols="30"><?php print !empty($listnews['result']->detail)? $listnews['result']->detail : set_value('detail');?></textarea>
									<?php echo form_error('detail'); ?>
									</td>
								</tr> 
								
								<tr>
									<td class="ttd">Date</td>
									<td class="ttd">
										<input type="text" name="newsdate" id="newsdate" readonly value="<?php  print !empty($listnews['result']->	newsdate)? ($listnews['result']->	newsdate) : set_value('newsdate');?>"/>
										<img onclick="displayDatePicker('newsdate');"  value="select" src="<?php echo $base; ?>images/calander.jpg"/>
										<?php echo form_error('newsdate'); ?>
									</td>
								</tr> 
															
								<tr>
									<td class="ttd">Photo</td>
									<td class="ttd">
										<input type="file" name="userfile" id="userfile" checked />
										<?php 
											if(!empty($listnews['result']->photo))
											{ 
												echo "<br/>";
												$imgsrc=$base."images/news/".$listnews['result']->photo;
										?>
												<div id="news_img">
													<img src="<?php echo $imgsrc;?>" width="106px" height="59px" alt=""/>
													<a href="javascript:remove();" >Remove Photo</a>	
												 <input type="hidden" name="photo" id="photo" value="<?php echo $listnews['result']->photo;?>" />
												</div>	
										<?php 
											} 
										?>
									</td>
								</tr> 
								
								<tr>
									<td class="ttd" colspan="2">
										<?php
											if(($this->input->post('viewBtn')!="")||($this->input->post('newsid')!=""))
											{
										?>
												<input type="submit" name="editBtn" id="editBtn" value="Edit"/>
												<input type="submit" name="delBtn" id="delBtn" value="Delete"/>
												<input type="hidden" name="newsid" id="newsid" value="<?php print !empty($listnews['result']->newsid)? $listnews['result']->newsid : $nid;?>"/>
										<?php
											}
											else
											{
										?>
												<input type="submit" name="addBtn" id="addBtn" value="Add"/>
										<?php
											}
										?>
									</td>
								</tr> 
								
							</table>
					 
					</div>
					</div>
								 
				</div>
									 
	</div>
	
</form>	
	
	<div class="news_head">
     <div class="latest_news"><strong>News Details</strong></div> 
  </div>
				 
	<div id="Message">

		<div id="message_right">  
				
			
			
				<div class="tdiv">
				<div class="news01">
				
					<?php 
						if((!empty($newslst['totalrows'])) || ($newslst['totalrows'])>0)
						{
					?>
							<table class="tab">
					
								<tr>
						
									<th class="ttd" align="center">Sl No</th>
									<th class="ttd" align="center">Title</th>
									<th class="ttd" align="center">News</th>
									<th class="ttd" align="center">Date</th>
									<th class="ttd" align="center">Edit</th>
							
								</tr>
						
								<?php 
								
									//print_r($newslst['result']);		
									$i=1;		
									$i=$start+1;
									foreach($newslst['result'] as $value)
									{//$i=$start;
										$date = date_create($value->newsdate); 
										//echo date_format($date, 'M-d');
										$len=strlen($value->detail);
								?>
							
										<tr>
											<td class="ttd" width="8%"><?php echo $i++;?></td>
											<td class="ttd" width="22%"><?php echo ucfirst($value->topic);?></td>
											<td class="ttd"  width="43%">
												<?php
													if($len>150)
													{
														echo ucfirst(truncate($value->detail,0,150));
														echo anchor($base.'index.php/admin/news_farming/'.$value->newsid, 'Read More >>', array('title' => 'News in detailes!'));
													}
													else
													{
														echo ucfirst($value->detail);
													}
												?>
											</td>
											<td class="ttd"><?php echo date_format($date, 'dS M Y');?></td>
											<td class="ttd">
											<form name="listnews" id="listnews" method="post" action="<?php echo $base;?>index.php/admin/addnews">
													<input type="submit" name="viewBtn" id="viewBtn" value="Edit"/>
													<input type="hidden" name="newsid" id="newsid" value="<?php if(!empty($value->newsid)) echo $value->newsid;?>"/>
												</form>
											</td>
										</tr>
									
								<?php
									}
								?>
						
							</table>
							
								<div class="page" align="right" >
									<?php echo $link;?>
								</div>
								
					<?php 
						}
						else
						{
					?>
							<div align="center"> No Records found </div>
					<?php
						}
					?>
								
				</div>
				</div>
				
		</div>
		
	</div>		  
				  
<script type="text/javascript">
function remove()
{
	document.getElementById('photo').value="";
	document.getElementById('news_img').style.display="none";
	
}

</script>
