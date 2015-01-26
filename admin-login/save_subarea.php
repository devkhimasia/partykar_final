<?php
require('db.php');
$city=$_POST['city'];
$area=$_POST['area'];
$sub_area=$_POST['sub_area'];
$a=$area." - ".$sub_area;
$res=mysql_query("select zone from city where city='$city' and area='$area' limit 1",$db_con);
$row=mysql_fetch_row($res);
mysql_query("insert into city (city,area,zone,type) values ('$city','$a','$row[0]','sub')",$db_con);
echo "Added";
?>