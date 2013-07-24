<script type="text/javascript">
/*
    $(function() {
        $('#gallery a').lightBox();
    });
    
*/
 $(function() {
        $('#gallery a').lightBox({
            maxHeight: 500,
            maxWidth: 900}
);
    });
    </script>
   	<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */

	#gallery {
		background-color:#ECF6E0;
		padding: 20px;
		width: 430px;

	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }

	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 20px;
		margin-left:10px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 20px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	</style>
<form name = "video gallary">
<div style="width:540px; float:left;">
<div class="heading"> <h3> Video </h3></div>


   <div class="gallerysection" id ="gallery">
			<?php
				if(!empty($value))
				{
					foreach($video_data as $video1)
					{
						//$path = $base.'uploads/gallery/thumb/'.$image1['thumb'];
						$path1 = $base.'uploads/video'.$video1['id'];
				?>	
				
						<div class='galleryimg' align='center'><img width="100px" height="84px" src="<?php echo $base?>images/gallery/video.png"><?php echo $video1['id'];?></div>
	
            <?php 
					}
				}
				else
				{
					echo "There are no Videos available now. It will be updated soon.";
				}
            ?>
            
   </div> 
   <div class="composebox_back"> 
   <div class="pagination" align="right"> 
   <p>&nbsp;</p>
   
   <?php echo $page;?>
  </div>

   </div>
</div>
</form>

 
 


