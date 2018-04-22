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

<!-- ================= -->

</head>

<body>
<?php
include 'header.php';
include 'left_side_bar.php';
$update =$_GET['id'];
$conn=mysql_connect("localhost","root","root")or die(mysql_error());
    $db=mysql_select_db('hostel2',$conn)or die(mysql_error());

    $query = "SELECT * FROM `block` where id='$update'";

    $result = mysql_query($query)or die(mysql_error());
    $row =mysql_fetch_array($result)or die(mysql_error());
    $gender=$row['gender'];
?>
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Block</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Block create
                        </div>
                        <div class="panel-body">
                        <!-- panel body row -->
                            <div class="row">
                                <div class="col-lg-6">
                                <!-- form for block -->


<table>
<?php
include('conn.php');
$sql=mysql_query("select * from block");
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$block=$row['block'];
$gender=$row['gender'];
$description=$row['description'];
$status=$row['status'];
?>
<tr id="<?php echo $id; ?>" class="edit_tr">

<td class="edit_td">
<span id="block_<?php echo $id; ?>" class="text"><?php echo $block; ?></span>
<input type="text" value="<?php echo $block; ?>" class="editbox" id="block_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="gender_<?php echo $id; ?>" class="text"><?php echo $gender; ?></span>
<input type="text" value="<?php echo $gender; ?>" class="editbox" id="gender_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="description_<?php echo $id; ?>" class="text"><?php echo $description; ?></span>
<input type="text" value="<?php echo $description; ?>" class="editbox" id="description_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="status_<?php echo $id; ?>" class="text"><?php echo $status; ?></span>
<input type="text" value="<?php echo $status; ?>" class="editbox" id="status_input_<?php echo $id; ?>"/>
</td>


</tr>
<?php
}
?>
</table>

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
