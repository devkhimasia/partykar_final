<?php
require('db.php');
$id=$_GET['id'];

$result = mysql_query("DELETE FROM city WHERE id = $id",$db_con);

echo "1";
?>