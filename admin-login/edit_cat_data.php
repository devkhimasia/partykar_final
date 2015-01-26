<?php
session_start();
require('db.php');
if(!isset($_SESSION['login']))
{
	header('Location:index.php');
}


$catid = $_REQUEST['id'];

$result = mysql_query("select * from category where id = $catid");

if(mysql_num_rows($result) > 0)
{
	$data = mysql_fetch_array($result);
	
	
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
	  		alert("Data update sucessfully");	
		  window.location.href='add_cat.php';
		  
	  }else{
	  	$("#err_msg").html(response);
	  }
 }	
 $("#save_new_cat").on('submit',function(){
	  $("#loader").show();
	  var options={
	   url     : $(this).attr("action"),
	   success : onsuccess
	  };
	  
	  $(this).ajaxSubmit(options);
	 return false;
	 });
});


function data()
{
	
	var area=document.getElementById("area_edit").value;
	window.location="add_cat.php?cat="+area;
}
function edit(id)
{
	var id=id;
	var cat=document.getElementById("to_edit").value;
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
	
	var queryString = "?id="+id+"&cat="+cat;
	//alert(queryString);
	ajaxRequest.open("GET","edit_cat.php" + queryString, true);
	ajaxRequest.send(null);
}
function mod()
{
	
	var area=document.getElementById("mod_edit").value;
	window.location="add_cat.php?mod="+area;
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
<form id="save_new_cat" action="update_cat.php" method="post">
<table width="400" cellspacing="10">
<tr>
<td width="50">
Category:
</td>
<td width="250">
<input type="hidden" name="catid" id="catid" value="<?php echo $data['id'];?>">
<input type="text" name="cat" id="cat" class="selectBoxMain2" value="<?php echo $data['category'];?>">
</td>
</tr>
<tr>
<td>
Keywords:
</td>
<td>
<textarea name="keys" id="keys" class="selectBoxMain3"><?php echo $data['keywords'];?></textarea>
</td>
</tr>
<tr>
<td>
Module:
</td>
<td>
<select name="module" id="module" class="selectBoxMain2">
<option value="1" <?php if($data['module_id'] == 1){ echo "selected"; }?> >Ustad</option>
<option value="2" <?php if($data['module_id'] == 2){ echo "selected"; }?> >Shandaar</option>
<option value="3" <?php if($data['module_id'] == 3){ echo "selected"; }?> >Kalakar</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<center><input type="submit" value="UPDATE" class="sBtn radius5"></center>
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

<div style="clear:both;"></div>
</div></div>
<!-- Popup ------------------------------------------------------------>

</body>
</html>
