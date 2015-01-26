<?php
session_start();
require('db.php');
if(!isset($_SESSION['login']))
{
	header('Location:index.php');
}

?>
<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>	<html lang="en" class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>	<html lang="en" class="ie ie8"> <![endif]-->
<!--[if IE 9 ]>	<html lang="en" class="ie ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Welcome Partykar Admin</title>
<meta http-equiv="X-UA-Compatible" content="chrome=1">


<!-- ==================================== Stylesheet ==================================== -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tahoma">
<link rel="stylesheet" type="text/css" href="css/admin.css">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" href="css/default.css" id="theme_base">
<link rel="stylesheet" href="css/default.date.css" id="theme_date">
<link rel="stylesheet" href="css/Selectyze.jquery.css" type="text/css" />
<script type="text/javascript" src="js/Selectyze.jquery.js"></script>
<script type="text/javascript" src="js/Selectyze.jquery_small.js"></script>
 <script src="js/picker.js"></script>
    <script>
$(document).ready(function(){
 function onsuccess(response,status){
  $("#loader").hide();
	  if(response == 1)
	  {
		  window.location.reload();
		  
	  }else{
	  	window.location.reload();
	  }
 }	
 $("#uploadform").on('submit',function(){
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
<script>


function vendor1()
{
	$("#load1").show();
	var cat=document.getElementById("category").value;
	var ajaxRequest;

	try{
		
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				
				alert("Your browser broke!");
				return false;
			}
		}
	}
	
	
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			//alert(ajaxRequest.responseText);
			$("#load1").hide();
			var ajaxDisplay = document.getElementById('vendor');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			
		}
	}
	
	var queryString = "?cat="+cat;
	ajaxRequest.open("GET","ads_get_vendor.php" + queryString, true);
	ajaxRequest.send(null);
}


</script>
<script src="js/jquery.form.js"></script>
<script>
//$(document).ready(function(){
// function onsuccess(response,status){
//  $("#loader").hide();
//	  if(response == 1)
//	  {
//		  window.location.href='extra.php';
//		  
//	  }else{
//	  	$("#err_msg").html(response);
//	  }
// }	
// $("#save_new_area").on('submit',function(){
//  $("#loader").show();
//  var options={
//   url     : $(this).attr("action"),
//   success : onsuccess
//  };
//  $(this).ajaxSubmit(options);
// return false;
// });
//});
</script>
</head>

<body>

<!-----------Header Start ---------------------------------------------->
<div class="header">
  <div class="topHeader">
    <div id="partykar_logo"><img src="images/partyKar-logo.png" alt="Partykar.com" /></div>
    <div class="topLogin">
    <a href="#" title="Admin Login"><img src="images/admin.png" alt="Admin Login" />&nbsp;&nbsp;&nbsp;&nbsp;
    Welcome Admin&nbsp;&nbsp;|&nbsp;</a>
    <a href="index.php?logout=ok" title="Logout"><img src="images/logout.png" alt="Logout" /></a>    
    </div>    
  </div>
</div>
<!-----------Header End ---------------------------------------------->

<!-----------Main Page Start ---------------------------------------------->
<div class="margin_80"></div>

<div class="mainWrap">
<div class="mainH_strip gradientGray boxShadow">
	<div class="admin_menu">
    <a href="ads.php" target="_self" class="active">ADD ADS</a> 
    <a href="view_ads.php" target="_self">VIEW ADS</a>
       <a href="expiring_ads.php" target="_self">EXPIRING ADS</a>
     <a href="all_vendors.php" target="_self">MAIN PANEL</a> 
    </div>
    
   
<div class="clr20"></div>


	
<div class="gridFull">
<center>
  <form action="upload1.php" method="POST" id="uploadform">
Category: <select id="category" class="selectBoxMain" name="category" onChange="vendor1()">
<option>Select Category</option>
<?php
$data=mysql_query("select distinct category from category",$db_con);
while($row=mysql_fetch_row($data))
{
	echo "<option value='$row[0]'>$row[0]</option>";
}
?>
</select><br><br>
<div id="load1" style="display:none;">
               <center><img src="images/ajax-loader1.gif" /></center>
              </div>
Vendor: <select name="vendor" id="vendor" class="selectBoxMain"><option>Select Vendor</option></select><br><br>

Position: <select name="position" id="position" class="selectBoxMain">
<option>Select Position</option>
<option value="top">Top</option>
<option value="right_1">Right_1</option>
<option value="right_2">Right_2</option>
<option value="right_3">Right_3</option>
<option value="right_4">Right_4</option>
</select><br><br>
Select Expiry Date: <input class='fieldset__input js__datepicker' name="date" type='text' id='date' style='width:100px; padding:5px 10px;'><br><br>
<script src="js/picker.date.js"></script>
    <script src="js/picker.time.js"></script>
    <script src="js/legacy.js"></script>
    <script src="js/main.js"></script>
  
              <input type="file" name="file"/><br><br>
             
              <input type="submit" value="ADD" class="sBtn radius5" />

</form>

</center>
</div>
<div id="get_file"></div>
<div style="clear:both;"></div>
</div></div>

</body>
</html>
