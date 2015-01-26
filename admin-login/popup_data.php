<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<title>Untitled Document</title>
<!-- ==================================== Stylesheet ==================================== -->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Tahoma'>
<link rel='stylesheet' type='text/css' href='css/admin.css'>


</head>

<body>
<div id='inline1' >
<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
  <?php
  require('db.php');
  $id=$_GET['id'];
  $res=mysql_query("select * from vendor where id=$id",$db_con);
  while($row=mysql_fetch_row($res))
  {
	  echo "
	        <tr>
        <td class='tab120 orange'>Company Name</td>
        <td class='tab174 black'>$row[1]</td>
        <td class='tab100'>&nbsp;</td>
        <td class='tab120 orange'>Name</td>
        <td class='tab174 black'>$row[2]</td>
      </tr>
      <tr>
        <td class='tab120 orange'>Mobile No</td>
        <td class='tab174 black'>$row[7]</td>
        <td class='tab100'>&nbsp;</td>
        <td class='tab120 orange'>Email</td>
        <td class='tab174 black'>$row[8]</td>
      </tr>
	  <tr>
        <td class='tab120 orange'>Mobile No</td>
        <td class='tab174 black'>$row[18]</td>
        <td class='tab100'>&nbsp;</td>
        <td class='tab120 orange'>Mobile No</td>
        <td class='tab174 black'>$row[19]</td>
      </tr>
      <tr>
        <td class='tab120 orange'>Mobile No</td>
        <td class='tab174 black'>$row[20]</td>
        <td class='tab100'>&nbsp;</td>
         <td class='tab120 orange'>Telephone</td>
        <td class='tab174 black'>$row[17]</td>
      </tr>
	  <tr>
        <td class='tab120 orange'>City</td>
        <td class='tab174 black'>$row[3]</td>
        <td class='tab100'>&nbsp;</td>
        
      </tr>
      <tr>
        <td class='tab120 orange'>Category</td>
        <td class='tab174 black'>$row[11]</td>
        <td class='tab100'>&nbsp;</td>
        
        <td class='tab120 orange'>Area</td>
        <td class='tab174 black'>$row[4]</td>
      </tr>
      <tr>
        <td class='tab120 orange'>Address</td>
        <td class='tab174 black'>$row[5]</td>
        <td class='tab100'>&nbsp;</td>
        
		<td class='tab120 orange'>Pin</td>
        <td class='tab174 black'>$row[6]</td>
      </tr>
	  <tr>
	  <td align='center' colspan='5'>
	  <br><br>
	 <a href='edit_company.php?id=$row[0]' class='btn1 radius5' target='_blank'> Edit</a>
	  </td>
	  ";
  }
  ?>    
      

    </table>
</div>
</body>
</html>