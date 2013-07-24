<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Go Green - Manage Member</title>
		<link rel="stylesheet" href="<?php echo $base.$css;?>" type="text/css" />
		<script type="text/javascript" src="<?php echo $base;?>js/ddaccordion.js" >
		</script>
		<script type="text/javascript" src="<?php echo $base;?>js/jMenu.js"></script>
		<script type="text/javascript" src="<?php echo $base;?>js/jquery-latest.js"></script>
		<script type="text/javascript" src="<?php echo $base;?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $base;?>js/jquery.selectbox-0.5.js"></script>

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
			<script type="text/javascript">


			$(document).ready(function() {


			$('#Items').selectbox();


			});
		</script>
	</head>
	<body>
		<div class="outerpane">
			<div class="main">
				<div class="header">
					<div> <h1 id="logo"><a href="#">gogreen</a></h1> </div>
					<div align="right" class="menu"></div>
					<div align="right" class="workersdetails"></div>
				</div>
				<div style="clear:both;"></div>	
				<form id="frmlogin" name="frmlogin" method="post" action="<?php echo $base ;?>admin.php/user/login">
					<div id="middle" style="min-height:526px;">
						<table width="337" border="0" style="margin:0 auto; padding-top:150px; ">
							<tr>
								<td width="66"> </td>
								<td width="8"></td>
								<td width="241"><?php echo $message;?></td>
							</tr>
							<tr>
								<td width="66">E-mail </td>
								<td width="8">:</td>
								<td width="241"><input type="text" id="email" name="email" value="" /></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td></td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input type="password" value="" id="pwd" name="pwd" /></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><?php echo validation_errors();?></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input type="submit" name="button" id="button" value="Submit" /></td>
							</tr>
						</table>
						<div style="clear:both;"></div> 
					</div>
				</form>
			</div>
			<!--===================begin::footer===============-->
			<div id="footer"> 
				<div id="footer_inner">
					<div class="footerhead"> Copy right @ gogreenearth.in </div>
				</div>
			</div>
		</div>
	</body>
</html>
