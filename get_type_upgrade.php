<?php
require('db.php');
$area=$_GET['area'];
$cat=$_GET['cat'];
 $res=mysql_query("select * from vendor_category where area='$area' and category='$cat' and membership_type='platinum'",$db_con);

 echo "<option value='---Select Membership Type---'>---Select Membership Type---</option>";
 if(mysql_num_rows($res)>0)
 {
	
	 echo "<option value='Gold'>Gold</option>";
	 echo "<option value='Silver'>Silver</option>";
 }
 else
 {
	  echo "<option value='Platinum'>Platinum</option>";
	 echo "<option value='Gold'>Gold</option>";
	 echo "<option value='Silver'>Silver</option>";
 }
 
 ?> 