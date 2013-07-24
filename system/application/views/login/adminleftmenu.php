</head><body>
               <!--begin:middle-->
               <div id="middle"><table width="100%">
	<tr>
		<td valign="top"> 
                  <!--begin:list-->
                   <div id="list">
                     <!--begin:links-->
          <div class="arrowlistmenu">

<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/message">Message</a></h3>
<ul class="categoryitems">
<li><a href="<?php echo $base;?>index.php/admin/messagecompose">Compose Mail</a></li>
<li><a href="<?php echo $base;?>index.php/admin/message">Inbox</a></li>
<li><a href="<?php echo $base;?>index.php/admin/sentmessage">Sent Mail</a></li>
</ul>
<?php


 if($this->session->userdata('status')=="admin")
{ ?>
<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/member">Member Details</a></h3>

<ul class="categoryitems">
<li><a href="<?php echo $base;?>index.php/admin/memberadd">Add New Member</a></li>

</ul>


<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/projects">Projects</a></h3>
<?php } 
else
{
?>
<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/viewprojects">Projects</a></h3>
<?php }?>
<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/news">News Updates</a></h3>
<?php
 if($this->session->userdata('status')=="admin")
{ ?>
<ul class="categoryitems">
<li><a href="<?php echo $base;?>index.php/admin/addnews">Add News</a></li>
<?php } ?>

</ul>

<ul class="categoryitems">


</ul>

<?php
 if($this->session->userdata('status')=="admin")
{ ?>
<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/activitydetails">Activity Details</a></h3>
<?php } 
else
{
?>
<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/viewactivity">Activity Details</a></h3>
<?php } ?>



<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/plantation">Plantation History</a></h3>
<?php
 if($this->session->userdata('status')=="admin")
{ ?>
<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/gallery">Photo Gallery</a></h3>
<?php } else { ?>
	<h3 class="menuheader expandable"><a href="<?php echo $base;?>index.php/admin/membergallery">Photo Gallery</a></h3>
<?php 	
}?>

<h3 class="menuheader" style="cursor: default"><a href="<?php echo $base;?>index.php/admin/logout">Logout</a></h3>
<div>
</div>

</div>

                     <!--end:links-->
                  </div>
                  <!--end:list-->
</td>
	<td valign="top"> 
