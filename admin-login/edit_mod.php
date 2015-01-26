<?php
require('db.php');
$id=$_GET['id'];
$mod=$_GET['mod'];
mysql_query("update rates set rate=$mod where uid=$id",$db_con);
echo "1";
?>