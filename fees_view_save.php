<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
       <?php

      $conn = mysql_connect("localhost", "root", "")or die(mysql_errno());
      $db =mysql_select_db('hostel2', $conn)or die(mysql_errno());
      if (isset($_POST['upload'])) {
        // for fetch fees structure for update
          $fees_structure=$_POST['fees_structure'];

          $fees =$_POST['fees'];
          $cost =$_POST['cost'];


  $update="UPDATE `fees_structure` SET `fees_type`='$fees',`cost`='$cost' WHERE id='$fees_structure'";
    $mess =mysql_query($update)or die(mysql_error());
    // $fees_structure;

    header("location:fees_view_edit.php?id=$fees_structure");


      }
      else {
        echo "fees_structure is not add";
      }
      mysql_close($conn);

       ?>
</body>
</html>
