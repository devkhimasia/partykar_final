<?php
require('db.php');
$id=$_GET['id'];
$area=$_GET['area'];
$result = mysql_query("SELECT area FROM city WHERE id = $id",$db_con);

$subarea = mysql_fetch_array($result);
$splitarea = explode(" - ",$subarea['area']);
//print_r($splitarea);

$updatearea = $splitarea[0]." - ".$area;

mysql_query("update city set area='$updatearea' where id=$id",$db_con);
echo "1";
?>