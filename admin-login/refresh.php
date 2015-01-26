<?php
require('db.php');
 $city=$_GET["city"];
 
 $res=mysql_query("select area from city where city='$city'",$db_con);
 echo "<option value='---Select Area---'>---Select Area---</option>";
 while($row=mysql_fetch_row($res))
 {
	 $i=0;
	 echo "<option value='".$row[$i]."'>".$row[$i]."</option>";
	 $i++;
 }
 ?>