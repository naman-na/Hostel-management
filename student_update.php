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


    //$update =$_GET['id'];
  // echo $update;
  //  die();
     $conn=mysql_connect("localhost","root","root")or die(mysql_error());
     $db=mysql_select_db('hostel2',$conn)or die(mysql_error());

    if (isset($_POST['upload'])) {
// for update
    $name1 =$_POST['nameupdate'];



    $security=$_POST['security'];
    $course=$_POST['course'];
    $name=$_POST['name'];
    $birthdate=$_POST['birthdate'];
    $join=$_POST['join'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $contact = $_POST['contact'];
    $pnumber=$_POST['pnumber'];
    $blood=$_POST['blood'];
    $status=$_POST['status'];
 echo $up1 = "UPDATE `student` SET `security`='$security',`course`='$course',`name`='$name',`dob`='$birthdate',`join`='$join',`fname`='$fname',`mname`='$mname',`gender`='$gender',`address`='$address',`contact`='$contact',`pnumber`='$pnumber',`blood`='$blood',`status`='$status' WHERE `id`='$name1'";
//echo $up;die();
$result =mysql_query($up1)or die(mysql_error());
header("location:student_view.php");
 }
 else{
echo "student not update";
header("location:student_edit.php");

    }

   mysql_close($conn);

?>
</body>

</html>
