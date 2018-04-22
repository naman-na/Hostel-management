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
      	// for update use mess id
      	$mess1 =$_POST['mess'];

          $name =$_POST['name'];
          $food =$_POST['food'];
          $messcard =$_POST['messcard'];
          $startdate =$_POST['startdate'];
          $enddate =$_POST['enddate'];
          $status =$_POST['status'];

$query ="UPDATE `messcard` SET `name`='$name',`food`='$food',`messcard`='$messcard',`startdate`='$startdate',`enddate`='$enddate',`status`='$status' WHERE `id`='$mess1'";
    $mess =mysql_query($query)or die(mysql_error());
    header("location:messcard_edit.php?id=$mess1");


      }
      else {
        echo "messcard is not update";
      }
      mysql_close($conn);

       ?>
</body>
</html>
