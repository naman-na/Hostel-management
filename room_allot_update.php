<?php
$conn =mysql_connect("localhost","root","root")or die(mysql_errno());
$db =mysql_select_db('hostel2', $conn)or die(mysql_errno());

if (isset($_POST['upload'])) {

    $allotup =$_POST['allotup'];
    $block =$_POST['block'];
    $roomno =$_POST['room'];
    $beds =$_POST['beds'];
    $name =$_POST['name'];
    $status =$_POST['status'];

    $up ="UPDATE `room_allotment` SET `block`='$block',`name`='$name',`roomno`='$roomno',`beds`='$beds',`status`='$status' WHERE id='$allotup'";
    $result=mysql_query($up)or die(mysql_error());
    header("location:room_allot_view.php");

}



?>
