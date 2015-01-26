<?php
require('db.php');
$city=$_POST['city'];
$zone=$_POST['zone'];
mysql_query("insert into zone (city,zone) values ('$city','$zone')",$db_con);
echo "Added";
?>