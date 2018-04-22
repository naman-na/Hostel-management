<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
       <?php

      $conn = mysql_connect("localhost", "root", "root")or die(mysql_errno());
      $db =mysql_select_db('hostel2', $conn)or die(mysql_errno());
      if (isset($_POST['upload'])) {

          $blockupdate =$_POST['blockupdate'];
          $block =$_POST['block'];
          $gender =$_POST['gender'];
          $description =$_POST['description'];
          $status =$_POST['status'];


        $update="UPDATE `block` SET `block`='$block',`gender`='$gender',`description`='$description',`status`='$status' WHERE id='$blockupdate'";

       $fees =mysql_query($update)or die(mysql_error());
       header("location:block_view.php");


      }
      else {
        echo "Record update  is not successfull";
      }
      mysql_close($conn);

       ?>
</body>
</html>
