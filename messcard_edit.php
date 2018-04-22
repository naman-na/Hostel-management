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
$update =$_GET['id'];

$conn =mysql_connect("localhost","root","")or die(mysql_error());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());
$select =mysql_query("SELECT * FROM `messcard` WHERE id='$update'")or die(mysql_error());
$row =mysql_fetch_array($select)or die(mysql_error());

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
    <form role="form" action="messcard_update.php" method="post">
    <input type="hidden" name="mess" value="<?php echo $row['id']; ?>">

    <div class="form-group">
        <label>Student Name</label>
        <select name="name" class="form-control">
            <option><?php echo $row['name'] ?></option>
        </select>
    </div>
                                
    <div class="form-group">
        <label>Food Type</label>
    <select class="form-control" name="food">
        <option><?php echo $row['food'] ?></option>
        
    </select>
    </div>
    <div class="form-group">
            <label>Messcard Type</label>
        <select class="form-control" id="Status" name="messcard">
            <option><?php echo $row['messcard'] ?></option>
                                                
        </select>
    </div>
                        
    <div class="form-group">
            <label>Start Date</label>
<input class="form-control" type="text" name="startdate" value="<?php echo $row['startdate']; ?>">
    </div>
    
    <div class="form-group">
        <label>End Date</label>
<input class="form-control" type="text" name="enddate" value="<?php echo $row['enddate']; ?>">
    </div>                                        
                                        
    <div class="form-group">
        <label>Status</label>
    <select class="form-control" id="Status" name="status">
    <option><?php echo $row['status']; ?>"</option>
                                        
    </select>
    </div>

    <button type="submit" class="btn btn-default" name="upload">update</button>
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
