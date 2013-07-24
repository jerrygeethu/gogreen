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
<form name = "gallery" action = "<?$base?>index.php/admin/login">
<div style="width:540px; float:left;">
<div class="heading">Image Gallery</div>
 <div class="gallerysection" id ="gallery" >
			<?php
				if(!empty($value))
				{
					foreach($image_data as $image1)
					{						
						$path = $base.'uploads/gallery/thumb/'.$image1['thumb'];
						$path1 = $base.'uploads/gallery/'.$image1['photo'];
					?>	
					<div class='galleryimg' align='center' ><a href = <?php echo $path1;?>><img width="100px" height="84px" src='<?php echo $path;?>' border='0' /><?php //echo $image1['name'];?></a></div>
				<?php 
					}
				}
				else
				{
					echo "There are no Image Galleries available now. It will be updated soon.";
				}
            ?>
   </div> 
	<div class="composebox_back"> 
		<div class="pagination" align = "right"><?echo $page;?></div>
	</div>
  </div> 
   </form>
