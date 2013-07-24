<?php if($this->session->userdata('memberid')!="")
		{  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::index::</title>
<!--<link href="<?php echo $base;?>css/login/style1.css" rel="stylesheet" type="text/css"> -->

	<link href="<?php echo $base;?>css/style.css" rel="stylesheet" type="text/css" /> 
		
	<link rel="stylesheet" type="text/css" href="<?php echo $base;?>css/jquery-ui-1.8.4.custom.css">
    <?php if(!empty($extra))
	{
		print_r($extra);
	}?>

    <script type="text/javascript" src="<?php echo $base;?>js/dropdown/jquery-ui-1.8.4.custom.min.js"></script> 
    <script type="text/javascript" src="<?php echo $base;?>js/dropdown/ui.dropdownchecklist-1.1-min.js"></script>  

	
	<style type="text/css">
<!--
@import url("<?php echo $base;?>css/login/login.css");
-->
</style>
	
</head>

<body>

   <!--begin:outer-->
   <div id="outer">
      <!--begin:main-->
      <div id="main">
         <!--begin:banner-->
         <div id="banner">
            <!--begin:logo-->
            <div id="logo">
               <h1>
			   <?php if($this->session->userdata('memberid')!="")
			   { ?>
			   <a href="<?php echo $base;?>index.php/admin/news">go green</a>
			   <?php } else { ?>
			    <a href="<?php echo $base;?>index.php/admin/login">go green</a>
			   <?php } ?>
			   
			   </h1>
            </div>
            <!--end:logo-->
            <!--begin:navigation-->
            <div id="navigation">
               <a href="<?php echo $base;?>index.php/admin/news" class="home">Home</a>
               <a href="<?php echo $base;?>index.php/admin/message" class="message">Message</a>
			   <?php if( $this->session->userdata('status')=="admin")
			   { ?>
               <a href="<?php echo $base;?>index.php/admin/projects" class="management">Management</a>
			   <?php } else { ?>
			    <a href="<?php echo $base;?>index.php/admin/viewprojects" class="management">Management</a>

			   <?php } ?>
               <?php
			  
			    if( $this->session->userdata('status')=="admin")
			   { ?>
               <a href="<?php echo $base;?>index.php/admin/viewgallery" class="gallery">Gallery</a>
			   <?php } else
			   { ?>
				    <a href="<?php echo $base;?>index.php/admin/membergallery" class="gallery">Gallery</a>
				   
				   <?php } ?>
			   
			   
            </div>
            <!--end:navigation-->
            <div class="clear"></div>
            <!--begin:profile_outer-->
            <div id="profile_outer">
               <!--begin:profile-->
               <div id="profile">
                  <div id="profile_img">
				  <?php 
				         $memname=$this->session->userdata('fullname');
				  
				   if($this->session->userdata('memphoto')!="")
				   {
					    $memph=$this->session->userdata('memphoto');
						$ph=explode(".",$memph);
							 if($ph!="" && count($ph)>0) 
							 {
								 $photo=$ph[0]."_thumb.".$ph[1];
				   ?>
				  <img src="<?php echo $base;?>images/memberphoto/<?php echo $memname;?>/<?php echo $photo;?>"  >
				  <?php } }
				  
				  else
				  { ?>
				  <img src="<?php echo $base;?>images/login/profile_img.gif"  >

					  
				 <?php  }
				  
				   ?>
                  </div>
                  <div class="profile_name">
                      <?php echo $this->session->userdata('fullname');?></div>
                  <div class="edit">
                     <a href="<?php echo $base;?>index.php/admin/pwd">Change Password>></a>
                  </div>
               </div>
               <!--end:profile-->
               <!--begin:details-->
               <div id="details">
                 <div class="left_details">
                    <div class="dtls">Workers details
                    </div>
                    <div class="workers_dtls_img">
                    </div>
                    <div id="wrks">
                       <div class="wrks_no"><?php echo $this->session->userdata('total');?></div>
                       <div class="wrks_today"><a href="<?php echo $base;?>index.php/admin/workerslist">workers today</a></div>
                    </div>
                 </div>
                 <div class="dtls_img"></div>
                 
                 <div class="middle_details">
                    <div class="dtls"></div>
                 </div>
                 <div class="dtls_img"></div>
                 <div class="middledetails_right"></div>
                 <div class="dtls_img"></div>
                 </div>
               <!--end:details-->
               </div>
               <!--end:profile_outer-->
               </div>
               <!--end:banner-->
               <div class="clear"></div>
<?php } ?>
