<?php
require('db.php');
if(!isset($_GET['unverify']))
{
$id=$_GET['id'];
mysql_query("update vendor set confirmed='yes' where id=$id",$db_con);
$res=mysql_query("select email from vendor where id=$id",$db_con);
$row=mysql_fetch_row($res);
$subject="Partykar Confirmation";
		
		$message = '
			<html>
			<head>
			<title>Contact</title>
			</head>
			<body>
				<table width="600" border="0" align="left" cellpadding="0" cellspacing="0" style="border:1px solid #000;">
					<tr>
						<td bgcolor="#383838" style="border-bottom:1px solid #333; padding-left:10px; padding-top:3px"><img src="http://www.partykar.com/beta/images/partyKar-logo.png"></td>
					</tr>
					<tr>    
					
					
					
				</table>
				</body>
				</html>
				';
		
		$message="Your Account has been verified and is now active on PartyKar. We hope you enjoy the PartyKar Experience. Thank you \r\n";
//		$message.="Click on this link to activate your account \r\n";
//		$message.="http://www.zeistmarketing.com/partykar/confirmation.php?passkey=$confirm_code";
		$sender_email= "info@partykar.com"; 
				$name="PartyKar"; 								
				
				  $email=$row[0]; 
				  $headers="From:$name <$sender_email>\r\n"; 
				  $headers .= "Reply-To: $sender_email\r\n"; 
				  $headers .= "Date: " . date("r") . "\r\n"; 
				  $headers .= "Return-Path: $sender_email\r\n"; 
				  $headers .= "MIME-Version: 1.0\r\n"; 
				  $headers .= "Message-ID: " . date("r") . $_SERVER['HTTP_HOST']."\r\n"; 
				  $headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
				  $headers .= "X-Priority: 1\r\n"; 
				  $headers .= "Importance: High\r\n"; 
				  $headers .= "X-MXMail-Priority: High\r\n"; 
				  $headers .= "X-Mailer: PHP Mailer 1.0\r\n"; 
		 //send email
		//$sentmail = mail($email,$subject,$message,$headers);
echo $id;
}
else
{
	$id=$_GET['id'];
mysql_query("update vendor set confirmed='no' where id=$id",$db_con);
echo $id;
}
?>