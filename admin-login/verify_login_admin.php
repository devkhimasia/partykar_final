<?php
function my_session_start()
{
	
      $sn = session_name();
      if (isset($_COOKIE[$sn])) {
          $sessid = $_COOKIE[$sn];
      } else if (isset($_GET[$sn])) {
          $sessid = $_GET[$sn];
      } else {
          return session_start();
      }

     if (!preg_match('/^[a-zA-Z0-9,\-]{22,40}$/', $sessid)) {
         // echo $sessid;
		  return false;
      }
      return session_start();
}

if ( !my_session_start() ) {
    session_id( uniqid() );
    session_start();
    session_regenerate_id();
}

require('db.php');
$id=$_POST['logName'];
$password=$_POST['password'];
$res=mysql_query("select login from admin_login where login='$id' and password='$password'",$db_con);
if (mysql_num_rows($res)>0)
{
	$login=mysql_fetch_row($res);
	$_SESSION['login']=$login[0];
	echo "1";
	
}
else
{
	echo "Incorrect Details..!!";
}

?>