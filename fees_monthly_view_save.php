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

          $updatefees =$_POST['updatefees'];
          $student_name =$_POST['student_name'];
          $fees_type =$_POST['fees_type'];
          $month =$_POST['month'];
          $payment_date =$_POST['payment_date'];
          $cost =$_POST['cost'];
          $status =$_POST['status'];

          $cost =$_POST['cost'];
          $paidcost =$_POST['paidcost'];
          $duebalance = $cost-$paidcost;

        $update="UPDATE `fees_monthly` SET `student_name`='$student_name',`fees_type`='$fees_type',`cost`='$cost',`paid_amount`='$paidcost',`due_balance`='$duebalance',`month`='$month',`payment_date`='$payment_date',`status`='$status' WHERE id='$updatefees'";

       $fees =mysql_query($update)or die(mysql_error());
       header("location:fees_monthly.php");


      }
      else {
        echo "Record update  is not successfull";
      }
      mysql_close($conn);

       ?>
</body>
</html>
