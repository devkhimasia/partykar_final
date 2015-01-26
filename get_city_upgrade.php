<?php
require('db.php');
 $res=mysql_query("select distinct city from city",$db_con);
 echo "<option value='---Select City---'>---Select City---</option>";
 while($row=mysql_fetch_row($res))
 {
	 $i=0;
	 echo "<option value='".$row[$i]."'>".$row[$i]."</option>";
	 $i++;
 }
 ?> 