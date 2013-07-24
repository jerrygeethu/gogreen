<?php
if(!empty($projects))
{
?>
<form name = "projects" id = "projects" action = "#">
<div style="width:530px; float:left;">

<div class="heading"> <h1> Projects </h1>  </div>
<div class="project_contantbox">
	<div class="TAB_align">
	<ul class="tabs"> 
    <?php
		foreach($projects as $projects1)
		{	
	?>
			<li><a href="<?php echo $base;?>admin.php/user/home/projects/<?php echo $projects1['projectid'];?>"> <?php echo $projects1['project_name'];?></a></li>
    <?php
		}
    ?>
 </ul>    
</div>
<div class="tab_container" align="center">
<div id="tab1" class="tab_content">

<br/>
<br/>
    <?php
		foreach($projects_image as $projects1)
		{	
	?>
<a href = "<?php echo $base?>admin.php/user/home/plot_view/<?php echo $id; ?>"><img src="<?php echo $base;?>uploads/project/<?php echo $projects1['mainphoto']?>" border="0" height="100" width="200"/></a>
<?php }?>
<br/>
<br/>
<br/>
</div>
</div>


</div>
</div>
</form>
<?php
}
else
{
?>
<div style="padding-top:45px;">
<?php 
echo "No Projects Available";
}
?>
</div>
