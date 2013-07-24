</head>
<center>
<body>
    <table width="1003" border="0" cellspacing="0" cellpadding="0">
<!-- Top menu start here -->
	<?php echo get_menu($base); ?>
<!-- Top menu End here -->
      <tr>
        <td height="198" colspan="2" class="flash5">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="border_cell">
        <table width="99%" border="0" cellspacing="0" cellpadding="0">
		 <tr>
          <td colspan="3" align="left"  style="padding-left:230px;padding-top:40px; padding-bottom:10px;font-size:16px;color:#76b803; "> <a onclick="show('plant');" style="cursor:pointer;">Penta Plantations</a> <span style="padding-left:25px; color:#cccccc;"><a onclick="show('pentafarms');" style="cursor:pointer;"> Penta farms</a> </span>  
          <span style="padding-left:25px; color:#cccccc;"><a onclick="show('bodi');" style="cursor:pointer;"> Bodi site </span></a>   <span style="padding-left:25px;"> <a onclick="show('vallakadavu');" style="cursor:pointer;">Vallakadavu </a></span></td>
          </tr>
         
          <tr>
            <td width="89%"  align="center" valign="top" class="main_matter" colspan="3">
			<table width="75%"  border="0" class="gallery" cellspacing="0" cellpadding="0">
             
              <tr>
                <td align="center" valign="middle">
				
                <div id="bodi" style="display:none;">
				<div height="30" align="center" valign="middle" class="head_txt1">Bodi site Gallery </br></div>
				<?php 
				$j=5;
				for($i=1;$i<21;$i++)
				{
					
					?>
                 <a href="<?php echo $base; ?>images/gallery/bodi_site/large_size/img<?php echo $i;?>.jpg" rel="lightbox[mando]" id="image<?php echo $i;?>" ><img src="<?php echo $base; ?>images/gallery/bodi_site/small_size/img<?php echo $i;?>.jpg" border="0" alt="" /></a>
                 <div class="lightboxDesc image<?php echo $i;?>">Farm Gallery</div>
						
						
						<?php
						if($i==$j)
						{ 
													
							$j=$j+5; 
							
							
							?>
						 <br />
                          <br />
							
						<?php }	
						
						
						 } ?>
				 <script type="text/javascript">
					window.addEvent('domready',function(){
						Lightbox.init({descriptions: '.lightboxDesc', showControls: true});
					});
		        </script>    
                                    
                </div>
				 <div id="vallakadavu" style="display:none;">
			<div height="30" align="center" valign="middle" class="head_txt1">Vallakadavu  Gallery </br></div>

				<?php 
				$j=5;
				for($i=1;$i<21;$i++)
				{
					
					?>
                 <a href="<?php echo $base; ?>images/gallery/vallakadavu/large/img<?php echo $i;?>.jpg" rel="lightbox[mando]" id="image<?php echo $i;?>" ><img src="<?php echo $base; ?>images/gallery/vallakadavu/small/img<?php echo $i;?>.jpg" border="0" alt="" /></a>
                 <div class="lightboxDesc image<?php echo $i;?>">Farm Gallery</div>
						
						
						<?php
						if($i==$j)
						{ 
													
							$j=$j+5; 
							
							
							?>
						 <br />
                          <br />
							
						<?php }	
						
						
						 } ?>
						  <script type="text/javascript">
					window.addEvent('domready',function(){
						Lightbox.init({descriptions: '.lightboxDesc', showControls: true});
					});
		        </script>    
                                    
                </div>
				<div id="pentafarms" style="display:none;">
				<div height="30" align="center" valign="middle" class="head_txt1">Penta farms Gallery </br></div>

				<?php 
				$j=5;
				for($i=1;$i<16;$i++)
				{
					
					?>
                 <a href="<?php echo $base; ?>images/gallery/penta_farms/large/img<?php echo $i;?>.jpg" rel="lightbox[mando]" id="image<?php echo $i;?>" ><img src="<?php echo $base; ?>images/gallery/penta_farms/small/img<?php echo $i;?>.jpg" border="0" alt="" /></a>
                 <div class="lightboxDesc image<?php echo $i;?>">Farm Gallery</div>
						
						
						<?php
						if($i==$j)
						{ 
													
							$j=$j+5; 
							
							
							?>
						 <br />
                          <br />
							
						<?php }	
						
						
						 } ?>
						  <script type="text/javascript">
					window.addEvent('domready',function(){
						Lightbox.init({descriptions: '.lightboxDesc', showControls: true});
					});
		        </script>    
                                    
                </div>
				
				
				<div id="plant" >
				<div height="30" align="center" valign="middle" class="head_txt1">Penta plantations Gallery </br></div>

				<?php 
				$j=5;
				for($i=1;$i<19;$i++)
				{
					
					?>
                 <a href="<?php echo $base; ?>images/gallery/penta_plantations/large/img<?php echo $i;?>.jpg" rel="lightbox[mando]" id="image<?php echo $i;?>" ><img src="<?php echo $base; ?>images/gallery/penta_plantations/small/img<?php echo $i;?>.jpg" border="0" alt="" /></a>
                 <div class="lightboxDesc image<?php echo $i;?>">Farm Gallery</div>
						
						
						<?php
						if($i==$j)
						{ 
													
							$j=$j+5; 
							
							
							?>
						 <br />
                          <br />
							
						<?php }	
						
						
						 } ?>
						  <script type="text/javascript">
					window.addEvent('domready',function(){
						Lightbox.init({descriptions: '.lightboxDesc', showControls: true});
					});
		        </script>    
                                    
                </div>
				
				
				
				</td>
              </tr>
              <tr>
                <td align="center" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="middle">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          
          <tr>
            <td height="50" colspan="3" align="center" valign="top" >&nbsp;</td>
          </tr>

                    
 <script type="text/javascript">
 
 function show(img)
 {
	  if(img=="bodi")
	  {
	    document.getElementById('bodi').style.display="block";
	    document.getElementById('vallakadavu').style.display="none";
	    document.getElementById('pentafarms').style.display="none";
		 document.getElementById('plant').style.display="none";
      }
	  else if(img=="vallakadavu")
	  {
		  
	     document.getElementById('bodi').style.display="none";
	     document.getElementById('vallakadavu').style.display="block";
	     document.getElementById('pentafarms').style.display="none";
		 document.getElementById('plant').style.display="none";
	  
	  }
	  else if(img=="pentafarms")
	  {
		  
	    document.getElementById('pentafarms').style.display="block";
	    document.getElementById('vallakadavu').style.display="none";
	    document.getElementById('bodi').style.display="none";
		document.getElementById('plant').style.display="none";
	  }
	   else if(img=="plant")
	  {
		document.getElementById('plant').style.display="block";
	    document.getElementById('pentafarms').style.display="none";
	    document.getElementById('vallakadavu').style.display="none";
	    document.getElementById('bodi').style.display="none";
	  }
	 
 }
 
 
 
</script>   
