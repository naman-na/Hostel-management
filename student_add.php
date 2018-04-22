<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student</title>
    <!-- ----------------=====datepicker=====------------------- -->
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    <!-- Load jQuery JS -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Load jQuery UI Main JS  -->

    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
    <script src="script.js"></script>

    <!-- ------=================use for user check avaibility ------ -->
     
    <script type="text/javascript" src="js1/usernamevalid.js"></script>
    <!-- =======================/use for user check avaibility -->
    
    <link rel="stylesheet" href="runnable.css" />
    <!-- ----------------=====/datepicker=====------------------- -->


    
    <!-- Bootstrap Core CSS -->
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
    <!-- jQuery -->
<!-- ============== -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
<!-- ============== -->

    <!-- =====datepicker ---------------- -->
<script>
  $(function() {
    //alert('ok');
    $( "#datepicker" ).datepicker();
  });
  </script>
<script>
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>
    
<!-- =====datepicker ---------------- -->

</head>

<body>
<?php 
ob_start();
include 'header.php';
include 'left_side_bar.php';

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
                            Add Student
                        </div>
                        <div class="panel-body">
                        <!-- panel body row -->
                            <div class="row">
                                <div class="col-lg-6">
                                <!-- form for block -->
        <form role="form" action="student_save.php" method="post" name="form1" onsubmit="return validation()">
                            
            <div class="form-group">
                <label>Security Deposite</label>
                <input class="form-control" id="" type="text" name="security">
            </div>
            <div class="form-group">
                <label>Course</label>
                <input class="form-control" id="" type="text" name="course">
            </div>
            <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" id="user_check" autocomplete="off">
            <span id="result_user"></span>
                <!-- span use for show message -->
            </div>
            
            <div class="form-group">
                <label>Date of Birth</label>
                <input name='birthdate' id="datepicker" type='text' class="form-control">
            </div>
            <div class="form-group">
                <label>Date of Join</label>
                <input id="datepicker1" name='join' type='text' class="form-control">
                </div>
            <div class="form-group">
                <label>Father's Name</label>
                <input class="form-control" id="" type="text" name="fname">
            </div>
            <div class="form-group">
                <label>Mother's Name</label>
            <input class="form-control" id="" type="text" name="mname">
            </div>

            <div class="form-group">
                <label>Gender</label>
            <div class="radio">
                <label>
                <input type="radio" name="gender" class="gender" id="optionsRadios1" value="male" checked>Male
                </label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="gender" class="gender" id="optionsRadios2" value="female">Female
                </label>
            </div>
                                      
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control"  name="address" id="description" rows="2" cols="15" ></textarea>
            </div>
            <div class="form-group">
                <label>Contact no</label>
                <input class="form-control" id="" type="text" name="number">
            </div>
            <div class="form-group">
            <label>Parents no</label>
            <input class="form-control" id="number" type="text" name="pnumber">
            </div>

            <div class="form-group">
                <label>Blood group</label>
                <select class="form-control" id="" name="blood">
                <option value="">--select--</option>
                <option value="A+">A+</option>
                <option value="B">B+</option>
                <option value="AB+">AB+</option>
                <option value="O+">O+</option>
                <option value="A+">A-</option>
                <option value="B">B-</option>
                <option value="AB+">AB-</option>
                <option value="O+">O-</option>
                </select>
            </div>

            <div class="form-group">
                    <label>Status</label>
                <select class="form-control" id="Status" name="status">
                        <option value="">--select--</option>
                        <option value="enabled">Enabled</option>
                        <option value="disabled">Disabled</option>
                </select>
            </div>
                                        

        <p class="submit-button">
            <button type="submit" name="upload" class="btn btn-default" id="login-submit">Add</button>
            <button type="reset" class="btn btn-default">Refresh</button>
        </p>    
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


    

</body>

</html>
