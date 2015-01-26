<?php
require('db.php');

$city=$_POST['area'];

mysql_query("insert into add_city (city) values ('$city')",$db_con);
echo "Added";
?>