<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Entry</title>
</head>


<body>

<?php
include 'header.php';
include 'left_side_bar.php';

     $conn=mysql_connect("localhost","root","")or die(mysql_error());
     $db=mysql_select_db('hostel2',$conn)or die(mysql_error());
     if (isset($_POST['upload'])) {

        $block =$_POST['block'];
        $roomno =$_POST['roomno'];
        $beds =$_POST['beds'];
        $description =$_POST['description'];
        $status =$_POST['status'];

        $query = "INSERT INTO room (id, roomno, block, beds, description,status)
VALUES ('', '$roomno', '$block', '$beds', '$description', '$status')";

    $set=mysql_query($query);
     header('location:room_add.php');

 }
 else{
echo "room not create";

    }
   mysql_close($conn);

?>
</body>

</html>
