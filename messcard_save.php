<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
       <?php
      // include 'header.php';
     //  include 'left_side_bar.php';
      $conn = mysql_connect("localhost", "root", "root")or die(mysql_errno());
      $db =mysql_select_db('hostel2', $conn)or die(mysql_errno());
      if (isset($_POST['upload'])) {
          $name =$_POST['name'];
          $food =$_POST['food'];
          $messcard =$_POST['messcard'];
          $startdate =$_POST['startdate'];
          $enddate =$_POST['enddate'];
          $status =$_POST['status'];

          $query ="INSERT INTO `messcard`(`id`, `name`, `food`, `messcard`, `startdate`, `enddate`, `status`) VALUES ('','$name','$food','$messcard','$startdate','$enddate','$status')";
    $mess =mysql_query($query)or die(mysql_error());
    header("location:messcard.php");


      }
      else {
        echo "messcard is not add";
      }
      mysql_close($conn);

       ?>
</body>
</html>
