<?php
$a=$_REQUEST["a"];
$b=$_REQUEST["b"];
$c=$_REQUEST["c"];
$d=$_REQUEST["d"];
$e=$_REQUEST["e"];
$f=$_REQUEST["f"];
$g=$_REQUEST["g"];
$h=$_REQUEST["h"];
$i=$_REQUEST["i"];
$j=$_REQUEST["j"];
$k=$_REQUEST["k"];
$pin=$_REQUEST['pin'];
$website=$_REQUEST['website'];
$added_by=$_REQUEST['added_by'];
$mobile2=$_REQUEST['mobile2'];
$mobile3=$_REQUEST['mobile3'];
$mobile4=$_REQUEST['mobile4'];
$telephone2=$_REQUEST['telephone2'];
$telephone3=$_REQUEST['telephone3'];
$telephone4=$_REQUEST['telephone4'];
require('db.php');
$confirm_code=md5(uniqid(rand())); 
 $res=mysql_query("insert into vendor (company,name,city,area,address,mobile,email,password,added_by,category,keywords,code,confirmed,date_added,telephone,mobile2,mobile3,mobile4,telephone2,telephone3,telephone4,pin,website) values ('$a','$b','$c','$d','$k','$e','$g','$h','$added_by','$i','$j','$confirm_code','no',CURDATE(),'$f','$mobile2','$mobile3','$mobile4','$telephone2','$telephone3','$telephone4','$pin','$website')",$db_con);
 if($res)
 {
	 
	 $result=mysql_query("select id from vendor where code='$confirm_code'",$db_con);
	 $id=mysql_fetch_row($result);
	 $z=mysql_query("select zone from city where city='$c' and area='$d'",$db_con);
	 $zone=mysql_fetch_row($z);
	 $add=mysql_query("insert into vendor_category (vendor_id,category,keywords,city,area,membership_type,price,activate,date_added,paid,zone) values ($id[0],'$i','$j','$c','$d','free',0,'yes',CURDATE(),'unpaid','$zone[0]')",$db_con);
	 echo "ADDED";
 }
		//$subject="Your confirmation link here";
//		
//		$message = '
//			<html>
//			<head>
//			<title>Contact</title>
//			</head>
//			<body>
//				<table width="600" border="0" align="left" cellpadding="0" cellspacing="0" style="border:1px solid #000;">
//					<tr>
//						<td bgcolor="#383838" style="border-bottom:1px solid #333; padding-left:10px; padding-top:3px"><img src="http://www.partykar.com/beta/images/partyKar-logo.png"></td>
//					</tr>
//					<tr>    
//					<tr>
//						<td bgcolor="#d8d8d8">This is your login details please go to url <a href="http://www.partykar.com/beta/confirmation.php?passkey='.$confirm_code.'">http://www.partykar.com/beta/confirmation.php?passkey='.$confirm_code.'</a> </td>
//					</tr>
//					<tr>
//						<td bgcolor="#d8d8d8" style="padding-left:10px; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; line-height:20px;">
//						<strong>Company Name:'.$a.'</strong> <br /><br/>
//						<strong>Name:'.$b.'</strong>  <br /><br/>
//						
//					   	</td>
//					</tr>
//				</table>
//				</body>
//				</html>
//				';
//		
//		/*$message="Your Comfirmation link \r\n";
//		$message.="Click on this link to activate your account \r\n";
//		$message.="http://www.zeistmarketing.com/partykar/confirmation.php?passkey=$confirm_code";*/
//		$sender_email= "info@partykar.com"; 
//				$name="PartyKar"; 								
//				
//				  $email=$g; 
//				  $headers="From:$name <$sender_email>\r\n"; 
//				  $headers .= "Reply-To: $sender_email\r\n"; 
//				  $headers .= "Date: " . date("r") . "\r\n"; 
//				  $headers .= "Return-Path: $sender_email\r\n"; 
//				  $headers .= "MIME-Version: 1.0\r\n"; 
//				  $headers .= "Message-ID: " . date("r") . $_SERVER['HTTP_HOST']."\r\n"; 
//				  $headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
//				  $headers .= "X-Priority: 1\r\n"; 
//				  $headers .= "Importance: High\r\n"; 
//				  $headers .= "X-MXMail-Priority: High\r\n"; 
//				  $headers .= "X-Mailer: PHP Mailer 1.0\r\n"; 
		// send email
		//$sentmail = mail($email,$subject,$message,$headers);
		
		
		



?>