<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Go Green - Manage Member</title>

<link rel="stylesheet" href="<?php echo $base.$css;?>" type="text/css" />
<link rel="stylesheet" href="<?php echo $base?>css/user/style_new.css" type="text/css" />
  <script type="text/javascript" src="<?php echo $base;?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/ddaccordion.js" ></script>
<script type="text/javascript" src="<?php echo $base;?>js/jMenu.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.selectbox-0.5.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.validate.js"></script>
 <script type="text/javascript" src="<?php echo $base;?>js/jquery.lightbox-0.5.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo $base;?>css/jquery.lightbox-0.5.css" media="screen" />
 
<script type="text/javascript">
ddaccordion.init({
	headerclass: "expandable", //Shared CSS class name of headers group that are expandable
	contentclass: "categoryitems", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [-1], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", "openheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["prefix", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})

</script>

</head>

<body>
<?php #@echo $this->session->userdata('memphoto');?>

<form name="gogreen" method="post" >
<?php foreach($workerscount as $worker1)
{
	
?>
<?php
foreach($memdata as $mem_data)
	{
?>
<div class="outerpane">
<div class="main">
<!--===================BEGIN::HEADER::================-->
	<div class="header">
    	<div> <h1 id="logo"><a href="#">gogreen</a></h1> </div>
        
        <!--===================BEGIN::navigation::================-->
      <div align="right" class="menu">
        	<a href="<?php echo $base ;?>admin.php/user/news/news_list/"  class="navActive">HOME</a> 
		<a href="<?php echo $base ;?>admin.php/user/messegs/inbox"> MAIL </a>
        
      <a href="<?php echo $base;?>admin.php/user/activity/risk_management" > MANAGEMENT </a> 
      <a href="<?php echo $base;?>admin.php/user/gallery/gallery_photos" > GALLERY </a>      </div>
      <!--===================end::navigation::================-->
      <!--===================BEGIN::bannar::================-->
<div class="adminlog">
     	<div class="admin_img"><img src="<?php echo $base;?>uploads/member/<?php echo $mem_data['photo'];?>"  style = "width:80px;height:85px;"/></div>
     	<div class="adminfont"><?echo $mem_data['name'];?> &nbsp; </div>  <span class="mob"> <?php echo "Mob :".$mem_data['mobile'];?> <br /><?php echo "e-mail :".$mem_data['email'];?></span>
    <br/> <br />
    	 <div class="editbutton1"> <a href="<?php echo $base;?>admin.php/user/home/edit_profile/<?php echo $this->session->userdata('memberid');?>"> &nbsp; &nbsp; Edit profile </a> </div>
         <div class="editbutton" > <a href="<?php echo $base;?>admin.php/user/home/editpassword/<?php echo $this->session->userdata('memberid');?>"> &nbsp; &nbsp; Edit Password </a> </div>
     </div> 
<div align="right" class="workersdetails">
    	<div class="headermessage" align="left"> <a href = "<?php echo $base;?>admin.php/user/activity/workhistory" style="color:#FFFFFF;">Workers Details <br> <?php echo $worker1->wc;?> workers Today</a> </div>
    	<?
	}
	}
    	?>
        <div class="line" align="right">  <img src="<?php echo $base;?>images/user/line.jpg" border="0"/></div>
    <div class="headermessage" align="left"></div>
        <div class="line" align="right">   <img src="<?php echo $base;?>images/user/line.jpg" border="0"/> </div>
    <div class="headermessage" align="left"></div>
        <div class="line" align="right">   <img src="<?php echo $base;?>images/user/line.jpg" border="0"/> </div> 
     
    </div> 
    </div>
      </form>
     <div style="clear:both;"></div>	


