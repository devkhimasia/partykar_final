<?php
require('db.php');
 $category=$_GET["category"];
 
 $res=mysql_query("select keywords from category where category='$category'",$db_con);
$ch = mysql_fetch_row($res);
$pieces = explode(",", $ch[0]);
 /*?>echo $pieces[0]; // piece1
echo $pieces[1]; // piece2<?php */
$count = count($pieces);
echo "
<table width='730' border='0' cellspacing='0' cellpadding='0'>";
$i=0;
while ($pieces[$i]!= "")
{
	echo "<tr>";
	for ($j=0;$j<3;$j++)
	{
		echo "
                    <td class='check'><input name='chck'  class='chk' type='checkbox' value='".$pieces[$i]."'>
                      &nbsp;&nbsp;".$pieces[$i]."</td>";
					  $i++;
					  if($pieces[$i]== "") 
					  break;
               
	}
	echo "</tr>";
	
}
                  
                 
             echo "   </table> ";


 ?>