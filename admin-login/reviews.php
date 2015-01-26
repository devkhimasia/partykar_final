<?php
session_start();
if(isset($_SESSION['login']))
{
require ("db.php");
if(!isset($_GET['search']) )
{
	$res=mysql_query ("select * from reviews order by date_review DESC",$db_con);
}
else
{
	if (isset($_GET['search']))
	{
	$search=$_GET['search'];
	$res=mysql_query ("select * from reviews where review like '%$search%' or name like '%$search%' or email like '%$search%' order by date_review DESC",$db_con);
	}
	
}
}
else
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
<script src="js/jquery-ui.js"></script> 
<link rel=stylesheet href="css/autoClass.css"></link>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />

<link rel="stylesheet" href="css/Selectyze.jquery.css" type="text/css" />
<script type="text/javascript" src="js/Selectyze.jquery.js"></script>
<script type="text/javascript" src="js/Selectyze.jquery_small.js"></script>
<script>
function filter_month()
{
	var mon=document.getElementById('fil_month').value;
	window.location='all_vendors.php?month='+mon;
}
function filter_cat()
{
	var mon=document.getElementById('fil_cat').value;
	window.location='all_vendors.php?cat='+mon;
}
function filter_loc()
{
	var mon=document.getElementById('fil_loc').value;
	window.location='all_vendors.php?loc='+mon;
}
function filter_year()
{
	var year=document.getElementById('fil_year').value;
	window.location='all_vendors.php?year='+year;
}
function filter_ab()
{
	var ab=document.getElementById('fil_ab').value;
	window.location='all_vendors.php?ab='+ab;
}
function unverify(id)
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
			//window.location.href="../expand1.php?id="+ajaxRequest.responseText;
			window.location.reload()
			//window.open('../expand1.php?id='+ajaxRequest.responseText,'_blank');
		}
	}
	
	var queryString = "?id="+id+"&unverify=yes";
	//alert(queryString);
	ajaxRequest.open("GET","verify_vendor.php" + queryString, true);
	ajaxRequest.send(null);
}

</script>
<script>
function exp()
{

  var table= document.getElementById("main_tab");
  var html = table.outerHTML;

  //add more symbols if needed...
  while (html.indexOf('á') != -1) html = html.replace('á', '&aacute;');
  while (html.indexOf('é') != -1) html = html.replace('é', '&eacute;');
  while (html.indexOf('í') != -1) html = html.replace('í', '&iacute;');
  while (html.indexOf('ó') != -1) html = html.replace('ó', '&oacute;');
  while (html.indexOf('ú') != -1) html = html.replace('ú', '&uacute;');
  while (html.indexOf('º') != -1) html = html.replace('º', '&ordm;');

  window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));

}


$(document).ready(function() {
	$(".block1").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

function filter(alpha)
{
	var alpha=alpha;
	if(alpha=='none')
	{
		window.location="all_vendors.php";
	}
	else
	{
	window.location="all_vendors.php?alpha="+alpha;
	}
}
function search1()
{
	var name=document.getElementById('search').value;
	window.location="all_vendors.php?search="+name;
	
}
function verify(id)
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
			//window.location.href="../expand1.php?id="+ajaxRequest.responseText;
			window.location.reload()
			//window.open('../expand1.php?id='+ajaxRequest.responseText,'_blank');
		}
	}
	
	var queryString = "?id="+id;
	//alert(queryString);
	ajaxRequest.open("GET","verify_vendor.php" + queryString, true);
	ajaxRequest.send(null);
}

function delete_company(id)
{
	var cmt = confirm('Are you Sure?');
	if (cmt == true) {
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
	
	var queryString = "?id="+id;
	//alert(queryString);
	ajaxRequest.open("GET","delete_review.php" + queryString, true);
	ajaxRequest.send(null);
	}
	else
	{
		return false;
	}
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
	<div class="admin_menu">
        <a href="extra.php" target="_self" >ADD AREA</a>
    <a href="add_sub.php" target="_self">ADD SUB-AREA</a> 
     <a href="add_city.php" target="_self">ADD CITY</a> 
    <a href="add_zone.php" target="_self">ADD ZONE</a> 
    <a href="add_cat.php" target="_self">ADD CATEGORY</a> 
    <a href="add_mod.php" target="_self">ADD MODULE</a> 
    <a href="free_clients.php" target="_self">FREE CLIENTS</a>
     <a href="ads.php" target="_self">ADS</a>  
     <a href="emp.php" target="_self">EMPLOYEES</a>  
      <a href="reviews.php" target="_self" class="active">REVIEWS</a>  
     <a href="all_vendors.php" target="_self">MAIN PANEL</a> 
    </div>
    
    <div class="searchBox gradientGray boxShadow radius10">
    	<form>
        	<input name="search" type="text" class="searchInput radius10" id="search">
            <input type="button" class="search" onClick="search1()">
        </form>
    </div>
    <div class="exportBlock"><label style="cursor:pointer;" onClick="exp()">Export to XLS&nbsp;&nbsp;<img src="images/xls.png" /></label></div>
</div>
<div class="clr20"></div>
<div class="gridFull2 align_right">
  <div style="clear:both;"></div>
</div>
<div class="gridFull">

	
    
       
    </div>   
</div>
<div class="gridFull">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab_full" id="main_tab">
  <tr>
    <td class="w15 tdBlock mainHeading">Company Name&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w15 tdBlock mainHeading">Name&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w15 tdBlock mainHeading">Email Id&nbsp;<img src="images/down-arrow.png" /></td>
     <td class="w55 tdBlock mainHeading">Review&nbsp;<img src="images/down-arrow.png" /></td>
  
     <?php
	if($_SESSION['login']=='swapna')
	{
		?>
       <td class="w4 tdBlock mainHeading">Delete&nbsp;<img src="images/down-arrow.png" /></td>
  <?php } ?>
  </tr>
 
 <?php
 while ($row=mysql_fetch_row($res))
 {
	 $result=mysql_query("select a.company from vendor a,vendor_category b where a.id=b.vendor_id and b.id=$row[1]",$db_con);
	 $ans=mysql_fetch_row($result);
	 echo " <tr>
    <td class='w15 tdBlock vinfotab'>$ans[0]</td>
	<td class='w15 tdBlock vinfotab'>$row[2]</td>
	<td class='w15 tdBlock vinfotab'>$row[3]</td>
	<td class='w55 tdBlock vinfotab'>$row[4]</td>
   
   ";
	
	if($_SESSION['login']=='swapna')
	{
	echo "
	<td class='w4 tdBlock vinfotab'><img src='images/deactive.png' title='Delete Re	view' onClick='delete_company($row[0])' style='cursor:pointer;'></td>
  </tr>
	 ";
	}
 }
 ?>
</table>

</div>
<div style="clear:both;"></div>
</div>
<!-- Popup ------------------------------------------------------------>
<div id="inline1" class="popUp" style="display:none" >
	<table width="768" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="tab120 orange">Company Name</td>
        <td class="tab174 black">XYZ Tattoo Parlor</td>
        <td class="tab100">&nbsp;</td>
        <td class="tab120 orange">Name</td>
        <td class="tab174 black">Venkat Iyer</td>
      </tr>
      <tr>
        <td class="tab120 orange">Mobile No</td>
        <td class="tab174 black">9833667933</td>
        <td class="tab100">&nbsp;</td>
        <td class="tab120 orange">Name</td>
        <td class="tab174 black">venkat@gmail.com</td>
      </tr>
      <tr>
        <td class="tab120 orange">Telephone</td>
        <td class="tab174 black">0222840934</td>
        <td class="tab100">&nbsp;</td>
        <td class="tab120 orange">Email id</td>
        <td class="tab174 black">Maharashtra</td>
      </tr>
      <tr>
        <td class="tab120 orange">City</td>
        <td class="tab174 black">Mumbai</td>
        <td class="tab100">&nbsp;</td>
        <td class="tab120 orange">State</td>
        <td class="tab174 black">Goregaon</td>
      </tr>
      <tr>
        <td class="tab120 orange">Category</td>
        <td class="tab174 black">Wedding Planning</td>
        <td class="tab100">&nbsp;</td>
        <td class="tab120 orange">Location</td>
        <td class="tab174 black">Andheri West</td>
      </tr>
    </table>
</div>
</body>
</html>
