<?php
require('db.php');
$res=mysql_query("select distinct city from city",$db_con);
echo "<option value='Select City'>Select City</option>";
while ($row=mysql_fetch_row($res))
{
	echo "
	<option value='$row[0]'>$row[0]</option>
	";
}
?>