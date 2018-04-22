<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fees</title>
  <!-- ============================ date picker ==================== -->



 <!-- ============================ /date picker ==================== -->

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


<!-- =================for get student details======================= -->
<script type="text/javascript">

function showreport(val)
{
 // alert(val);
 $.ajax({
     type: 'post',
     url: 'get_report_bill.php',
     data: {
       get_option:val
     },
     success: function (response) {
   //    alert(response);
       document.getElementById("txtHint").innerHTML=response;
     }
   });
}
</script>
<!-- =================/for get student details======================= -->
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

<!-- ==================================== class="form-group"> ===================== -->
                        <div class="form-group">
                                <div class="col-lg-4">
                                        <label>Report Type</label>
                                    <select name="report" class="form-control" onchange="showreport(this.value)">
                                            <option value="">--select--</option>

                                    <?php

                                        $conn =mysql_connect("localhost", "root", "root");
                                        $db =mysql_select_db('hostel2', $conn);
                                        $sel=mysql_query("SELECT DISTINCT `fees_type` FROM `fees_monthly`") or die(mysql_error());

                                        while($row=mysql_fetch_array($sel)){?>
                                        <option value="<?php echo $row['fees_type'];?>"><?php echo $row['fees_type'];?></option>

                                    <?php } ?>

                                    </select>
                                </div>
<?php /*
                            <div class="col-lg-3">
                                        <label>Start Date</label>
                                    <input type="text" name="sdate" class="form-control" onchange="showsdate(this.value)">
                            </div>

                            <div class="col-lg-3">
                                    <label>End Date</label>
                                    <input type="text" name="ndate" class="form-control" onchange="showndate(this.value)">
                            </div>
                        <br>
                    <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
   */ ?>
                </div>
<!-- ==================================== class="form-group"> ===================== -->

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
