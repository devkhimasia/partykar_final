<?php
session_start();
ob_start();
require('db.php');
// Passkey that got from link 
$passkey=$_GET['passkey'];


// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM vendor WHERE code ='$passkey'";
$result1=mysql_query($sql1);

// If successfully queried 

// Count how many row has this passkey	


// if found this passkey in our database, retrieve data from table "temp_members_db"

if(mysql_num_rows($result1)>0)
{
mysql_query("update vendor set confirmed='yes' where code='$passkey'",$db_con);
$_SESSION['code']=$passkey;
header('Location:vendor-profile.php');
}

// if not found passkey, display message "Wrong Confirmation code" 
else {
echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"



?>