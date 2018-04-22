<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Entry</title>
</head>


<body>

<?php
//include 'header.php';
//include 'left_side_bar.php';

//print_r($_POST);
//die();

     $conn=mysql_connect("localhost","root","root")or die(mysql_error());
     $db=mysql_select_db('hostel2',$conn)or die(mysql_error());

    if (isset($_POST['upload'])) {

    $room = $_POST['rupdate'];

    $block=$_POST['block'];
    $roomno=$_POST['roomno'];
    $beds=$_POST['beds'];
    $description=$_POST['description'];
    $status=$_POST['status'];


    $update = "UPDATE `room` SET `roomno`='$roomno',`block`='$block',`beds`='$beds',`description`='$description',`status`='$status' WHERE id='$room'";
    $sel =mysql_query($update)or die(mysql_error());
    header('location:room_view.php');

 }
 else{
echo "room  not update";

    }

   mysql_close($conn);

?>
</body>

</html>
