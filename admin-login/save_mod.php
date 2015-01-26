<?php
require('db.php');
$module=$_POST['module'];
$type=$_POST['type'];
$period=$_POST['period'];
$rate=$_POST['rate'];
$res=mysql_query("select id from rates where module='$module'",$db_con);
if(mysql_num_rows($res)>0)
{
	echo "here";
$row=mysql_fetch_row($res);
mysql_query("insert into rates(id,module,sub_module,period,rate) values ($row[0],'$module','$type','$period',$rate)",$db_con);
}
else
{
	
	$res1=mysql_query("select max(id) from rates",$db_con);
	$row=mysql_fetch_row($res1);
	$id=($row[0]+1);
	mysql_query("insert into rates(id,module,sub_module,period,rate) values ($id,'$module','$type','$period',$rate)",$db_con);
}
echo "Added";
?>