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

          $student_name =$_POST['student_name'];
          $fees_type =$_POST['fees_type'];
          $month =$_POST['month'];

          $payment_date =$_POST['payment_date'];
          $cost =$_POST['cost'];
          $status =$_POST['status'];

          $cost =$_POST['cost'];
          $paidcost =$_POST['paidcost'];
          $duebalance = $cost-$paidcost;

    $query ="INSERT INTO `fees_monthly`(`id`, `student_name`, `fees_type`, `cost`, `paid_amount`, `due_balance`, `month`, `payment_date`, `status`) VALUES ('','$student_name','$fees_type','$cost','$paidcost','$duebalance','$month','$payment_date','$status')";

    $mess =mysql_query($query)or die(mysql_error());
    header("location:fees_monthly.php");


      }
      else {
        echo "fees_monthly is not add";
      }
      mysql_close($conn);

       ?>
</body>
</html>
