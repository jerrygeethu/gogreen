<form name = "plot_view" action = "#" method = "post">
<?php 
	foreach($plots as $plot_view1)
	{
?>
<div style="">
	<img src = "<?php echo $base?>uploads/project/<?php echo $plot_view1['subphoto']?>"  style = "width:110px;height:100px;float:left; margin:5px;border:1px solid black;"/> 
</div>
<?php 
}
?>
</form>
