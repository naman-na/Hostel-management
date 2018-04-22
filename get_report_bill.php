<?php
require_once("excelwriter.class.php");
    $excel=new ExcelWriter("report.xls");
    if($excel==false)
echo $excel->error;

// this will create heading of each column in excel file

$myArr=array("id","student_name","fees_type","cost","paid_amount","due_balance","month","payment_date","status");
$excel->writeLine($myArr);
// now fetch data from database table, there is a new line create each time loop runs
$qry=mysql_query("select * from fees_monthly");
if($qry!=false)
{
$i=1;
while($res=mysql_fetch_array($qry))
{
     $myArr=array($i,$res['student_name'],$res['fees_type'],$res['cost'],$res['paid_amount'],$res['due_balance'],$res['month'],$res['payment_date'],$res['status']);

     $excel->writeLine($myArr);

     $i++;

     }

    }
?>
<html>
<head>
    <title>Bill Show</title>
</head>

<body>


<div  style="overflow:scroll;height:500px;width:1000px;" class="pull-left">
      <br>
      $file="report"
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

            </tr>
        </thead>

                <?php

                $fees_type = ($_POST['get_option']);



                $conn =mysql_connect("localhost","root","root")or die(mysql_errno());
                $db =mysql_select_db('hostel2', $conn)or die(mysql_error());
                $sql ="select * from fees_monthly where fees_type='$fees_type'";

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
            </tr>
            <?php } ?>
    </table>
    <a href="javascript:void(0);" onClick="download();">Download Excel Report</a>
    <script language="javascript">
    function download()
    {

     window.location='report.xls';

    }

    </script>

</div>
</body>
</html>
