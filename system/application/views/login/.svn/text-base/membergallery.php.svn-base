<link href="<?php echo $base;?>css/lightbox.css" rel="stylesheet" type="text/css" />  
		<script src="<?php echo $base;?>js/prototype.js" type="text/javascript"></script>
	<script src="<?php echo $base;?>js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="<?php echo $base;?>js/lightbox.js" type="text/javascript"></script>
	<script src="<?php echo $base;?>js/mootools.js" type="text/javascript"></script> 

<div id="Message">
 <div id="message_right">
 <strong>Photo Gallery</strong>
    <div class="tdiv">
				
				<?php 
				if(!empty($users))
				{
				  foreach($users as $row)
				  {
				  	$sno++;
				 	//print_r($row);
					 
				  ?>
				  
				  <div style="float:left; margin-left:5px; margin-top:5px; text-align:center;" >
						 
						 <div id="example">
						<a href="<?php echo $base;?>images/member_gallery/<?php echo $row['photo'];?>" rel="lightbox[mando]" id="<?php echo $row['name'];?>" >
						<img src="<?php echo $base;?>images/member_gallery/thumb/<?php echo $row['thumb'];?>" border="0px"  /></a>
						 
						 <div class="lightboxDesc <?php echo $row['name'];?>"><?php echo $row['name'];?></div>
						
						<a href="<?php echo $base;?>images/member_gallery/<?php echo $row['photo'];?>" rel="lightbox[mando]" id="<?php echo $row['name'];?>"><p> <?php echo $row['name'];?></p></a>
						</div>
						
						
			<script type="text/javascript"> 
			window.addEvent('domready',function(){
				Lightbox.init({descriptions: '.lightboxDesc', showControls: true});
			});
		        </script> </div>
			
						
				<?php  } 	}?>
			</div>   
   </div> 
 </div>
 
<div  id="Message" align="right"><?php echo $links;?></div>
