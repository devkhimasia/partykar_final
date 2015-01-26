<?php
require('db.php');
 $res=mysql_query("select id,category from category ",$db_con);
 echo "<option value='0'>---Select Category---</option>";
 while($row=mysql_fetch_array($res))
 {
	 
	 echo "<option value='".$row['id']."'>".$row['category']."</option>";
	 
 }
 ?> 