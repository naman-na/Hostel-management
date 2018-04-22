<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Block</title>

    <!-- Bootstrap Core CSS -->
    <script type= "text/javascript" src = "countries.js"></script>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

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
$update = $_GET['id'];

$conn =mysql_connect("localhost","root","")or die(mysql_error());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());
$select =mysql_query("select * from fees_monthly where id='$update'")or die(mysql_error());
$row =mysql_fetch_array($select)or die(mysql_error());

?>
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fees Update Form
                        </div>
                        <div class="panel-body">
                        <!-- panel body row -->
                            <div class="row">
                                <div class="col-lg-6">
                                <!-- form for block -->
        <form role="form" action="fees_monthly_view_save.php" method="post">
            <input type="hidden" name="updatefees" value="<?php echo $row['id']; ?>">

            <div class="form-group">
                <label>Student Name</label>
            <select name="student_name" class="form-control">
                <option><?php echo $row['student_name']; ?></option>

            </select>
            </div>

            <div class="form-group">
                <label>Fees Type</label>
            <select name="fees_type" class="form-control">
                <option><?php echo $row['fees_type']; ?></option>

            </select>
            </div>
            <div class="form-group">
                <label>Cost</label>
                <input type="text" name="cost" value="<?php echo $row['cost'];?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Paid Amount</label>
                <input type="text" name="paidcost" value="<?php echo $row['paid_amount'];?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Month</label>
                <input type="text" name="month" value="<?php echo $row['month']; ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Payment Date</label>
                <input type="text" name="payment_date" value="<?php echo $row['payment_date'];?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Status</label>
            <select class="form-control" id="Status" name="status">
                <option><?php echo $row['status'];?></option>

            </select>
            </div>
            <button type="submit" class="btn btn-default" name="upload">Update</button>
            <button type="reset" class="btn btn-default">Cancle</button>

            </form>
                            <!-- /form close -->
                                </div>
                                <!-- /col-lg-6 -->

                            </div>
                            <!-- /panel body row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
