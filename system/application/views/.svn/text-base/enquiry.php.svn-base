<!-- Header Start -->
</head>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.js"></script>

<script type="text/javascript" src="<?php echo $base;?>jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.cycle.all.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
$('#link,#tb').cycle(
{
fx: 'scrollDown',
timeout:8000 // choose your transition type, ex: fade, scrollUp, shuffle, etc...
});
});
</script>

<!-- Header End -->
<center>
<body>
    <table width="1003" border="0" cellspacing="0" cellpadding="0">
	<!-- Top menu start here -->
	<?php echo get_menu($base); ?>
	<!-- Top menu End here -->
      <tr>
        <td height="199" colspan="2" class="flash1">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="border_cell">
        <table width="99%" border="0" cellspacing="0" cellpadding="0">
         
      <table width="99%" border="0" cellspacing="0" cellpadding="0">
                   <tr>
            <td width="83%" align="left" class="head_txt"><p><strong> ‘Go green- invest in farming, get good profit ’ </strong></p></td>
            
          </tr>
          <tr>
            <td align="left" valign="top" class="main_matter"><div align="left" style="width:95%">
                <p class="main_matter">Go green is an ideal way of  investment with a great philosophy. The project aims to develop the fertile  lands of Theni with high-yielding crops. Each unit of 10 acres of plot will be  developed with a way to provide the owner with a steady income and profit.  Besides, there is an option for making  revenue through farm tourism also.  </p>
              
                  <p class="enquiry_txt"> <b> Important  location: </b> <span class=" enquiry_txt1"> The plot is easily accessible from  major Tourist centers like Kodaikkanal, Madurai, Thekkady and Munnar </span> </p>
                 
              <p class="enquiry_txt"> <b>  Profitable farming: </b> <span class=" enquiry_txt1"> Each unit (one unit is 10 acres of land) has bio fencing with Choukka, 500 numbers of Teak plants and high yielding varieties of Mango, Sappota, Coconut and Gooseberry. </span> </p>
             
            <p class="enquiry_txt"> <b>  Credibility: </b><span class=" enquiry_txt1">  National Horticultural Board and Tamil Nadu Agricultural University guide the project.</span> </p>
             
           <p class="enquiry_txt"> <b> Good facilities: </b>
            <span class=" enquiry_txt1">  Each unit has independent road access and facilities like electrical connection, and telephone connection .</span> </p>
         
           <p class="enquiry_txt"> <b> Sufficient water: </b>    <span class=" enquiry_txt1"> The land gets two times rain fall per year. Besides, good irrigational facility is available. </span> </p>
         
       <p class="enquiry_txt">  <b>Recreational facilities: </b>
        <span class=" enquiry_txt1"> swimming pool, kids’ playground and amusement park. </span></p>

           <p class="enquiry_txt"> <b>  Big scope for Farm tourism: </b> <span class=" enquiry_txt1">Our full-fledged travel portal elatrip.com will help you to reach the clients </span>  </p> 
         
       <p class="enquiry_txt">  
       <b>Flexible payment option: </b> <span class=" enquiry_txt1"> You can own the profitable farmland through flexible installments. </span> </p>


                
                
            </div>
             <br/> <br/> <br/><br/>
			 
           <strong>Download Brochure</strong>&nbsp;&nbsp;
		   <img src="<?php echo $base; ?>images/icon.jpg" border="0" align="absmiddle" alt="Download Brochure" width="19" height="28" />
		   
		   <br />&nbsp;<a href="<?php echo $base; ?>download/Gogreen.pdf" target="_blank">1. Go Green</a>
		   <br />&nbsp;<a href="<?php echo $base; ?>download/thenifarms.pdf" target="_blank">2. Theni Farms</a>
		   
		 
			
			
			
            <td width="20%" align="left" valign="top"> 
			
			<table width="90%" >
              <tr>
                <td align="left" valign="middle" class="head_txt"> Enquiry form <br/></td>
              </tr>
              
               
			
		
		</div>
              
             
              <tr>
                <td align="center" valign="right"><br>
				 <div style="margin-left:70px;font-family:arial;font-size:13px;color:#82cb04;font-weight:bold;">
            <?php 
			if(!empty($status))
			{
			if($status=="true")
			{ 
			echo "Your enquiry is send.We will contact you soon";
		    }
		   else
		     {
			  echo "Sending failed";
		      }
			  } 
			   
			  ?>
              </div>  
               <form action="<?php echo $base;?>index.php/home/mail" method="post">
                <table align="left" width="50%" height="90%"  style="border:#59b500 solid 1px;">
            <div align="left" style=" width:50%; "> 
              <tr>
               <td align="left" valign="top" class="main_matter" width="30%" >Your&nbsp;name:</td>	
               <td align="left" valign="top" style="padding-left:2px;">	
				 <label>
				 <input type="text" name="name" id="name" size="24"  value="<?php echo set_value('name'); ?>" />
				<?php echo form_error('name', '<div class="error">', '</div>'); ?>
				 </label> </td></tr>
				 
				 <tr>
               <td align="left" valign="top" class="main_matter" width="30%" >Your&nbsp;Phone&nbsp;No:</td>	
               <td align="left" valign="top" style="padding-left:2px;">	
				 <label>
				 <input type="text" name="phone" id="phone" value="<?php echo set_value('phone'); ?>" size="24" />
				<?php echo form_error('phone', '<div class="error">', '</div>'); ?>
				 </label> </td></tr>
                
                 <tr>
                 	<td align="left"  class="main_matter" width="30%" > Your&nbsp;E-mail:</td>
                    <td align="left" valign="top" style="padding-left:2px;">
				 <label>
				 <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" size="24"  />
				<?php echo form_error('email', '<div class="error">', '</div>'); ?>
				 </label></td></tr>
                    
                    <tr>
                 	<td align="left"  class="main_matter" width="30%" >Your&nbsp;Message:</td>
                    <td align="left" valign="top" style="padding-left:2px;">
				 <label>
                  <textarea name="message"  id="message"  rows="6" cols="19" ><?php echo set_value('message'); ?></textarea>
                 <?php echo form_error('message', '<div class="error">', '</div>'); ?>
				 </label></td></tr> 
                 
                 <tr>
                  <td height="45" align="left" valign="middle">&nbsp;</td>
                  <td align="left" valign="middle">
                        <input type="submit" name="button" id="button" value="Submit" />
                   </td>
              </tr></div>
                    
              </table>
             
			   </form>
               
            
            </table>
            
            <br/><br/>
<div class="head_txt" style="width:10%"><a href="<?php echo $base;?>index.php/home/testimonials" >Testimonials</a></div>   


	<div id="link" style="width:98%; height:155px; margin-top:2px;">
			  	<div style="width:98%px; height:150px; float:left;">
				<table>
					<tr>
						<td><a href="<?php echo $base;?>index.php/home/testimonials"><img  src="<?php echo $base;?>images/anju_photo.jpg" border="0"></a> </td>
					<td class="main_matter" width="95%">   ‘’ This project is an ideal example for consistent and professional expertise in farming. This idea is great! It is profitable and honorable at the same                     time’’    - <br/> <b>Anju Pradeep</b></td>
					
				  </tr>
				</table> </div>    
                
                
               <div style="width:96%px; height:127px; float:left;">
				<table>
					<tr>
                    <td><a href="<?php echo $base;?>index.php/home/testimonials"> <img src="<?php echo $base;?>images/pradeep_kunduvalappil_photo.jpg"   border="0"></a></td>
					<td class="main_matter" width="95%">   ‘’It’s a surefire way of secure investment, and it is a good example of farming in the right perspective too!’’    -         <b> Pradeep.K</b>
					<br/> Contact no :+96597205041
					</td>
					
				  </tr>
				</table> </div>    
                
                
                              
                
              <div style="width:96%px; height:127px; float:left;">
				<table>
					<tr>
                    <td><a href="<?php echo $base;?>index.php/home/testimonials"> <img src="<?php echo $base;?>images/Shaji_P_B_photo.jpg"  border="0"></a></td>
					<td class="main_matter" width="95%">   ‘’An ideal way for reaping profits through the green dream’’    - <b>PB Shaji</b> <br/> Contact no :+97466117411</td>
					
				  </tr>
				</table> </div>
                
                
                
                <div style="width:96%px; height:127px; float:left;">
				<table>
					<tr>
                    <td><a href="<?php echo $base;?>index.php/home/testimonials"> <img src="<?php echo $base;?>images/Simi_shaji_photo.jpg" border="0"></a></td>
					<td class="main_matter" width="95%">   
                          ‘’go green is a new concept in agriculture and food production’’-  <b> <br/>Simi Shaji</b></td>
					
				  </tr>
				</table> </div>   
                
                
                <div style="width:96%px; height:127px; float:left;">
				<table>
					<tr>
                    <td><a href="<?php echo $base;?>index.php/home/testimonials"> <img  src="http://192.168.1.3/prime/newgogreen/images/Prasannan_photo.jpg" border="0"></a></td>
					<td class="main_matter" width="95%">   
                          ‘’Agriculture has always been my passion. Go green has helped me to fulfill my dream’’ -  <b>Prasannan</b></td>
					
				  </tr>
				</table> </div>
                
                
            <div style="width:96%px; height:127px; float:left;">
				<table>
					<tr>
                    <td><a href="<?php echo $base;?>index.php/home/testimonials"> <img src="<?php echo $base;?>images/lissy_dipu_photo.JPG" border="0"></a></td>
					<td class="main_matter" width="95%">   
                          ‘’The world is going to face acute food shortage in future. I consider this as my duty to preserve for the future generation’’  -  <b>Lissy Dipu</b></td>
					
				  </tr>
				</table> </div>
                
                
                
                <div style="width:96%px; height:127px; float:left;">
				<table>
					<tr>
                    <td><a href="<?php echo $base;?>index.php/home/testimonials"> <img src="<?php echo $base;?>images/Shaji_varghese_photo.jpg" border="0"></a></td>
					<td class="main_matter" width="95%">   
                          ‘’Go green gives many more possibilities beyond farming. It is also an ideal business opportunity in the emerging field of farm tourism.’’   - <br/> <b>Shaji Varghese</b><br/> 
                      Contact no :+9847063040</td>
					
				  </tr>
				</table> </div>
                
                
          <div style="width:97%px; height:127px; float:left;">
				<table>
					<tr>
                    <td><a href="<?php echo $base;?>index.php/home/testimonials"> <img  src="<?php echo $base;?>images/semin_biju.jpg" border="0"></a></td>
					<td class="main_matter" width="95%">   
                         ‘’The very moment I heard the idea behind this project, I instantly liked it. I knew that it is going to work for sure. That is why I became a part of this project’’    -  
                         <b>Semin Biju</b></td>
					
				  </tr>
				</table> </div>
                
                
       <div style="width:96%px; height:130px; float:left;">
				<table>
					<tr>
                    <td><a href="<?php echo $base;?>index.php/home/testimonials"> <img   src="<?php echo $base;?>images/biju_john.jpg" border="0"></a></td>
					<td class="main_matter" width="95%">   
                         ‘’I came to know about this project while I was searching for a unique and profitable business venture. Sensing the big potential of this project, I decided to tap this great opportunity’’     -  
                         <b> Biju John</b></td>
					
				  </tr>
				</table> </div>
                
                
      <div style="width:98%px; height:135px; float:left;">
				<table>
					<tr>
                    <td><a href="<?php echo $base;?>index.php/home/testimonials"> <img  src="<?php echo $base;?>images/Anil_ayoor.jpg" border="0"></a></td>
					<td class="main_matter" width="95%">   
                         ‘’This is the most secure way of investment. It also gives me immense satisfaction’’    -  
                         <b> Anil Ayroor </b><br/> 
                          Contact no : +8129653345</td>
					
				  </tr>
				</table> </div> 
            
         
<!-- Footer Start -->

	
<!-- Footer End -->
