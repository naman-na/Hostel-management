<?php
$dbhost="localhost";
$port="";
$dbuser="root";
$dbpass="";
$dbname="hostel2";
$link=@mysql_connect("$dbhost:$port",$dbuser,$dbpass);
mysql_select_db($dbname,$link);
?>
