<?php
session_start();
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
<script src="js/jquery-ui.js"></script> 
<link rel=stylesheet href="css/autoClass.css"></link>


<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />

<link rel="stylesheet" href="css/Selectyze.jquery.css" type="text/css" />
<script type="text/javascript" src="js/Selectyze.jquery.js"></script>
<script type="text/javascript" src="js/Selectyze.jquery_small.js"></script>

<script src="js/jquery.form.js"></script>
<script>
$(document).ready(function(){
 function onsuccess(response,status){
  $("#loader").hide();
	  if(response == 1)
	  {
		  window.location.href='extra.php';
		  
	  }else{
	  	$("#err_msg").html(response);
	  }
 }	
 $("#save_new_mod").on('submit',function(){
  $("#loader").show();
  var options={
   url     : $(this).attr("action"),
   success : onsuccess
  };
  $(this).ajaxSubmit(options);
 return false;
 });
});

function mod()
{
	
	var area=document.getElementById("mod_edit").value;
	window.location="add_mod.php?mod="+area;
}
function edit_mod(id)
{
	var id=id;
	var area=document.getElementById("rate_edit").value;
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
	
	var queryString = "?id="+id+"&mod="+area;
	//alert(queryString);
	ajaxRequest.open("GET","edit_mod.php" + queryString, true);
	ajaxRequest.send(null);
}
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
    <a href="add_zone.php" target="_self" >ADD ZONE</a> 
    <a href="add_cat.php" target="_self" >ADD CATEGORY</a> 
    <a href="add_mod.php" target="_self" class="active">ADD MODULE</a> 
    <a href="free_clients.php" target="_self">FREE CLIENTS</a>
     <a href="ads.php" target="_self">ADS</a>  
     <a href="emp.php" target="_self">EMPLOYEES</a>  
      <a href="reviews.php" target="_self">REVIEWS</a>  
     <a href="all_vendors.php" target="_self">MAIN PANEL</a>  
    </div>
    
   
<div class="clr20"></div>


	
<div class="gridFull">
<center>
<form id="save_new_mod" action="save_mod.php" method="post">
<table width="300">
<tr>
<td>
Name:
</td>
<td>
<input type="text" name="module" id="module" class="selectBoxMain2">
</td>
</tr>

<tr>
<td width="50">
Type:
</td>
<td width="250">
<select class="selectBoxMain2" id="type" name="type">
<option value="platinum">Platinum</option>
<option value="gold">Gold</option>
<option value="silver">Silver</option>
</select>

</td>
</tr>
<tr>
<td>
Period:
</td>
<td>
<select class="selectBoxMain2" id="period" name="period">
<option value="3 months">3 months</option>
<option value="6 months">6 months</option>
<option value="12 months">12 months</option>
</select></td>
</tr>
<tr>
<td>
Rate:
</td>
<td>
<input type="text" id="rate" name="rate" class="selectBoxMain2">
</td>
</tr>
<tr>
<td colspan="2">
<center><input type="submit" value="ADD" class="sBtn radius5"></center>
</td>
</tr>
</table>
</form>
<div id="loader" style="display:none;">
               <center><img src="images/ajax-loader.gif" /></center>
              </div>
              <div>
                 <div id="onsuccessmsg"></div>
              </div><div id="err_msg"></div>
</center>
</div>

  Module: <input type="text" name="area" id="mod_edit" value="<?php if(isset($_GET['mod'])) echo $_GET['mod']; ?>" class="modAuto selectBoxMain1">
<button onClick="mod()">Search</button>
 <script>
	$(function() {
var availableTags = [
<?php 
require('db.php');
$area=mysql_query("select distinct module from rates",$db_con);
while($row2=mysql_fetch_row($area))
{
	echo '"'.$row2[0].'",';
}
?>
];
$( ".modAuto" ).autocomplete({
source: function(request, response) {
        var results = $.ui.autocomplete.filter(availableTags, request.term);

        response(results.slice(0, 10));
    }
});
});


	</script> 
    <div class="gridFull">
    <?php
  if(isset($_GET['mod']))
  {
	  ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab_full" id="main_tab">
  <tr>
    <td class="w25 tdBlock mainHeading">Module&nbsp;<img src="images/down-arrow.png" /></td>
     <td class="w25 tdBlock mainHeading">Type&nbsp;<img src="images/down-arrow.png" /></td>
  	 <td class="w25 tdBlock mainHeading">Period&nbsp;<img src="images/down-arrow.png" /></td>
  	 <td class="w25 tdBlock mainHeading">Rate&nbsp;<img src="images/down-arrow.png" /></td>
  </tr>
  <?php
 
	  $mod=$_GET['mod'];
  $res=mysql_query("select * from rates where module like '%$mod%'",$db_con);
 while ($row=mysql_fetch_row($res))
 {
	 echo " <tr>
    
   
	<td class='w25 tdBlock vinfotab'>$row[1]</td>
	<td class='w25 tdBlock vinfotab'>$row[2]</td>
	<td class='w25 tdBlock vinfotab'>$row[3]</td>
	<td class='w20 tdBlock vinfotab'><input type='text' value='$row[4]' id='rate_edit'></td>
	<td class='w5' tdBlock vinfotab'><button onClick='edit_mod($row[5])'>OK</button></td>
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
