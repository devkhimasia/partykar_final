<?php  error_reporting(0);  ?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/jquery.form.js"></script>
<script>
$(document).ready(function(){
 function onsuccess(response,status){
  $("#loader").hide();
	  if(response == 1)
	  {
		  window.location.href='all_vendors.php';
		  
	  }else{
	  	$("#err_msg").html(response);
	  }
 }	
 $("#login_form").on('submit',function(){
  $("#loader").show();
  var options={
   url     : $(this).attr("action"),
   success : onsuccess
  };
  $(this).ajaxSubmit(options);
 return false;
 });
});
</script>
</head>

<body>	
<form action="verify_login_admin.php" method="post" id="login_form">
  <table width="400" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="margin-top:200px; margin-left:400px;">
    <tr>
      <td align="center"><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="logDet">Admin ID</td>
            <td class="logGap">&nbsp;</td>
            <td class="logInfo"><input name="logName" type="text" class="inputHome" id="id"></td>
          </tr>
          <tr>
            <td class="logDet">Password</td>
            <td class="logGap">&nbsp;</td>
            <td class="logInfo"><input name="password" type="password" class="inputHome" id="password"></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td align="center"><input name="submit" type="submit" class="sBtn radius5" value="Sign In" ></td>
	
    </tr>
    <tr>
    <td><div id="loader" style="display:none;">
               <center><img src="images/ajax-loader.gif" /></center>
              </div>
              <div>
                 <div id="onsuccessmsg"></div>
              </div><div id="err_msg"></div></td></tr>
    
    
          </table>
        </form>
</body>
</html>