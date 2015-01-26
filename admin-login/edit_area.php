<?php
require('db.php');
$id=$_GET['id'];
$area=$_GET['area'];
$zone=$_GET['zone'];

mysql_query("update city set area='$area',zone='$zone' where id=$id",$db_con);
echo "1";
?>