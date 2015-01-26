<?php
require('db.php');
$id=$_GET['id'];
$city=$_GET['city'];
mysql_query("update add_city set city='$city' where id=$id",$db_con);
echo "1";
?>