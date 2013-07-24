<script language="javascript">
var emails = new Array( 'mircho.mirev@hotmail.com', 'michael.jordan@chicago.com', 'vin.diesel@paramaunt.com', 'steven.spielberg@darkside.com', 'family@pord.net', 'friends@hell.com', 'pizza@health.com', 'mc.donalds@mc-donalds.com', 'large.land.mass@finally.com' )
</script>
<div class="spdiv1"></div>
<div class="contentarea1">

<!--/////////////////////////////////////////////////////-->
<div>

<div style="height:350px;">
 

<div style=" float:left; height:20px; width:10px;">  </div>
<div style=" float:left;  height:300px; width:500px;">

<div style=" float:left; width:100px; height:20px; background-color:#999999; color:#FFFFFF; padding-top:2px;">&nbsp;To</div>
<div style=" float:left; width:10px; height:25px;"></div>
<div style=" float:left; width:350px; height:25px;">
<input class="dropdown" autocomplete="off" id="to" name="to" style="width: 400px;" acdropdown="true" autocomplete_list="array:emails" autocomplete_list_sort="true" autocomplete_matchsubstring="true">
</div>
<div style="height:10px;" class="cl">&nbsp;</div>

<div style=" float:left; width:100px; height:20px; background-color:#999999; color:#FFFFFF; padding-top:2px;">&nbsp; Subject</div>
<div style=" float:left; width:10px; height:25px;"></div>
<div style=" float:left; width:350px; height:25px;"><input style="width:400px;" name="subject" id="subject" type="text" /></div>
<div style="height:10px;" class="cl"></div>

<div style=" float:left; width:100px; height:20px; background-color:#999999; color:#FFFFFF; padding-top:2px;">&nbsp; Message</div>
<div style=" float:left; width:10px; height:25px;"></div>
<div style=" float:left; width:350px; height:150px;"><textarea style="width:400px; height:150px;" name="message" id="message">Message message  message  message </textarea></div>
<div style="height:10px;" class="cl"></div>

<div id="attach" style="display:none;">

<div style=" float:left; width:100px; height:20px; background-color:#999999; color:#FFFFFF; padding-top:2px;">&nbsp; Attach Files</div>
<div style=" float:left; width:10px; height:25px;"></div>
<div style=" float:left; width:350px; height:150px;"><input style="width:400px;" name="attach" id="attach" type="file" /></div>
<div style="height:10px;" class="cl"></div>


</div>



</div> 

</div>
</div>

<div class="cl"></div>
<div class="style2" style="float:left"><a class="gl" href="#" onclick="show()" >Attach Files</a></div>
 	<div align="right" style="padding-right:70px;"> <img src="<?php echo $base;?>images/but_discard.png" alt="discard" width="80" height="22" />&nbsp;<img src="<?php echo $base;?>images/but_send.png" alt="sent" width="80" height="22" /></div>
  
</div>
<!--/////////////////////////////////////////////////////////-->

<div style=" float:left; width:10px; height:485px;"> </div>
<div style=" float:left; width:170px; height:485px; border:1px solid #999999; padding-top:5px;" align="center">

<div align="left" style="width:155px; height:25px; background-color:#999999; padding-left:5px; padding-top:1px; color:#FFFFFF;"><img src="images/anouncement.png" alt="anouncement" width="22" height="23" align="absmiddle" /> Anouncements</div>
<div align="left" style="font-size:10px;">
  <div align="left" style="padding:5px;"><br />
  <strong>Heading</strong><br />
content - content - content - content - content - content - <br />
<span class="style1">	<a class="gl" href="#">Read More &gt;&gt;</a></span>
<br />
  <br />
  <strong>Heading</strong><br />
content - content - content - content - content - content - <br />
<span class="style1"> <a class="gl" href="#">Read More &gt;&gt;</a></span><br />
<br />
<strong>Heading</strong><br />
content - content - content - content - content - content - <br />
<span class="style1"> <a class="gl" href="#">Read More &gt;&gt;</a><br />
<br />
</span></div>
  </div>

<div align="left" style="width:155px; height:25px; background-color:#999999; padding-left:5px; padding-top:1px; color:#FFFFFF;">
<img src="images/gallery.png" alt="gallery" width="22" height="22" align="absmiddle" /> Gallery
</div>

<div align="left" style="padding:5px;">
	<img style="padding:3px;" src="<?php echo $base;?>images/img01.jpg" alt="img" width="70" height="59" /><img style="padding:3px;" src="<?php echo $base;?>images/img01.jpg" alt="img" width="70" height="59" />
    <img style="padding:3px;" src="<?php echo $base;?>images/img01.jpg" alt="img" width="70" height="59" /><img style="padding:3px;" src="<?php echo $base;?>images/img01.jpg" alt="img" width="70" height="59" />
    <img style="padding:3px;" src="<?php echo $base;?>images/img01.jpg" alt="img" width="70" height="59" /><img style="padding:3px;" src="<?php echo $base;?>images/img01.jpg" alt="img" width="70" height="59" />
    
    
    </div>
</div>

<div style="clear:both;"></div>
</div>
</div>
<!-- content Section Close -->
<script type="text/javascript" >

function show()
{
		document.getElementById('attach').style.display="block";	
}



</script>
