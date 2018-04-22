<? $country=intval($_GET['country']);
$link = mysql_connect('localhost', 'root', 'root'); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('db_ajax');
$query="SELECT id,statename FROM state WHERE countryid='$country'";
$result=mysql_query($query);

?>
