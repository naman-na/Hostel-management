<?php

$conn =mysql_connect("localhost", "root", "")or die(mysql_error());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());

$fees_type = $_POST['get_option'];
     $sql="SELECT `cost` FROM `fees_structure` WHERE fees_type='$fees_type'";
     $find=mysql_query($sql);
     $row=mysql_fetch_array($find);

       echo $row['cost'];


?>
