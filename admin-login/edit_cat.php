<?php
require('db.php');
$id=$_GET['id'];
$cat=$_GET['cat'];
mysql_query("update category set category='$cat' where id=$id",$db_con);
echo "1";
?>