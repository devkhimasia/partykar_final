<?php
session_start();
if(isset($_SESSION['login']))
{
require ("db.php");
if(!isset($_GET['alpha']) and !isset($_GET['search']))
{
	$res=mysql_query ("select v.company,c.category,c.area,c.date_added,v.id from vendor v,vendor_category c where v.id=c.vendor_id and activate='yes' and c.membership_type='free' order by company",$db_con);
}
else
{
	if(!isset($_GET['search']))
	{
		$alpha=$_GET['alpha'];
		$res=mysql_query ("select v.company,c.category,c.area,c.date_added,v.id from vendor v,vendor_category c where v.id=c.vendor_id and activate='yes' and c.membership_type='free' and v.company like '$alpha%' order by company",$db_con);
	}
	else
	{
		$search=$_GET['search'];
		$res=mysql_query ("select v.company,c.category,c.area,c.date_added,v.id from vendor v,vendor_category c where v.id=c.vendor_id and activate='yes' and c.membership_type='free' and v.company like '%$search%' order by company",$db_con);
	}

}
}
else
{
	header('Location:index.php');
}
?><!DOCTYPE HTML>
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

<link rel="stylesheet" href="css/Selectyze.jquery.css" type="text/css" />
<script type="text/javascript" src="js/Selectyze.jquery.js"></script>
<script type="text/javascript" src="js/Selectyze.jquery_small.js"></script>
<script>
function filter_month()
{
	var mon=document.getElementById('fil_month').value;
	window.location='free_clients.php?month='+mon;
}
function filter_year()
{
	var year=document.getElementById('fil_year').value;
	window.location='free_clients.php?year='+year;
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
		window.location="free_clients.php";
	}
	else
	{
	window.location="free_clients.php?alpha="+alpha;
	}
}
function search1()
{
	var name=document.getElementById('search').value;
	window.location="free_clients.php?search="+name;
	
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
    <a href="add_mod.php" target="_self">ADD MODULE</a> 
    <a href="free_clients.php" target="_self"  class="active">FREE CLIENTS</a>
     <a href="ads.php" target="_self">ADS</a>  
     <a href="emp.php" target="_self">EMPLOYEES</a>  
      <a href="reviews.php" target="_self">REVIEWS</a>  
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
<div class="gridFull">

	<div class="filterA">
    <button type="button" class="alphabateBox" onClick="filter('none')" <?php if(!isset($_GET['alpha'])){ echo "id='active'"; } ?> >123</button>
    <button type="button" class="alphabateBox" onClick="filter('a')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "a"){	echo "id='active'";	} } ?>>A</button>
    <button type="button" class="alphabateBox" onClick="filter('b')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "b"){	echo "id='active'";	} } ?>>B</button>
    <button type="button" class="alphabateBox" onClick="filter('c')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "c"){	echo "id='active'";	} } ?>>C</button>
    <button type="button" class="alphabateBox" onClick="filter('d')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "d"){	echo "id='active'";	} } ?>>D</button>
    <button type="button" class="alphabateBox" onClick="filter('e')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "e"){	echo "id='active'";	} } ?>>E</button>
    <button type="button" class="alphabateBox" onClick="filter('f')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "f"){	echo "id='active'";	} } ?>>F</button>
    <button type="button" class="alphabateBox" onClick="filter('g')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "g"){	echo "id='active'";	} } ?>>G</button>
    <button type="button" class="alphabateBox" onClick="filter('h')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "h"){	echo "id='active'";	} } ?>>H</button>
    <button type="button" class="alphabateBox" onClick="filter('i')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "i"){	echo "id='active'";	} } ?>>I</button>
    <button type="button" class="alphabateBox" onClick="filter('j')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "j"){	echo "id='active'";	} } ?>>J</button>
    <button type="button" class="alphabateBox" onClick="filter('k')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "k"){	echo "id='active'";	} } ?>>K</button>
    <button type="button" class="alphabateBox" onClick="filter('l')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "l"){	echo "id='active'";	} } ?>>L</button>
    <button type="button" class="alphabateBox" onClick="filter('m')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "m"){	echo "id='active'";	} } ?>>M</button>
    <button type="button" class="alphabateBox" onClick="filter('n')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "n"){	echo "id='active'";	} } ?>>N</button>
    <button type="button" class="alphabateBox" onClick="filter('o')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "o"){	echo "id='active'";	} } ?>>O</button>
    <button type="button" class="alphabateBox" onClick="filter('p')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "p"){	echo "id='active'";	} } ?>>P</button>
    <button type="button" class="alphabateBox" onClick="filter('q')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "q"){	echo "id='active'";	} } ?>>Q</button>
    <button type="button" class="alphabateBox" onClick="filter('r')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "r"){	echo "id='active'";	} } ?>>R</button>
    <button type="button" class="alphabateBox" onClick="filter('s')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "s"){	echo "id='active'";	} } ?>>S</button>
    <button type="button" class="alphabateBox" onClick="filter('t')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "t"){	echo "id='active'";	} } ?>>T</button>
    <button type="button" class="alphabateBox" onClick="filter('u')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "u"){	echo "id='active'";	} } ?>>U</button>
    <button type="button" class="alphabateBox" onClick="filter('v')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "v"){	echo "id='active'";	} } ?>>V</button>
    <button type="button" class="alphabateBox" onClick="filter('w')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "w"){	echo "id='active'";	} } ?>>W</button>
    <button type="button" class="alphabateBox" onClick="filter('x')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "x"){	echo "id='active'";	} } ?>>X</button>
    <button type="button" class="alphabateBox" onClick="filter('y')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "y"){	echo "id='active'";	} } ?>>Y</button>
    <button type="button" class="alphabateBox" onClick="filter('z')" <?php if(isset($_GET['alpha'])){ if($_GET['alpha'] == "z"){	echo "id='active'";	} } ?>>Z</button>
      </div>
	<div class="mdy_filter"><br>
	</div>   
</div>
<div class="gridFull">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab_full" id="main_tab">
  <tr>
    <td class="w16 tdBlock mainHeading">Company Name&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w16 tdBlock mainHeading">Category&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w12 tdBlock mainHeading">Area&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w12 tdBlock mainHeading">Date&nbsp;<img src="images/down-arrow.png" /></td>
    
  </tr>
 
 <?php
 while ($row=mysql_fetch_row($res))
 {
	 echo " <tr>
    <td class='w16 tdBlock vinfotab'><a class='block1 fancybox.iframe'  href='popup_data.php?id=$row[4]'>$row[0]</a></td>
    <td class='w16 tdBlock vinfotab'>$row[1]</td>
    <td class='w12 tdBlock vinfotab'>$row[2]</td>
    <td class='w12 tdBlock vinfotab'>$row[3]</td>
    
  </tr>
	 ";
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
