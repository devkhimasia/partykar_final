<?php
require("db.php");
$cat=$_GET['cat'];
echo "<option>Select Vendor</option>";
$res=mysql_query("select distinct a.company,b.vendor_id from vendor a,vendor_category b where a.id=b.vendor_id and b.category='$cat'",$db_con);
while ($row=mysql_fetch_row($res))
{
	echo "<option value='$row[1]'>$row[0]</option>";
}
?>