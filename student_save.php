<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Entry</title>
</head>


<body>

<?php
ob_start();
session_start();
include 'header.php';
include 'left_side_bar.php';

//print_r($_POST);
//die();

     $conn=mysql_connect("localhost","root","")or die(mysql_error());
     $db=mysql_select_db('hostel2',$conn)or die(mysql_error());

    if (isset($_POST['upload'])) {

    $security=$_POST['security'];
    $course=$_POST['course'];
    $name=$_POST['username'];
    $birthdate=$_POST['birthdate'];
    $join=$_POST['join'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $number=$_POST['number'];
    $pnumber=$_POST['pnumber'];
    $blood=$_POST['blood'];
    $status=$_POST['status'];

    $query="INSERT INTO `student`(`id`, `security`,  `course`, `name`, `dob`, `join`, `fname`, `mname`, `gender`, `address`, `contact`, `pnumber`, `blood`, `status`) VALUES ('','$security','$course','$name','$birthdate','$join','$fname','$mname','$gender','$address','$number','$pnumber','$blood','$status')";

// $query = mysql_query("INSERT INTO student (id, course, name, dob, join, fname, mname, gender, contact, pnumber, blood, status) VALUES ('', '$course', '$name', '$birthdate', '$join', '$fname', '$mname', '$gender', '$address', '$number', '$pnumber', '$blood', '$status')")or die(mysql_errno());


    $sel =mysql_query($query)or die(mysql_error());
    header('location:student_add.php');

 }
 else{
echo "student not create";

    }

   mysql_close($conn);

?>
</body>

</html>
