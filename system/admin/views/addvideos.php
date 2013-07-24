<script type="text/javascript">
function show()
{
	
	var x=document.getElementById('category').value;
	if(x=="private")
	{
	document.getElementById('plot').style.display="block";
    }	
	else
	{
		document.getElementById('plot').style.display="none";
			
	}
}
</script>
<div class="contentarea2">  
<div style=" float:left; width:10px; height:25px;"></div>
<form action="<?php echo $base;?>admin.php/gallery/addvideos" method="post" enctype="multipart/form-data">
<div class="font" style=" float:left; height:20px;  width:113px; padding-top:20px;">    Name: <span style="color:#CC0000;" >*  </span>  </div>
<div class="floatleft" style="height:20px;  width:300px; margin-top:15px;">
 <div style=" float:left; height:20px;  width:200px;">    
 <input tabindex="2" style="width:170px; " type="text" name="name" id="name" />  </div></div>
<div class="cl" style="line-height:10px;"></div><br />
<div style=" float:left; width:10px; height:25px;"></div>
<div  class="font"style=" float:left; height:20px;  width:113px; padding-top:2px;"><span style=" float:left; height:20px;  width:100px;"> Description: <span style="color:#CC0000;" >*  </span> </span></div>
<div style=" float:left;   width:200px; padding-top:3px;">    
<label>
<textarea name="description"  id="description"  rows="7" cols="21" ></textarea>
</label>  </div>
<div class="cl"></div><br />
<div style=" float:left; width:10px; height:25px;"></div>
	<div  class="font"style=" float:left; height:20px;  width:113px;"> Upload video:</div>
    <div style=" float:left; height:20px;  width:100px;">
  <input tabindex="8"  type="file" name="userfile" id="userfile" />
</div> 
	<div class="cl"></div> <br />
<div style=" float:left; width:10px; height:25px;"> </div>
<div class="font" style=" float:left; height:20px;  width:113px;"> Category :  </div>
<div style=" float:left; height:20px;  width:250px;">   <select name="category" id="category" onchange="show();" style="width:170px;">
  <option value="public">Public</option>
  <option value="private">Private</option>
 
</select>  </div>
<div class="cl"></div> <br />

<div id="plot" style="display:none;">
<div align="center" style="width:430px;">
  <div align="left" class="font" style=" float:left; height:20px;  width:113px; padding-left:10px;">Plot :  </div>
	<div style=" float:left; height:20px;  width:170px;">  
	 <select name="plot" style="width:170px;">
	 <option value="">Select Plot</option>
	 <?php foreach($memberlist as $mlist)
	 { ?>
	 <option value="<?php echo $mlist->plotid;?>"><?php echo $mlist->title;?></option>
	 
	 
	 <?php } ?>
  	
	</select>  </div>




<div class="cl" style="height:2px;"></div> </div>

<br /><br />
</div>





<div style=" float:left; width:10px; height:25px;"></div>
<div  class="font"style=" float:left; height:20px;  width:113px;"> Active: </div>
<div class="floatleft" style="height:20px;  width:300px;"> 
<div style=" float:left; height:20px;  width:300px; ">
 <input type="checkbox" name="status" id="status" /></div></div>
<div class="cl"></div> <br />

<div align="center">
    <input type="submit" name="add" id="add" value="Save" class="input_box"/> &nbsp; &nbsp;
   
      
</div>



</div>

