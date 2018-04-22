<?php

//connect the database
$conn =mysql_connect("localhost","root","")or die(mysql_error());
$db =mysql_select_db('hostel2', $conn)or die(mysql_error());

//Enter the headings of the excel columns
$contents="ID,Student Name,Fees Type,Cost,Paid Amount,due_balance,month,payment_date,status\n";

//Mysql query to get records from datanbase
$user_query = mysql_query("SELECT `id`, `student_name`, `fees_type`, `cost`, `paid_amount`, `due_balance`, `month`, `payment_date`, `status` FROM `fees_monthly`")or die(mysql_error());

//While loop to fetch the records
while($row = mysql_fetch_array($user_query))
{
$contents.=$row['id'].",";
$contents.=$row['student_name'].",";
$contents.=$row['fees_type'].",";
$contents.=$row['cost'].",";
$contents.=$row['paid_amount'].",";
$contents.=$row['due_balance'].",";
$contents.=$row['month'].",";
$contents.=$row['payment_date'].",";
$contents.=$row['status']."\n";
}

// remove html and php tags etc.
$contents = strip_tags($contents);

//header to make force download the file
header("Content-Disposition: attachment; filename=Order.xls".date('d-m-Y').".csv");
print $contents;

//For more examples related PHP visit www.webinfoipedia.com and enjoy demo and free download..
?>
