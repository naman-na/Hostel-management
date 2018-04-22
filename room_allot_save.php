<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Entry</title>
</head>


<body>

<?php
include 'header.php';
include 'left_side_bar.php';

//print_r($_POST);
//die();

     $conn=mysql_connect("localhost","root","")or die(mysql_error());
     $db=mysql_select_db('hostel2',$conn)or die(mysql_error());

    if (isset($_POST['upload'])) {

    $block=trim($_POST['block']);
    $name=trim($_POST['name']);
    $roomno=trim($_POST['room']);
    $beds=trim($_POST['beds']);
    $status=trim($_POST['status']);


    $query="INSERT INTO `room_allotment`(`id`, `block`, `name`, `roomno`, `beds`, `status`) VALUES ('','$block','$name','$roomno','$beds','$status')";

    $sel =mysql_query($query)or die(mysql_error());

    $up=mysql_query("update room set status=' $status' where beds='$beds' && block='$block' && roomno='$roomno' && block='$block'")or die(mysql_error());

    $up=mysql_query("update student set status=' $status' where name='$name'")or die(mysql_error());

    header('location:room_allot.php');

 }
 else{
echo "room not allotment";

    }

   mysql_close($conn);

?>
</body>

</html>
