<?php
require("db.php");
$cat=$_GET['cat'];
$t=$_GET['t'];
$p=$_GET['p'];

$res=mysql_query("select module_id from category where category='$cat'",$db_con);
$r=mysql_fetch_row($res);
$mod_id=$r[0];

$result=mysql_query("select rate from rates where id=$mod_id and sub_module='$t' and period='$p'",$db_con);
$rate=mysql_fetch_row($result);
echo $rate[0];
?>