<?php
require('db.php');
$id=$_GET['id'];
$res=mysql_query("select membership_period,doa from vendor_category where id=$id",$db_con);
$r=mysql_fetch_row($res);
if ($r[0]=='3 months')
{
	if ($r[1]=='0000-00-00')
	{
	mysql_query("update vendor_category set paid='paid',activate='yes',doa=CURDATE(),doe=DATE_ADD(CURDATE(),INTERVAL 90 DAY) where id=$id",$db_con);
	echo "done";
	}
	else
	{
	mysql_query("update vendor_category set paid='paid',activate='yes',doe=DATE_ADD(doa,INTERVAL 90 DAY) where id=$id",$db_con);
	echo "done";
	}
}
else if ($r[0]=='6 months')
{
	mysql_query("update vendor_category set paid='paid',activate='yes',doa=CURDATE(),doe=DATE_ADD(CURDATE(),INTERVAL 180 DAY) where id=$id",$db_con);
	echo "done";	
}
else if ($r[0]=='12 months')
{
	mysql_query("update vendor_category set paid='paid',activate='yes',doa=CURDATE(),doe=DATE_ADD(CURDATE(),INTERVAL 365 DAY) where id=$id",$db_con);
	echo "done";	
}
?>