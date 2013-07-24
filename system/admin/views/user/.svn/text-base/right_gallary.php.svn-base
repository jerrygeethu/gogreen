<form name="rightsidegallery" id="rightsidegallery">
<div class="gallery" align="center"> 
	<div class="gallerytext" align="center"> <div> Gallery </div>   </div>
	<?php 
		foreach($image as $image1)
		{
		
	?>
	<div class="galleryimage">
    <a href="<?php echo $base;?>admin.php/user/gallery/gallery_photos"><img src="<?php echo $base;?>uploads/gallery/thumb/<?php echo $image1['thumb']?>" style = "width:100px;height:55px;" border="0"></a>
    </div>
	<?php
		}
	?>
    
        
        <div class="newstext" align="center"> <div style="margin-top:5px;"> News </div> </div> 

           <?php 
           $i =0;
             foreach($news as $news1)
        {
			
		?>
		<div class="newscontant" align="center"> 
			<span><p><?php echo substr($news1['news'],0,150)."<br>";?>
			
			<a href = "<?php echo $base;?>admin.php/user/gallery/read_more/<?php echo $news1['newsid'];?>">
            <span style="font-family:Arial, Helvetica, sans-serif; font-style:italic; font-size:12px; color:#4c6d1d;"> Read More>> </span>
            </a>
            
            </span></p>
        </div>
          <?php 
			}
        ?>
      </div>
  <div style="clear:both;"></div>      
   </div>
</div>
</form>
