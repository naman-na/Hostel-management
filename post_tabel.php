<?php
include("conn.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$block=mysql_escape_String($_POST['block']);
$gender=mysql_escape_String($_POST['gender']);
$description=mysql_escape_string($_POST['description']);
$status=mysql_escape_string($_POST['status']);


$sql = "update block set `block`='$block',`gender`='$gender',`description`='$description',`status`='$status' where `id`='$id'";
mysql_query($sql);
}
?>