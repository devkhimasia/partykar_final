<?php
 require ('db.php');
if(isset($_GET['for']))
{
$id=$_GET['id'];
$d=$_GET['d'];
mysql_query("update ads set end_date='$d' where id=$id",$db_con);
echo "done";
	
}
else
{
$id=$_GET['id'];
$d=$_GET['d'];
mysql_query("update vendor_category set doe='$d' where id=$id",$db_con);
echo "done";
}
?>