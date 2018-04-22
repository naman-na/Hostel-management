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
?>
    <div id="wrapper">


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mess</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mess Card Entry Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="messcard_save.php" method="post">

                                    <div class="form-group">
                                        <label>Student Name</label>
                                    <select name="name" class="form-control">
                                            <option value="">--select--</option>

                                    <?php

                                        $conn =mysql_connect("localhost", "root", "");
                                        $db =mysql_select_db('hostel2', $conn);
                                        $sel=mysql_query("SELECT `name` FROM `student`") or die(mysql_error());

                                        while($row=mysql_fetch_array($sel)){?>
                                        <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>

                                    <?php } ?>

                                    </select>
                                </div>

                                <div class="form-group">
                                            <label>Food Type</label>
                                            <select class="form-control" id="Status" name="food">
                                                <option value="">--select--</option>
                                                <option value="vegeterian">Vegeterian</option>
                                                <option value="nonvegeterian">Non-Vegeterian</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Messcard Type</label>
                                            <select class="form-control" id="Status" name="messcard">
                                                <option value="">--select--</option>
                                                <option value="permanent">Permanent</option>
                                                <option value="temporary">temporary</option>
                                            </select>
                                        </div>

                                    <div class="form-group">
                                            <label>Start Date</label>
                                            <input class="form-control" type="text" name="startdate">
                                        </div>
                                    <div class="form-group">
                                            <label>End Date</label>
                                            <input class="form-control" type="text" name="enddate">
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" id="Status" name="status">
                                                <option value="">--select--</option>
                                                <option value="enabled">Enabled</option>
                                                <option value="disabled">Disabled</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-default" name="upload">Save</button>
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
