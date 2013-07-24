
                  <div id="Message">
                  <div id="message_right">
				 
				  <?php  foreach($value->result() as $val)
				          {
						  }
						
				  ?>
				  <table width="600" >
					  <tr>
						 <td align="center"> <form action="<?php echo $base;?>index.php/admin/member" method="post" ><input type="submit" name="edit" value="Go to Member List" id="edit" /></td></form> </td>
					  </tr>
				  </table>   
				  <div>
				
				  <table  style="padding-top:5px;" align="center">
					  <tr>
						  <td>
						  <?php if(!empty($val->photo))
						  { 
							 $ph=explode(".",$val->photo);
							 if($ph!="" && count($ph)>0) 
							 {
								 $photo=$ph[0]."_thumb.".$ph[1];
							
							  
							  ?>
						  <img src="<?php echo $base;?>images/memberphoto/<?php echo $val->name;?>/<?php echo $photo;?> " /><? } }
						  else
						  {						  
						  ?>
						  	<img src="<?php echo $base;?>images/login/profile_img.gif" />

						  
						  <?php } ?>
						  
						  </td>  <td style="padding-left:5px;"> <div><strong><?php echo $val->name;?></strong></div><div><strong><?php echo $val->email;?></strong></div> </td>
					  </tr>
					  
					     <tr>
						   <td><strong>Phone: </strong>
						   
						   <?php echo $val->phone;?></td>
						   <td><strong>Mobile:</strong><?php echo $val->mobile;?></td>
						  
						   
						   
						   
						   
					  </tr>
					   
					   <tr>
						  <td colspan="2">
						  <table>
							  <tr>
								  <td style="vertical-align:top;"><strong>  Address:</strong> </td><td> <?php echo $val->address;?> 
								  </td>
							  </tr>
						  <tr><td style="vertical-align:top;"><strong>City:</strong></td><td><?php echo $val->city;?></td></tr>
						  
						    <tr><td style="vertical-align:top;"><strong>Country:</strong></td><td> <?php echo $val->country;?></td></tr>
						  
						    <tr><td style="vertical-align:top;"><strong>Zip:</strong></td><td><?php echo $val->zip;?></td></tr>
						   
						  </table>
						  
						</td>
					  </tr>
					  <tr><td colspan="2" align="center">
					  <form action="<?php echo $base;?>index.php/admin/memberadd" method="post" >
					  <input type="hidden" name="id" value="<?php echo $val->memberid;?>" id="id" />
					  <input type="submit" name="edit" id="edit" value="Edit" />
					  </form>
					  
					  
					  </td></tr>
					  
					 
				  </table>
				 
				  
				  
				  </div>
                 
                 </div>
                 
                 </div>
       
