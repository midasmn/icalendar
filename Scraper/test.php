<?php
$yyyy = date('Y');
$mm = date('m');
$dd = date('d');
$dd = sprintf("%02d", $dd -1);
$get_href = "http://www.oricon.co.jp/rank/js/d/";
//http://www.oricon.co.jp/rank/ja/d/2014-08-03/ 
$get_href .= $yyyy."-".$mm."-".$dd."/";

echo $get_href;
?>