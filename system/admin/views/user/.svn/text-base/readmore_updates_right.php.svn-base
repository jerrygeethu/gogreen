<form name = "readmore_right" id = "readmore_right">
 <div class="composebox">
  <?php 
 foreach($news as $news_content)
 {
			$date =substr($news_content->newsdate,8,2);
			$month = substr($news_content->newsdate,5,2);
			$year = substr($news_content->newsdate,0,4);
 ?>
   <div class="inbox-read">  
           <div class="news_img">
            <img src="<?php echo $base;?>images/news/<?php echo $news_content->photo;?>" class = "news_img"/> 
            </div> 
             <div style="float:left; margin-left:15px; margin-top:103px;"><?php echo $date."-".$month."-".$year;?></div>
            <div class="linebx">  <b><?php echo $news_content->title;?>  </b> </div>
    </div> 
       <div class="inbox-readtxt">
			<?php echo $news_content->news;?>
        </div>
        <?php	}?>
</div> 
<div style="float:right; padding-left:25px;">
        <a href = "<?php echo $base;?>admin.php/user/news/news_list" class ="input_box" style = "color:white;"/><center>Back</center></a>
      </div> 
 <div style="clear:both;"></div>      
 </div>
</div>
</form>
