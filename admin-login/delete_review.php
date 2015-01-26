<?php
require("db.php");
$id=$_GET['id'];
mysql_query("delete from reviews where id=$id",$db_con);
?>