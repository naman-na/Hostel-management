
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
<!-- inline jquery ----------------------- -->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jq.js"></script>

<LINK href="style.css" rel="stylesheet" type="text/css" />
<!-- inline jquery ----------------------- -->
</head>

<body>


<?php  
 
include 'header.php';
include 'left_side_bar.php';
include 'conn.php';
    
?>
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
                            Block View
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                            <div  style="overflow:scroll;height:500px;width:1000px;">

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Block</th>
            <th>Gender</th>
            <th>Description</th>
            <th>status</th>
                                           
        </tr>
    </thead>
<?php 
$query = mysql_query("select * from block");

    $i=1;                       
    while ($row=mysql_fetch_array($query)) { 
    $id=$row['id'];

    $block=$row['block'];

    $gender=$row['gender'];

    $description=$row['description']; 
    $status=$row['status']; 
    if($i%2){                           
 ?>
    <tr id="<?php echo $id; ?>" class="tredit" /> 

<?php 
}else 
 {?>
 <tr id="<?php echo $id ?>"bgcolor="#C2C2C2" class="tredit">
<?php }?>

    <td width="33%" class="edittbl">
 <span id="first_<?php echo $id; ?>" class="text"><?php echo $block; ?> </span>
 <input type="text" class="ip" id="first_ip_<?php echo $id ?>" value="<?php echo $block; ?>" </input>
    </td>
    

    <td width="33%" class="edittbl">
<span id="second_<?php echo $id; ?>" class="text"><?php echo $gender; ?> </span>
<input type="text" class="ip" id="second_ip_<?php echo $id ?>" value="<?php echo $gender; ?>" </input>
    </td>


   <td width="33%" class="edittbl">
<span id="third_<?php echo $id; ?>" class="text"><?php echo $description; ?> </span>
<input type="text" class="ip" id="third_ip_<?php echo $id ?>" value="<?php echo $description; ?>" </input>
  </td>

    <td width="33%" class="edittbl">
<span id="four_<?php echo $id; ?>" class="text"><?php echo $status; ?> </span>
<input type="text" class="ip" id="four_ip_<?php echo $id ?>" value="<?php echo $status; ?>" </input>
   </td>
</tr>
<?php
$i++;
}
?>
</table>

<div id="myad">
</div>
<p style="text-align: justify;"></p>

<script type="text/javascript">
$(".tredit").click(<span class="IL_AD" id="IL_AD8">function</span>()
{
var ID=$(this).attr('id');

$("#first_"+ID).hide();
$("#second_"+ID).hide();
$("#third_"+ID).hide();
$("#four_"+ID).hide();
$("#first_ip_"+ID).show();
$("#second_ip_"+ID).show();
$("#third_ip_"+ID).show();
$("#four_ip_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_ip_"+ID).val();
var second=$("#second_ip_"+ID).val();
var third=$("#third_ip_"+ID).val();
var four=$("#four_ip_"+ID).val();
var dataString = 'id='+ ID +'&block='+first+'&gender='+second+'&description='+third+'&status='+four;
<p style="text-align: justify;">                        
   
</script> 

        
                                </div>
                            </div>
                            <!-- /.table-responsive -->
                           
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
