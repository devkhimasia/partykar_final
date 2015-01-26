<?php
require('db.php');
$city=$_POST['city'];
$area=$_POST['area'];
$zone=$_POST['zone'];
mysql_query("insert into city (city,area,zone,type) values ('$city','$area','$zone','area')",$db_con);
echo "Added";
?>