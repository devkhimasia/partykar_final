<?php
require("db.php");
$id=$_GET['id'];
$res=mysql_query("select category from vendor where id='$id'",$db_con);
$vid=mysql_fetch_row($res);
$result=mysql_query("select id,category from category where id=$vid[0]",$db_con);
echo "<option value='---Select Category---'>---Select Category---</option>";
 while($row=mysql_fetch_array($result))
 {
	 
	 echo "<option value='".$row['id']."'>".$row['category']."</option>";
	 
 }
?>