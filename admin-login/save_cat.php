<?php
require('db.php');
$cat=$_POST['cat'];
$keys=$_POST['keys'];
$module=$_POST['module'];
mysql_query("insert into category(category,keywords,module_id) values ('$cat','$keys',$module)",$db_con);
$path="ads/$cat";
$path1="ads/$cat/top";
$path2="ads/$cat/right_1";
$path3="ads/$cat/right_2";
$path4="ads/$cat/right_3";
$path5="ads/$cat/right_4";
mkdir($path);
mkdir($path1);
mkdir($path2);
mkdir($path3);
mkdir($path4);
mkdir($path5);
echo "Added";
?>