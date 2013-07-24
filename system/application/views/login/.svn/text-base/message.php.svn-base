                  <!--begin:plot_text-->
                 <div id="Message">
				     <div id="message_right">
					  <form action="<?php echo $base;?>index.php/admin/delete"  id="frm" name="frm" method="post">
				 <?php 
				$i=0;
				if($details->num_rows!=0)
				{
					$i=1;
				 foreach($details->result() as $det)
				 {  ?>
             
                 <div class="msg_text_right">
                 <div class="checkbox">
				 <input name="check<?php echo $i;?>"  id="check<?php echo $i;?>" type="checkbox" value="check" onClick="fun(<?php echo $i;?>,<?php echo $det->id;?>);" />
				 <input name="id"  id="id" type="hidden" value="<?php echo $det->id;?>" />
				   <input name="checkid<?php echo $i;?>"  id="checkid<?php echo $i;?>" type="hidden" value="" />
				   <?php if(!empty($type))  { ?>
				    <input name="type"  id="type" type="hidden" value="<?php echo $type;?>" />
					<?php } ?>
				
				 
				 </div>
                 <a href="<?php echo $base;?>index.php/admin/messageinbox/<?php echo $det->id;?>/<?php if(!empty($type)) { echo $type; } ?>">
				 <div class="msg_name"><?php if(!empty($type))  {  echo "To:" .$det->reciever;} else {  echo $det->sender; }?>
				
				 </div>
				 <div class="msg_txt01"><b><?php echo truncate(strip_tags($det->subject),0,20);?></b>:<?php echo truncate(strip_tags($det->body),0,50);?>...</div>
                 <div class="msg_date"><?php 
			
					$date = date_create($det->date);
					echo date_format($date, 'M-d');

				 
				 
				?></div></a> 
                   </div>
               <?php
			   
			   $i++; }
			   ?> <input name="fullid"  id="fullid" type="hidden" value="" />
                
                 </div> </form>
                 
				  <div >
				  
				  <input type="button" name="delete" id="delete" onClick="funs(<?php echo $i;?>);" value="Delete" />
				  
				  
				  </div>
			   
			   
			   <?php
		         }
			   else
			   {
				   
				   if($type=="sendmail")
				   {
					    echo "No Send messages are  here";
				   }
				   else
				   {
				   echo "Inbox is empty";
			       }
				   
			   }
			   
			    ?>
                

				 
				  <?php
				  if(!empty($page))
				  {
				   print_r($page);
			   }
				   
				    ?>
				 
                
                  <!--end:plot_text    <div id="next"><a href="#">Next</a></div>
                  <div id="preview"><a href="#">Previous</a></div>-->
        <script type="text/javascript" language="javascript">
				function fun(del,id)
				{
				
				   
				
					if(document.getElementById('check'+del).checked==true)
					{
						
						document.getElementById('checkid'+del).value=id;
												
					}
							
				}
				function funs(no)
				{
					
					var data=new Array();
					var val=document.getElementById('checkid1').value;
				
					for(var i=2;i<no;i++)
					{
							
						 data[i]=document.getElementById('checkid'+i).value;
						 if(data[i]!="")
						 {
					      if(val!="")
						  {
							 val+=",";
						   }
							 val+=data[i];
						 
					     }
						
					}
				
				document.getElementById('fullid').value=val;
				document.frm.submit();
				}
		
   
		</script>

