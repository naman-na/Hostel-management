<?php

$conn =mysql_connect("localhost", "root", "root");
$db =mysql_select_db('hostel2', $conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Entry</title>

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
$conn =mysql_connect("localhost","root","")or die(mysql_error());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());
$select ="SELECT * FROM `room_allotment`";
$query =mysql_query($query)or die(mysql_error());
?>
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rooms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Rooms Entry Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="form1" action="room_allot_update.php" method="post">
<!-- ------------------------ block -------------------------------- -->
            <div class="form-group">
                        <label>Block</label>
                <select name="block" id="block"  class="form-control" onchange="getblock(this.value);">
                        <option><?php echo $row['block'] ?></option>
                </select>
            </div>
        <!-- ------------------------ room -------------------------------- -->
            <div class="form-group">
                    <label>Room No</label>

                <select name="room" id="room"  class="form-control" onchange="getroom(this.value);">
                    <option><?php echo $row['roomno'] ?></option>
                </select>

            </div>
<!-- ------------------------ no of beds -------------------------------- -->
        <div class="form-group">
                <label>No of Beds</label>

            <select name="beds" id="beds" class="form-control">
                <option><?php echo $row['beds'] ?></option>
            </select>

        </div>
<!-- ------------------------ close -------------------------------- -->
                                <div class="form-group">
                                        <label>Student Name</label>
                                    <select name="name" class="form-control">
                                            <option><?php echo $row['name'] ?></option>
                                    </select>
                                </div>



                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" id="Status" name="status">
                                                <option><?php echo $row['status'] ?></option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-default" name="upload">Update</button>
                                        <button type="reset" class="btn btn-default">Refresh</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
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
