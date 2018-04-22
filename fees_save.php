<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
       <?php
      // include 'header.php';
     //  include 'left_side_bar.php';
      $conn = mysql_connect("localhost", "root", "")or die(mysql_errno());
      $db =mysql_select_db('hostel2', $conn)or die(mysql_errno());
      if (isset($_POST['upload'])) {

          $fees =$_POST['fees'];
          $cost =$_POST['cost'];
          $status =$_POST['status'];

          $query ="INSERT INTO `fees_structure`(`id`, `fees_type`, `cost`, `status`) VALUES ('','$fees','$cost','$status')";
    $mess =mysql_query($query)or die(mysql_error());
    header("location:fees.php");


      }
      else {
        echo "fees_structure is not add";
      }
      mysql_close($conn);

       ?>
</body>
</html>
