<?php
require('db.php');
$id=$_POST['catid'];
$cat=$_POST['cat'];
$keys=$_POST['keys'];
$module=$_POST['module'];

mysql_query("update category set category='$cat',keywords='$keys',module_id = $module where id=$id",$db_con);
//echo "Data update sucessfully";
echo "1";
?>