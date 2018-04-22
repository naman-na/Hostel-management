<?php
$conn =mysql_connect("localhost","root","root")or die(mysql_error());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());

   if (isset($_GET['id'])) {
        $id =$_GET['id'];


$selectall ="SELECT * FROM `room_allotment` WHERE id='$id'";
$result =mysql_query($selectall)or die(mysql_error());
$row =mysql_fetch_array($result)or die(mysql_error());

       $block =$row['block'];
       $roomno =$row['roomno'];
       $beds =$row['beds'];


 $del = mysql_query("DELETE FROM `room_allotment` WHERE id='$id'")or die(mysql_error());
$del_student =mysql_query("DELETE FROM `student` WHERE id='$'")or die(mysql_error());
$update = "UPDATE `room` SET `status`='enabled' WHERE block='$block' && roomno='$roomno' && beds='$beds'";
$result =mysql_query($update)or die(mysql_error());
header("location:room_allot_view.php");
}

?>
