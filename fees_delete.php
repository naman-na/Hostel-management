<?php
$delete =$_GET['id'];
$conn =mysql_connect("localhost","root","root")or die(mysql_error());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());

$delete ="DELETE FROM `fees_structure` WHERE id='$delete'";
$result =mysql_query($delete);
header("location:fees_view.php");


?>
