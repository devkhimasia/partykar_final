<?php
require('db.php');
$id=$_GET['id'];
$zone=$_GET['zone'];
mysql_query("update zone set zone='$zone' where id=$id",$db_con);
echo "1";
?>