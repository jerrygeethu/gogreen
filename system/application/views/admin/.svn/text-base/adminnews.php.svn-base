<?php
//session_start();
//$loginresult=$_SESSION['loginresult'];
//include("prime_functionlist.inc");
//error_reporting(E_ALL);

foreach($newstype as $i) {
		$type[$i] = $i;
}
$editcategory = "general";
foreach($editnews as $edit) {
		$edittopic = empty($edit->topic)?'':$edit->topic;
		$editdetail = empty($edit->detail)?'':$edit->detail;
		$editcategory = empty($edit->category)?'':$edit->category;
}
?>
<html>
<head>
<title>Prime Move : Core Team page</title>
<LINK REL="stylesheet" HREF="styles/AkeyStyle.css" TYPE="text/css">
<link href="CSS/primemove.css" rel="stylesheet" type="text/css">

<script language="javascript" >
	function changenewstype(newstype)
	{
		d
	}

	function confirmDelete(pageurl)
	{
        if (confirm("Are you sure you want to delete?"))
        {
                document.location.href= pageurl;
        }
	}	
	
</script>

</head>
 
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div id="main_div" >

<form action="<?php echo $base;?>index.php/news/update" method="POST" name="frmNewsPost" onsubmit='return validateForm();'>
<br>
<table border="0" cellpadding="0" cellspacing="0"  width="60%" align="center">
                <tr>
                <td width="30%" valign="top"><font class="icon"><span id="span_data">News Type:</span></font><font class="body02"> *</font>
                </td><td width="3%" align="center" valign="top"><font class="iconB" ><b>:</b></font></td><td valign="top">
                <?php 
					$js = " id=\"cartype\" onChange =\"changenewstype(this.value);\" ";
					echo form_dropdown('newstype', $type, $editcategory, $js);?>
                </td>
                </tr>
                </table>                
<table border="0" cellpadding="0" cellspacing="0"  width="60%" align="center">
                <tr>
                <td width="30%" valign="top"><font class="icon"><span id="span_topic">Enter a News Topic:</span></font><font class="body02"> *</font>
                </td><td width="3%" align="center" valign="top"><font class="iconB" ><b>:</b></font></td><td valign="top">
                <textarea cols="60" rows="3" name="txtnewstopics" tabindex="1"><?php if(isset($edittopic) and $edittopic!='') echo $edittopic;?></textarea>


      </td></tr></table>
<table border="0" cellpadding="0" cellspacing="0"  width="60%" align="center">
                <tr>
                <td width="30%" valign="top"><font class="icon"><span id="span_data"></span></font><font class="body02">Detailed news : *</font>
                </td><td width="3%" align="center" valign="top"><font class="iconB" ><b>:</b></font></td><td valign="top">
                <textarea cols="60" rows="3" name="txtnewsdetails" tabindex="1"><?php if(isset($editdetail) and $editdetail!='') echo $editdetail;?></textarea>
                </td>
                </tr>
                </table>

<font class="icon"><?php //echo $errormessage;?></font>
<p align=center>
<input type="hidden" name="txtnewsid" value="">
<input type="hidden" name="isdecline" value='0'>

<input type="image" src="<?php echo $base;?>./images/but_submit.gif" name="Submitform" value="Submit" onClick="CancelSet()";>
<input type="image" src="<?php echo $base;?>./images/but_cancel.gif" name="Cancelform" value="Cancel" onClick="CancelForm()";>

</p>
</form>

<div style="width:60%;margin-left:20%">
<?php
		foreach($news as $i) {
		echo $i->topic;
		
		//newsid  	topic 	detail 	posted 	category
		
		 echo" <li><font class=icon><b>".$i->topic."</b></font> <font class=icon>(<b>Published Date :</b>".$i->posted.")</font>
                            <br>News Type : ".$i->category."
                            <br><br>".$i->detail."
                          
                            <p>
                            <a href=javascript:confirmDelete('".$i->newsid."') class=brown>Delete</a>&nbsp;|&nbsp;

                            <a href=\"".$base ."index.php/news/update/" .$i->newsid."\" class=\"brown\">Edit</a>&nbsp;|&nbsp;
							
							<a href=\"".$base ."index.php/news/send/" .$i->newsid."\" class=\"brown\">" ;
					if($i->status==0) echo "Send";
					else
						echo "Resend";
						echo "</a>


                            </p>

                            <hr></li>";
			}
							
?>
</div>						
							
</div>
</body>
 
</html>
