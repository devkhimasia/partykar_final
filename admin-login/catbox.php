<?php
require('db.php');
 $res=mysql_query("select category from category ",$db_con);
 echo "<option value='---Select Category---'>---Select Category---</option>";
 while($row=mysql_fetch_row($res))
 {
	 $i=0;
	 echo "<option value='".$row[$i]."'>".$row[$i]."</option>";
	 $i++;
 }
 ?> 