<?php
require("db.php");
$cat=$_GET['cat'];
$t=$_GET['t'];
$p=$_GET['p'];
$c=$_GET['c'];
$a=$_GET['a'];
$e=$_GET['id'];
$rate=$_GET['rate'];
$res=mysql_query("select id from vendor where email='$e'",$db_con);
$i=mysql_fetch_row($res);
$id=$i[0];

mysql_query("update vendor_category set city='$c',area='$a',membership_type='$t',membership_period='$p',date_added=CURDATE(),activate='no',price=$rate where vendor_id=$id and category='$cat'",$db_con);
echo $cat;
?>