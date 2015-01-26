<?php
require('db.php');
$city=$_GET['city'];
$res=mysql_query("select distinct zone from zone where city='$city'",$db_con);
echo "<option value='0'>Select Zone</option>";
while ($row=mysql_fetch_row($res))
{
	echo "
	<option value='$row[0]'>$row[0]</option>";
}
?>