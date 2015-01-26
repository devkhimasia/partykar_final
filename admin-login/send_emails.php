<?php
require('db.php');		
$sender_email= "info@partykar.com"; 
				$name="PartyKar"; 								
				
				  
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
				  
				  
$mail_to_send=mysql_query("select * from email where time_send < NOW()",$db_con);

while($mail_to=mysql_fetch_row($mail_to_send))
{
	
	mysql_query("update vendor set lead_count=lead_count+1 where email='$mail_to[1]'",$db_con);
	$sentmail = mail($mail_to[1],$mail_to[2],$mail_to[3],$headers);
	mysql_query("delete from email where id = $mail_to[0]",$db_con);
}
?>