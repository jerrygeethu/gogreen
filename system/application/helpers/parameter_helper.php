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
function paging($url,$total,$per_page,$urlseg=3)
{	

/*
	$pager['first_link'] = '<<'; 
	$pager['first_tag_open'] = '<div class="pagenation-box">'; 
	$pager['first_tag_close'] = '</div>'; 
	$pager['last_link'] = '>>'; 
	$pager['last_tag_open'] = '<div class="pagenation-box">'; 
	$pager['last_tag_close'] = '</div>'; 
	$pager['next_link'] = '>'; 
	$pager['next_tag_open'] = '<div class="pagenation-box">'; 
	$pager['next_tag_close'] = '</div>'; 
	$pager['prev_link'] = '<'; 
	$pager['prev_tag_open'] = '<div class="pagenation-box">'; 
	$pager['prev_tag_close'] = '</div>'; 
	$pager['cur_tag_open'] = '<b class="pagenation-box">'; 
	$pager['cur_tag_close'] = '</b>'; 
	$pager['num_tag_open'] = '<div class="pagenation-box" >'; 
	$pager['num_tag_close'] = '</div>';
*/
	$pager['base_url'] = ''.$url.'';
	$pager['total_rows'] = ''.$total.'';
	$pager['per_page'] = ''.$per_page;
	$pager['uri_segment'] = ''.$urlseg.'';
	return $pager;
}
function get_menu($base=""){
	
	//<!-- Top menu start here -->
	  return "<tr>
        <td height=\"27\" colspan=\"2\" align=\"left\" class=\"head\">&nbsp;</td>
      </tr>
      <tr>
       <td width=\"82\" height=\"29\" align=\"center\" valign=\"middle\" background=\"" . $base . "images/bg_img.jpg\" style=\"background-repeat:no-repeat;\"><a href=\"http://primemoveindia.com\">Primemove </a></td>
        <td width=\"921\">
        
        <!--[if lt IE 7]>
		<link rel=\"stylesheet\" type=\"text/css\" href=\"/menu/includes/ie6.css\" media=\"screen\"/>
	<![endif]-->
          <ul id=\"MenuBar1\" class=\"MenuBarHorizontal\">
            <li>
              <div align=\"center\" class=\"style1\"><a href=\"" . $base . "index.php/home/show/home.html\">Home</a> </div>
            </li>
            <li>
              <div align=\"center\"><a href=\"" . $base . "index.php/home/mail\" class=\"MenuBarItemSubmenu\">Theni Farms</a>
               
              </div>
            </li>
            <li>
              <div align=\"center\"><a href=\"" . $base . "index.php/home/view/about.html\">About us</a> </div>
            </li>
            <li>
              <div align=\"center\"><a href=\"" . $base . "index.php/home/view/contact.html\">Contact </a></div>
            </li>
            <li>
              <div align=\"center\"><a href=\"" . $base . "index.php/home/view/gallery.php\">Gallery</a></div>
            </li>
			 <li>
              <div align=\"center\"><a href=\"".$base."index.php/home/mail\">Enquiry</a></div>
            </li>
            <li>
              <div align=\"center\"><a href=\"" . $base . "index.php/admin/login\">Sign In</a></div>
            </li>											
          </ul>
        <div align=\"left\"></div> 
         </td>
      </tr> ";
	  
	  	//<!-- Top menu End here -->
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

?>
