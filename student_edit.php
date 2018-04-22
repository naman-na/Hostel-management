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
$update =$_GET['id'];
//echo $update;
//die();
$conn=mysql_connect("localhost","root","")or die(mysql_error());
    $db=mysql_select_db('hostel2',$conn)or die(mysql_error());

    $query = "SELECT * FROM `student` where id='$update'";

    $result = mysql_query($query)or die(mysql_error());
    $row =mysql_fetch_array($result)or die(mysql_error());
    $gender=$row['gender'];
?>
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Update
                        </div>
                        <div class="panel-body">
                        <!-- panel body row -->
                            <div class="row">
                                <div class="col-lg-6">
                                <!-- form for block -->
    <form role="form" action="student_update.php" method="POST">
    <input type="hidden" name="nameupdate" value="<?php echo $row['id']; ?>">

            <div class="form-group">
                <label>Security Deposite</label>
                <input class="form-control" type="text" name="security" value="<?php echo $row['security']; ?>">
            </div>
            <div class="form-group">
                <label>Course</label>
                <input class="form-control" id="" type="text" name="course" value="<?php echo $row['course']; ?>">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" id="" type="text" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input name='birthdate' id="date" type='text' class="form-control" value="<?php echo $row['dob']; ?>">
            </div>
            <div class="form-group">
                <label>Date of Join</label>
                <input id="date" name='join' type='text' class="form-control" value="<?php echo $row['join']; ?>">
                </div>
            <div class="form-group">
                <label>Father's Name</label>
                <input class="form-control" id="" type="text" name="fname" value="<?php echo $row['fname']; ?>">
            </div>
            <div class="form-group">
                <label>Mother's Name</label>
            <input class="form-control" id="" type="text" name="mname" value="<?php echo $row['mname']; ?>">
            </div>

            <div class="form-group">
                <label>Gender</label>
            <div class="radio">
                <label>
                <input type="radio" name="gender" class="gender" id="optionsRadios1" <?php if ($gender=="male") echo "checked"; ?> value="male" checked>Male
                </label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="gender" class="gender" id="optionsRadios2" <?php if ($gender=="female") echo "checked"; ?> value="female">Female
                </label>
            </div>

            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control"  name="address" id="description" rows="2" cols="15" ><?php echo $row['address']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Contact no</label>
                <input class="form-control" type="text" name="contact" value="<?php echo $row['contact'] ?>">
            </div>
            <div class="form-group">
            <label>Parents no</label>
            <input class="form-control" id="number" type="text" name="pnumber" value="<?php echo $row['pnumber'] ?>">
            </div>

            <div class="form-group">
                <label>Blood group</label>
            <select class="form-control" id="" name="blood">
                <option><?php echo $row['blood'] ?></option>
            </select>

            </div>

            <div class="form-group">
                    <label>Status</label>
                <select class="form-control" id="Status" name="status">
                        <option><?php echo $row['status']; ?></option>

                </select>
            </div>



            <button type="submit" name="upload" class="btn btn-default">Update</button>
            <button type="reset" class="btn btn-default">Refresh</button>
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
