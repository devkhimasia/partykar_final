<?php
require('db.php');
$company=$_REQUEST["company"];
$name=$_REQUEST["fname"];
$city=$_REQUEST["city"];
$area=$_REQUEST["area"];
$mobile=$_REQUEST["mobile"];
$tel=$_REQUEST["tel"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$cat=$_REQUEST["cat"];
$keyword=$_REQUEST['key'];
$address=$_REQUEST['add'];
$added_by=$_REQUEST['added_by'];
$mobile2=$_REQUEST['mobile2'];
$mobile3=$_REQUEST['mobile3'];
$mobile4=$_REQUEST['mobile4'];
$tel2=$_REQUEST['telephone2'];
$tel3=$_REQUEST['telephone3'];
$tel4=$_REQUEST['telephone4'];
$pin=$_REQUEST['pin'];
$website=$_REQUEST['website'];
$id=$_REQUEST['id'];

//print_r($_REQUEST);


$re = mysql_query("UPDATE vendor SET company='$company',name='$name',city='$city',area='$area',pin=$pin,mobile='$mobile',email='$email',password='$password',address='$address',added_by='$added_by',category='$cat',keywords='$keyword',telephone='$tel',mobile2='$mobile2',mobile3='$mobile3',mobile4='$mobile4',telephone2='$tel2',telephone3='$tel3',telephone4='$tel4',website='$website' where id=$id",$db_con);


//$sql = "update vendor_category set category='$cat',keywords='$keyword',city='$city',area='$area' where vendor_id=$id";

$catup = mysql_query("update vendor_category set category='$cat',keywords='$keyword',city='$city',area='$area' where vendor_id=$id",$db_con);

echo 1;

?>

