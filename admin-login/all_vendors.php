<?php
session_start();
if(isset($_SESSION['login']))
{
require ("db.php");
if(!isset($_GET['alpha']) and !isset($_GET['search']) and !isset($_GET['month']) and !isset($_GET['year']))
{
	$res=mysql_query ("select * from vendor order by date_added DESC",$db_con);
}
else
{
			if(isset($_GET['alpha']))
			{
			$alpha=$_GET['alpha'];
			$res=mysql_query ("select * from vendor where company like '$alpha%' order by date_added DESC",$db_con);
			}
			else if (isset($_GET['search']))
			{
			$search=$_GET['search'];
			$res=mysql_query ("select * from vendor where company like '%$search%' or name like '%$search%' or email like '%$search%' or added_by like '%$search%' order by date_added DESC",$db_con);
			}
			else if (isset($_GET['month']))
			{
			$mon=$_GET['month'];
	$res=mysql_query ("select * from vendor where date_added like '_____".$mon."___' order by date_added DESC",$db_con);
	}
	else if(isset($_GET['year']))
	{
	$year=$_GET['year'];	
	$res=mysql_query ("select * from vendor where date_added like '".$year."______' order by date_added DESC",$db_con);
	}else if(isset($_GET['cat']) || isset($_GET['area']) || isset($_GET['addedby'])){
		
		
		
		
	}
	
	
	/*else if(isset($_GET['cat']))
	{
	$cat=$_GET['cat'];	
	$res=mysql_query ("select * from vendor where category = '".$cat."' order by date_added DESC",$db_con);
	}
	else if(isset($_GET['loc']))
	{
	$loc=$_GET['loc'];	
	$res=mysql_query ("select * from vendor where area = '".$loc."' order by date_added DESC",$db_con);
	}
	else if(isset($_GET['ab']))
	{
	$ab=$_GET['ab'];	
	$res=mysql_query ("select * from vendor where added_by like '".$ab."' order by date_added DESC",$db_con);
	}*/
}


	if(isset($_REQUEST['submit']))
	{
		$cat = $_REQUEST['fil_cat'];
		$area = $_REQUEST['fil_loc'];
		$addedby = $_REQUEST['fil_ab'];
		
		if($cat != "" and $area == "" and $addedby == "")
		{
			$res=mysql_query ("select * from vendor where category = '".$cat."' order by date_added DESC",$db_con);
			
		}else if($cat != "" and $area != "" and $addedby == ""){
			
			$res=mysql_query ("select * from vendor where category = '$cat' and area like '$area%' order by date_added DESC",$db_con);
		
		}else if($cat != "" and $area != "" and $addedby != ""){
		
			$res=mysql_query ("select * from vendor where category = '$cat' and area like '$area%' and added_by = '$addedby' order by date_added DESC",$db_con);
		
		}else if($cat == "" and $area != "" and $addedby == ""){
			
			$res=mysql_query ("select * from vendor where area like '$area%' order by date_added DESC",$db_con);
		
		}else if($cat == "" and $area != "" and $addedby != ""){
		
			$res=mysql_query ("select * from vendor where added_by = '$addedby' and area like '$area%' order by date_added DESC",$db_con);
		
		}else if($cat == "" and $area == "" and $addedby != ""){
			
			$res=mysql_query ("select * from vendor where added_by = '$addedby' order by date_added DESC",$db_con);
		
		}else if($cat != "" and $area == "" and $addedby != ""){
		
			$res=mysql_query ("select * from vendor where category = '$cat' and  added_by ='$addedby' order by date_added DESC",$db_con);
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
		height		: '500',
		autoSize	: false,
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
	ajaxRequest.open("GET","delete_company.php" + queryString, true);
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
    <a href="all_vendors.php" target="_self" class="active">ALL VENDORS</a> 
    <a href="upgrade.php" target="_self">UPGRADES</a> 
    <a href="clients.php" target="_self">CLIENTS</a> 
    <a href="renewals.php" target="_self">RENEWALS</a> 
    <a href="lost_vendors.php" target="_self">LOST VENDORS</a>
     <a href="leads.php" target="_self">LEADS</a>
      <a href="extra.php" target="_self">EXTRAS</a>
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
  <button name="add_vendor" type="button" class="btn1 radius5" value="ADD VENDOR"><a href="register.php" target="_blank">ADD VENDOR</a></button>
  <div style="clear:both;"></div>
</div>
<div style="clear:both"></div>
 <div>
    	
   
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <table border="0" cellspacing="10">
      <tr>
      <td>
        <select name="fil_cat" class="selectyze1" id="fil_cat">
            <option value="">-- Select Category --</option>
           <?php
		   if(isset($_REQUEST['fil_cat']))
		   {
			   $val = "selected";
		   }
		   
		   $cat1=mysql_query("select category from category",$db_con);
		   while($row1=mysql_fetch_row($cat1))
		   {
			    
			   echo "<option value='$row1[0]'>".$row1[0]."</option>";
		   }
		   ?>
        </select>
        </td>
        <td><input class="areaAuto autoBlock" id="fil_loc" name="fil_loc" placeholder="Area" />
        <script>
	$(function() {
var availableTags = [
<?php 
$area=mysql_query("select distinct area from city",$db_con);
while($row2=mysql_fetch_row($area))
{
	echo '"'.$row2[0].'",';
}
?>
];
$( ".areaAuto" ).autocomplete({
source: availableTags
});
});


	</script>   </td>
        <td>  <select name="fil_ab" class="selectyze1" id="fil_ab">
            <option value="">-- Select Added By --</option>
           <?php
		   $cat1=mysql_query("select distinct added_by from vendor",$db_con);
		   while($row1=mysql_fetch_row($cat1))
		   {
			   echo "<option value='$row1[0]'>".$row1[0]."</option>";
		   }
		   ?>
        </select></td>
        <td><input type="submit" name ="submit"  class="btn1" style="margin:0px;" value="OK"></td>
        </tr>
        </table>
      </form>
    </div>
    
 
     
    
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
    <div class="mdy_filter">
    	PLEASE SELECT OPTION (MONTH/QTR/YRLY)<br>
        <form action="" method="get">
        <select name="" class="selectyze1" id="fil_month" onChange="filter_month()">
            <option>-- Select Month --</option>
            <option value = "01">January</option>
            <option value = "02">February</option>
            <option value = "03">March</option>
            <option value = "04">April</option>
            <option value = "05">May</option>
            <option value = "06">June</option>
            <option value = "07">July</option>
            <option value = "08">August</option>
            <option value = "09">September</option>
            <option value = "10">October</option>
            <option value = "11">November</option>
            <option value = "12">December</option> 
        </select>
        </form>
    </div>
    <div class="mdy_filter"><br>
       
        <select name="" class="selectyze1" id="fil_year" onChange="filter_year()">
            <option>-- Select Year --</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
           
        </select>
       
    </div>   
</div>
<div class="gridFull">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab_full" id="main_tab">
  <tr>
    <td class="w16 tdBlock mainHeading">Company Name&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w8 tdBlock mainHeading">Name&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w12 tdBlock mainHeading">Mobile&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w12 tdBlock mainHeading">Email Id&nbsp;<img src="images/down-arrow.png" /></td>
     <td class="w12 tdBlock mainHeading">Telephone&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w12 tdBlock mainHeading">Category&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w12 tdBlock mainHeading">Location&nbsp;<img src="images/down-arrow.png" /></td>
    <td class="w4 tdBlock mainHeading">Leads&nbsp;<img src="images/down-arrow.png" /></td>
     <td class="w4 tdBlock mainHeading">Verify&nbsp;<img src="images/down-arrow.png" /></td>
     <td class="w4 tdBlock mainHeading">Link&nbsp;<img src="images/down-arrow.png" /></td>
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
	 echo " <tr>
    <td class='w16 tdBlock vinfotab'><a class='block1 fancybox.iframe'  href='popup_data.php?id=$row[0]'>$row[1]</a></td>
    <td class='w8 tdBlock vinfotab'>$row[2]</td>
    <td class='w12 tdBlock vinfotab'>$row[7]</td>
    <td class='w12 tdBlock vinfotab'>$row[8]</td>
	 <td class='w12 tdBlock vinfotab'>$row[17]</td>
    <td class='w12 tdBlock vinfotab'>$row[12]</td>
    <td class='w12 tdBlock vinfotab'>$row[4]</td>
	<td class='w4 tdBlock vinfotab'>$row[16]</td>";
	if ($row[14]=='no')
	{
	echo "<td class='w4 tdBlock vinfotab'><img src='images/deactive.png' title='Verify' onClick='verify($row[0])' style='cursor:pointer;'></td>
	<td class='w4 tdBlock vinfotab'>No Link</td>";
	}
	else
	{
	echo "<td class='w4 tdBlock vinfotab' title='Unverify' onClick='unverify($row[0])' style='cursor:pointer;'>Verified</td>
	<td class='w4 tdBlock vinfotab'><a href='../expand1.php?id=$row[0]' target='_blank'>Link</a></td>";
	}
	if($_SESSION['login']=='swapna')
	{
	echo "
	<td class='w4 tdBlock vinfotab'><img src='images/deactive.png' title='Delete Company' onClick='delete_company($row[0])' style='cursor:pointer;'></td>
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
