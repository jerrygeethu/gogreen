<form name = "draft" id = "draft" method = "post" action = "<?php echo $base;?>admin.php/user/messegs/draft">
 <div class="heading"> <h3> Draft</h3></div>
 <div class="composebox">
  <?php
	if(!empty($value))
	{
		foreach($value as $row)
		{
			echo "<div class='composedraft'><div class='chksbox'> <input type='checkbox' name='check1[]' id='check1[]' value ='".$row['id']."'> </div>";
			$link1 =  "<span style = 'padding-left:12px'>".$row['to']."</span>
			<span style = 'padding-left:12px;width:50px;'>".substr($row['message'],0,25)."....</span>
			<span style = 'padding-left:12px'>".$row['date']."</span>
			<div class='linebx'></div></div>";
			echo $this->input->post('check1');
			$path = $base."admin.php/user/messegs/resend_mail";
			$name = anchor($path.'/'.$row['id'],$link1,'class="link"');
			echo $name;
		}
  ?>
       <div class="composesave" align="right"> 
      <div style="float:right; padding-left:25px;">
        <input type="submit" name="input2" id="input2" value="Delete" class="input_box" />
      </div> 
      <div style="float:right; padding-left:25px;">
      </div> 
      </div>
    <?php
	}
	else
	{
		echo "<span style='margin-left:22px;'>Draft is empty.</span>";
	}
    ?>
     </div>
     
      <div class="composebox_back"> 
		<div class="pagination" align = "right"><?echo $page;?></div>
	</div>
 <div style="clear:both;"></div>      
   </div>
</div>
</form>
