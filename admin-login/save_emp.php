<?php
require('db.php');
$name=$_POST['name'];
$designation=$_POST['designation'];
$doj=$_POST['doj'];
$pf_no=$_POST['pf_no'];
$gross=$_POST['gross'];
mysql_query("insert into employees (name,designation,doj,pf_no,gross) values ('$name','$designation','$doj','$pf_no','$gross')",$db_con);
echo "Added";
?>