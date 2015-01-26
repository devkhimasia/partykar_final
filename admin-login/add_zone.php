<?php
session_start();
require('db.php');
if(!isset($_SESSION['login']))
{
	header('Location:index.php');
}
if(isset($_POST['submit']))
{
	$zone=$_POST['zone'];
	$res=mysql_query("insert into zone(zone) values ('$zone')",$db_con);
	echo "Added";
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
<script src="js/jquery-ui.js"></script> 
<link rel=stylesheet href="css/autoClass.css"></link>
<link rel="stylesheet" href="css/Selectyze.jquery.css" type="text/css" />
<script type="text/javascript" src="js/Selectyze.jquery.js"></script>
<script type="text/javascript" src="js/Selectyze.jquery_small.js"></script>

<script>

function data()
{
	
	var area=document.getElementById("area_edit").value;
	window.location="add_zone.php?zone="+area;
}
function edit(id)
{
	var id=id;
	var zone=document.getElementById("to_edit").value;
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
			//window.location.href="../expand1.php?id="+ajaxRequest.responseText;
			window.location.reload()
			//window.open('../expand1.php?id='+ajaxRequest.responseText,'_blank');
		}
	}
	
	var queryString = "?id="+id+"&zone="+zone;
	//alert(queryString);
	ajaxRequest.open("GET","edit_zone.php" + queryString, true);
	ajaxRequest.send(null);
}
window.onload=function()
{
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
			//var ajaxDisplay = document.getElementById('city');
			//ajaxDisplay.innerHTML = ajaxRequest.responseText;
			
		}
	}
	
	var queryString = "";
	ajaxRequest.open("GET","get_city.php" + queryString, true);
	ajaxRequest.send(null);
}


</script>
<script src="js/jquery.form.js"></script>
<script>
$(document).ready(function(){
 function onsuccess(response,status){
  $("#loader").hide();
	  if(response == 1)
	  {
		  window.location.href='add_zone.php';
		  
	  }else{
	  	$("#err_msg").html(response);
	  }
 }	
 $("#save_new_zone").on('submit',function(){
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
	<div class="admin_menu2">
    <a href="extra.php" target="_self">ADD AREA</a>
    <a href="add_sub.php" target="_self">ADD SUB-AREA</a> 
     <a href="add_city.php" target="_self">ADD CITY</a> 
    <a href="add_zone.php" target="_self" class="active">ADD ZONE</a> 
    <a href="add_cat.php" target="_self">ADD CATEGORY</a> 
    <a href="add_mod.php" target="_self">ADD MODULE</a> 
    <a href="free_clients.php" target="_self">FREE CLIENTS</a>
     <a href="ads.php" target="_self">ADS</a>  
     <a href="emp.php" target="_self">EMPLOYEES</a>  
      <a href="reviews.php" target="_self">REVIEWS</a>  
     <a href="all_vendors.php" target="_self">MAIN PANEL</a> 
    </div>
    
   
<div class="clr20"></div>


	
<div class="gridFull">
<center>
<form id="save_new_zone"  action="save_zone.php" method="post">
City: <select id="city" class="selectBoxMain" name="city">
<option value="0">Select City</option>
               <?php
				$res=mysql_query("select city from add_city",$db_con);
				while($row=mysql_fetch_row($res))
				{
					echo "<option value='$row[0]'>$row[0]</option>";
				}
				?>
</select><br><br>

Zone: <input type="text" name="zone" id="zone" class="zoneAuto selectBoxMain1"><br><br>
 <script>
	$(function() {
var availableTags = [
<?php 
require('db.php');
$area=mysql_query("select distinct zone from zone",$db_con);
while($row2=mysql_fetch_row($area))
{
	echo '"'.$row2[0].'",';
}
?>
];
$( ".zoneAuto" ).autocomplete({
source: function(request, response) {
        var results = $.ui.autocomplete.filter(availableTags, request.term);

        response(results.slice(0, 10));
    }
});
});


	</script> 
<input type="submit" value="ADD" class="sBtn radius5" name="submit" id="submit">

</form>
<div id="loader" style="display:none;">
               <center><img src="images/ajax-loader.gif" /></center>
              </div>
              <div>
                 <div id="onsuccessmsg"></div>
              </div><div id="err_msg"></div>
</center>
</div>
Zone: <input type="text" name="area" id="area_edit" value="<?php if(isset($_GET['zone'])) echo $_GET['zone']; ?>" class="areaAuto selectBoxMain1"><br><br>
<button onClick="data()">Search</button>
 <script>
	$(function() {
var availableTags = [
<?php 

$area=mysql_query("select distinct zone from zone",$db_con);
while($row2=mysql_fetch_row($area))
{
	echo '"'.$row2[0].'",';
}
?>
];
$( ".areaAuto" ).autocomplete({
source: function(request, response) {
        var results = $.ui.autocomplete.filter(availableTags, request.term);

        response(results.slice(0, 10));
    }
});
});


	</script> 
    <div class="gridFull">
<table width="50%" border="0" cellspacing="0" cellpadding="0" class="tab_full" id="main_tab">
  <tr>
    <td class="w25 tdBlock mainHeading">City&nbsp;<img src="images/down-arrow.png" /></td>
   <td class="w25 tdBlock mainHeading">Zone&nbsp;<img src="images/down-arrow.png" /></td>
   
  </tr>
  <?php
  if(isset($_GET['zone']))
  {
	  $zone=$_GET['zone'];
  $res=mysql_query("select * from zone where zone like '%$zone%'",$db_con);
 while ($row=mysql_fetch_row($res))
 {
	 echo " <tr>
    <td class='w20 tdBlock vinfotab'>$row[1]</td>
    
	<td class='w25 tdBlock vinfotab'><input type='text' value='$row[2]' id='to_edit'></td>
	<td class='w5' tdBlock vinfotab'><button onClick='edit($row[0])'>OK</button></td>
	</tr>";
 }
  }
 ?>
  </table></div>
<div style="clear:both;"></div>
</div></div>
<!-- Popup ------------------------------------------------------------>

</body>
</html>
