<?php
defined('IN_DESTOON') or exit('Access Denied');
$_page = $page <= 1 ? $total : ($page - 1);
$demo_url = str_replace(array('%7B', '%7D'), array('{', '}'), $demo_url);
$pages.='<b>共'.$items.'个项目</b>';
$pages.="<p>".$page."/".$total."</p>";
$url = $_page == 1 ? $home_url : str_replace('{destoon_page}', $_page, $demo_url);
$pages .= '<a href="'.$url.'" class="u_SheJiS_DaTing_JG_Pgg_s" id="page">&nbsp;'.$L['prev_page'].'&nbsp;</a> ';

$_page = $page >= $total ? 1 : $page + 1;
$url = $_page == 1 ? $home_url : str_replace('{destoon_page}', $_page, $demo_url);
$pages .= '<a href="'.$url.'" class="u_SheJiS_DaTing_JG_Pgg_s" id="page">&nbsp;'.$L['next_page'].'&nbsp;</a>';

?>