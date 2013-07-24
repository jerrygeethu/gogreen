                  <div id="Message">
                  <div id="message_right">
				  
				  <strong>Member Details</strong>
				  <?php //if($message!="")
				  //{
					  //echo $message; } ?>
				  <div class="tdiv">
				  <table class="tab">
					  <tr >
						   <th class="tth">S.No</th>  <th class="tth">Name</th>  <th class="tth">Phone</th> <th class="tth">Email</th> <th class="tth">Status</th><th class="tth">View</th>
						    </tr>
							<?php 
							$i=$limit+1;
							foreach ($details->result() as $row)
							{ 
								
								
								?>
						<tr>
			             
						 <form method="post" action="<?php echo $base;?>index.php/admin/memberdet"><td class="ttd"><?php echo $i;?></td><td class="ttd"><?php echo $row->name;?></td>  <td class="ttd"><?php echo $row->mobile;?></td> <td class="ttd"><?php echo $row->email;?></td> <td class="ttd">
						 <?php if($row->memstatus=="inactive")
						 { ?>
						  <img src="<?php echo $base;?>images/login/inactive.jpg" width="20px;" height="20px;"/>
						  <?php } else { ?>
						 <img src="<?php echo $base;?>images/login/active.jpg" width="20px;" height="20px;"/>
						 <?php }?>
						 </td><td class="ttd"><input type="hidden" name="id" id="id" value="<?php echo $row->memberid;?>" /> <input type="submit" name="view" id="view" value="View" /></td></form>
					</tr>  
					<?php  $i++; } ?>
				  </table>
				  
				  <?php print_r($page);?>
				  
				  </div>
                 
                 </div>
                 
                 </div>
       
