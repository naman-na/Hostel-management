<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fees</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>


<?php

include 'header.php';
include 'left_side_bar.php';
?>



        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Fees</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Block View
                        </div>
                        <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">

<!-- --------------for student and fees type------------- -->
                        <div class="form-group">
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
<?php  /*
    if(isset($_POST['upload'])){
        $stardate = $_POST['sdate'];

        $enddate = $_POST['ndate'];


$conn =mysql_connect("localhost","root","")or die(mysql_errno());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());

 $sql="SELECT * FROM `fees_monthly` WHERE month BETWEEN '$stardate' AND '$enddate'";



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


                <?php }
                }


                else {
                    echo "data is not available";
                }
*/
                ?>

<?php
$conn =mysql_connect("localhost","root","root")or die(mysql_errno());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());

  $add=mysql_query('SELECT SUM(paid_amount) AS value_sum from `fees_monthly`')or die(mysql_error());

  while($row1=mysql_fetch_array($add)){

    $sum = $row1['value_sum'];
?>
    <tfoot>
        <tr>
            <td colspan="4" style="text-align:right;">Total :</td>
            <td><?php echo $sum ?></td>
        </tr>
    </tfoot>

 <?php }?>
    </table>
    <!------------------------------------------------ -->

                        </div>
                <!-- <div class="form-group"> -->

                            <div id="txtHint" class="pull-left">
                            <br><br><br><br>
                        <?php /*        <b style="margin-left:-283px">Student Bill will be listed here.....</b> */ ?>
                            </div>


                    </div>
                            <!-- /<div class="dataTable_wrapper"> -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
