<?php
$img=$_POST['userfile'];

$id= $_POST['memberid'];
require('db.php');
move_uploaded_file($_FILES['uesrfile']['tmp_name'], 'uploaded/'. $_FILES[userfile]["name"]);
mysql_query("insert into vendor_upload (vendor_id,logo) values ($id,'upload/'.$img)",$db_con);
?>