<?php
$conn =mysql_connect("localhost","root","root")or die(mysql_error());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());
$delete =$_GET['id'];
$del ="DELETE FROM `room` WHERE id='$delete'";
$result =mysql_query($del)or die(mysql_error());
header("location:room_view.php");


?>
