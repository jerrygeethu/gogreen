<?php
function printarray($arr)
{
	print "<pre>";
	print_r($arr);
	print "</pre>";
}
function truncate($string, $start = 0,$length = 250 ,$append="...",$roundof=5){ 
if (strlen($string) < $length){
				return $string;
	}else{ 
				$around=$length-$roundof;
				$whitespaceposition = strpos($string," ",$around);
				$truncated = substr($string, 0, $whitespaceposition);
				$truncated.=$append;
				return $truncated;
		}
		return TRUE;
		}



function dmytoymd($dmydate, $needle="/")
{
		$darr = array();
		$darr = split($needle, $dmydate);
		if (count($darr) == 3)
			return date("Y-m-d", mktime(0,0,0,$darr[1],$darr[0],$darr[2]));
		else
			return "2009-01-01";
	}

function ymdtodmy($dmydate, $needle="-")
	{
		
		$darr = array();
		
		$darr = split($needle, $dmydate);
		if (count($darr) == 3)
			return date("d/m/Y", mktime(0,0,0,$darr[1],$darr[2],$darr[0]));
			
		else
			return "01/01/2009";
	}
?>
