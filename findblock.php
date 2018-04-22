<?php

     $conn=mysql_connect("localhost","root","")or die(mysql_error());
    $db=mysql_select_db('hostel2',$conn)or die(mysql_error());
       if(isset($_POST['get_option'])){

     $block = $_POST['get_option'];
     echo "<option>---Select---</option>";
     $qry=mysql_query("select distinct roomno from room where block='$block' && status='enabled'");
    // $sql="SELECT DISTINCT `roomno` FROM `room` WHERE block='$block'";
     //$find=mysql_query($sql);
     while ($row=mysql_fetch_array($qry)) {?>
     <option value="<?php echo $row['roomno'];?>"><?php echo $row['roomno'];?></option>
     <?php
     }
}
     ?>
 <?php


      if(isset($_POST['get_option1'])){
      	//$block =$_POST['block'];
      //  $room =$_POST['room'];

   // $block = $_POST['get_option1'];
    $room = $_POST['get_option1'];
    echo "<option>---Select---</option>";
     $qry=mysql_query("select  beds from room where roomno='$room' && status='enabled'");
	 //$sql="SELECT DISTINCT `beds` FROM `room` WHERE roomno='$room'";
    // $find=mysql_query($sql);
     while ($row=mysql_fetch_array($qry)) {?>
     <option value="<?php echo $row['beds'];?>"><?php echo $row['beds'];?></option>
     <?php }
 }
 ?>
