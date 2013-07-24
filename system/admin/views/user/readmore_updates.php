
	<form name="readmore" id="readmore" action = "http://192.168.1.67/gogreen/admin.php/user/news/news_list" >
   <div class="composebox">
   <?php 
			foreach($news  as $news_content)
			{
				$date =substr($news_content->newsdate,8,2);
				 $month = substr($news_content->newsdate,5,2);
				 $year = substr($news_content->newsdate,0,4);
	?>
   <div class="inbox-read">
   <div class="news_img"> <img src="<?php echo $base;?>images/news/<?php echo $news_content->photo;?>" class = "news_img"/>
   </div>  
   <div style="float:left; margin-left:15px; margin-top:103px;"><?php echo $date."-".$month."-".$year;?></div>
	<div class="linebx" style="margin-top:5px;"> <h3><u><?php echo $news_content->title;?></u></h3> </div></br>
       </div> 
       </br>
       </br>
       <div class="inbox-readtxt">
       
         <p> <?php echo $news_content->news;?></p> <br />
        </div>
        <?php
         }
    ?>
</div>
<div style="float:right; padding-left:25px;">
        <a href = "<?echo $base;?>admin.php/user/news/news_list" class ="input_box" style = "color:white;"/><center>Back</center></a>
      </div> 
 <div style="clear:both;"></div>      

  
    
    
   </div>
</div>
</form>

