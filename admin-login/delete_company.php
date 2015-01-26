<?php
require("db.php");
$id=$_GET['id'];
mysql_query("delete from vendor where id=$id",$db_con);
mysql_query("delete from vendor_category where vendor_id=$id",$db_con);
?>