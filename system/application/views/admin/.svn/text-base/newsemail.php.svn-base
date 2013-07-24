<?php

foreach($news AS $i)
{
	$topic=ucwords($i->topic);
	$detail=ucwords($i->detail);
	
}

$msg = "<html>";
$msg .= "<head>";
$msg .= "<title>Primemove</title>";
$msg .= "</head>";
$msg .= "<body>";
$msg .= "<table border=0 cellpadding=0 cellspacing=0 width=700 align=center>";
$msg .= "<tr>";
$msg .= "<td width=49><img src='" . $base . "images/news/paperslice_01.jpg'></td>";
$msg .= "<td width=543 background=" . $base . "images/news/paperslice_02.jpg><img src=" . $base . "images/news/paperslice_02.jpg></td>";
$msg .= "<td width=108><img src=" . $base . "images/news/paperslice_03.jpg></td>";
$msg .= "</tr>";
$msg .= "</table>";
$msg .= "<table border=0 cellpadding=0 cellspacing=0 width=700 align=center>";
$msg .= "<tr>";
$msg .= "<td width=49 background=" . $base . "images/news/paperslice_04.jpg><img src=" . $base . "images/news/paperslice_04.jpg></td>";
$msg .= "<td width=614 valign=top>";
$msg .= "<table border=0 cellpadding=0 cellspacing=0 height=22 width=614 align=center bgcolor=#FFFFFF>";
//$msg .= "<tr><td  width=226 height=10 bgcolor=#003300><img src=" . $base . "images/news/px.gif width=1 height=10></td>";
//$msg .= "<td  height=10 bgcolor=#000000><img src=" . $base . "images/news/px.gif width=1 height=10></td></tr>";
//$msg .= "<tr>";
$msg .= "<td width='50' valign=top><img src='" . $base . "images/news/bg3.jpg' width='614'></td>";
$msg .= "<td></td>";
$msg .= "</tr>";
$msg .= "</table>";
$msg .= "<font face=arial size=2 color=#000000>";
$msg .= "<p align=justify><h4>GoGreen News : </h4><h5>" . $topic . "</h5></p>";
$msg .= "<p align=justify>";
$msg .= $detail." <br />";
$msg .= "<br />";
$msg .= "<a href='" . $base . "index.php/news/getnews'>More News </a>. <br />";
$msg .= "<br />";
$msg .= "<br />";
$msg .= "<br />";
$msg .= "</font><table width=100% border=0><tr><td valign=top><font face=arial size=2 color=#000000>Thanking You, <br/>";
$msg .= "<br/>";
$msg .= "<i>(Primemove Admin)</i></p></font></td><td width=50% align=right></td></tr></table>";
$msg .= "</td>";
$msg .= "<td width=37 background=" . $base . "images/news/paperslice_06.jpg><img src=" . $base . "images/news/paperslice_06.jpg></td>";
$msg .= "</tr></table>";
$msg .= "<table border=0 cellpadding=0 cellspacing=0 width=700 align=center>";
$msg .= "<tr>";
$msg .= "<td width=49><img src=" . $base . "images/news/paperslice_07.jpg></td>";
$msg .= "<td width=614 background=" . $base . "images/news/paperslice_08.jpg><img src=" . $base . "images/news/paperslice_08.jpg></td>";
$msg .= "<td width=37><img src=" . $base . "images/news/paperslice_09.gif></td>";
$msg .= "</tr>";
$msg .= "</table>";
$msg .= "</body>";
$msg .= "</html>";
print( $msg);
?>
