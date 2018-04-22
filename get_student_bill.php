<!DOCTYPE html>
<html>
<head>
    <title>Bill Show</title>
</head>

<body>


<div  style="overflow:scroll;height:500px;width:1000px;" class="pull-left">
      <br>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>

                <th>ID</th>
                <th>Student Name</th>
                <th>Fees Type</th>
                <th>Cost</th>
                <th>Paid Amount</th>
                <th>Due Balance</th>
                <th>Name of Month</th>
                <th>Payment Date</th>
                <th>Status</th>
                <th>Action</th>
                <th>Update</th>
            </tr>
        </thead>

                <?php

                $name = ($_POST['get_option']);



                $conn =mysql_connect("localhost","root","")or die(mysql_errno());
                $db =mysql_select_db('hostel2', $conn)or die(mysql_error());
                $sql ="select * from fees_monthly where student_name='$name'";

                $query=mysql_query($sql)or die(mysql_error());
                while ($row=mysql_fetch_array($query)){?>

            <tr class="odd gradeX">


                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['fees_type']; ?></td>
                <td><?php echo $row['cost']; ?></td>
                <td><?php echo $row['paid_amount']; ?></td>
                <td><?php echo $row['due_balance']; ?></td>
                <td><?php echo $row['month']; ?></td>
                <td><?php echo $row['payment_date']; ?></td>
                <td><?php echo $row['status']; ?></td>

                <td align="center"><a title="Delete" href='fees_monthly_delete.php?id=<?php echo $row["id"];?>' onclick="return confirm('are you sure want to delete')"><i class="glyphicon glyphicon-trash"></a></td>
                <td align="center"><a title="Update" href='fees_monthly_view_edit.php?id=<?php echo $row["id"];?>'><i class="glyphicon glyphicon-pencil"></i></a></td>
            </tr>
            <?php } ?>





<?php

  $add=mysql_query('SELECT SUM(paid_amount) AS  value_sum from `fees_monthly`')or die(mysql_error());

  while($row1=mysql_fetch_array($add)){

     $sum = $row1['value_sum'];
 ?>
    <tfoot>
        <tr>
            <td id="total" colspan="4" style="text-align:right;">Total :</td>
            <td><?php echo $sum ?></td>
        </tr>
    </tfoot>

 <?php }?>




    </table>
</div>



</body>
</html>
