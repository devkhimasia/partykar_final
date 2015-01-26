<?php
echo "hhhhhhhhhhhhh";
require('db.php');
$id=$_GET['id'];
$c=$_GET['c'];
mysql_query("update vendor_category set renewed='yes' where id=$id",$db_con);
$res=mysql_query ("select * from vendor_category where id=$id",$db_con);
$row=mysql_fetch_row($res);
mysql_query("insert into vendor_category (vendor_id,category,keywords,city,area,membership_type,membership_period,price,doa,activate,date_added,paid) values ($c,'$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[10]','no',CURDATE(),'paid')",$db_con);
echo "done";
?>