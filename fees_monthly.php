<!DOCTYPE html>
<html lang="en">

<head>
<!-- ----------------=====datepicker=====------------------- -->
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Load jQuery JS -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Load jQuery UI Main JS  -->

    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
    <script src="script.js"></script>

    <link rel="stylesheet" href="runnable.css" />
    <!-- ----------------=====/datepicker=====------------------- -->



    <!-- ----------------=====Bootstrap Core CSS=====------------------- -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- ----------------=====/Bootstrap Core CSS=====------------------- -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ----------------=====Bootstrap Core JavaScript=====------------------- -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- ----------------=====Bootstrap Core JavaScript=====------------------- -->

<!-- =====datepicker ---------------- -->
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<script>
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>

<!-- =====datepicker ---------------- -->

<!-- =====fetch cost ---------------- -->
<script type="text/javascript">

function feestype(val)
{
 // alert(val);
 $.ajax({
     type: 'post',
     url: 'fetch_cost.php',
     data: {
       get_option:val
     },
     success: function (response) {
        //alert(response);
       document.getElementById("cost").value=response;
     }
   });
}
</script>
<!-- =====/fetch cost ---------------- -->

</head>

<body>
<?php

include 'left_side_bar.php';

?>
    <div id="wrapper">
    <!-- -----------------------------------------------====== header use not include===== ------------------------------------ -->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Ace Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        <i class="fa fa-user fa-fw"></i>  <i class="ace-icon fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="ace-icon fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

                <!-- /.sidebar-collapse -->
                </nav>
    <!-- -----------------------------------------------====== /header use ===== ------------------------------------ -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Fess</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fees create
                        </div>
                        <div class="panel-body">
                        <!-- panel body row -->
                            <div class="row">
                                <div class="col-lg-6">
<!-- =====------------------------ form start ------------------------- -->
<form role="form" action="fees_monthly_save.php" method="post">


    <div class="form-group">
        <label>Student Name</label>
            <select name="student_name" class="form-control">
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
        <label>Fees Type</label>
            <select name="fees_type" class="form-control" onchange="feestype(this.value);">
            <option value="">--select--</option>

        <?php

            $conn =mysql_connect("localhost", "root", "root");
            $db =mysql_select_db('hostel2', $conn);
            $sel=mysql_query("SELECT `fees_type` FROM `fees_structure`") or die(mysql_error());

            while($row=mysql_fetch_array($sel)){?>
            <option value="<?php echo $row['fees_type'];?>"><?php echo $row['fees_type'];?></option>

        <?php } ?>

        </select>
    </div>

    <div class="form-group">
        <label>Cost</label>
        <input type="text" name="cost" id="cost" class="form-control">
    </div>

    <div class="form-group">
        <label>Paid Amount</label>
        <input type="text" name="paidcost" class="form-control">
    </div>

    <div class="form-group">
            <label>Month</label>
            <input type="text" name="month" class="form-control" id="datepicker" />
    </div>

    <div class="form-group">
            <label>Payment Date</label>
            <input type="text" name="payment_date" id="datepicker1" class="form-control">
    </div>

    <div class="form-group">
        <label>Status</label>
            <select class="form-control" id="Status" name="status">
                <option value="">--select--</option>
                <option value="enabled">Enabled</option>
                <option value="disabled">Disabled</option>
            </select>
    </div>

    <button type="submit" class="btn btn-default" name="upload">Add</button>
    <button type="reset" class="btn btn-default">Refresh</button>

    </form>
<!-- =====------------------------/form close ------------------------- -->

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
