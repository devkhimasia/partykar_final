<?php
session_start();
require ("db.php");
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
<title>PartyKar.com</title>
<meta http-equiv="X-UA-Compatible" content="chrome=1">

<!-- ==================================== Stylesheet ==================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tahoma">

<!-- ==================================== fancebox ==================================== -->
<script src="js/jquery.form.js"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" href="css/Selectyze.jquery.css" type="text/css" />
<link rel="stylesheet" href="css/highslide.css" type="text/css" />
<script type="text/javascript" src="jquery/Selectyze.jquery.js"></script>
 <script type="text/javascript" src="js/highslide-with-gallery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


<!-- include Cycle plugin -->
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.Add728x90').cycle({
		fx: 'fade',
		timeout: 10000 
	});
	$('.adSpace180_120').cycle({
		fx: 'fade',
		timeout: 8000 
	});
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	$('.fancybox').fancybox();
});
</script>
<link rel="stylesheet" href="css/ion.rangeSlider.css" />
<link rel="stylesheet" href="css/ion.rangeSlider.skinNice.css" />
<script src="js/ion.rangeSlider.min.js"></script>
<script>
    $(document).ready(function(){

        $("#range_1").ionRangeSlider({
            min: 0,
            max: 1000000,
            from: 50000,
            to: 300000,
            type: 'double',
            step: 1,
            prefix: "R. ",
            prettify: true,
            hasGrid: false
        });
	
    });
</script>
<script>
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
			var ajaxDisplay = document.getElementById('catsearch');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			var myText = <?php echo $_SESSION['search_cat']; ?>;
			alert(myText);
var val = $("#catsearch option").filter( function(){
  return ($(this).text() === myText || $(this).val() === myText );
});

$("#catsearch").val(val.val());
			
		}
	}
	
	var queryString = "";
	ajaxRequest.open("GET","catbox.php" + queryString, true);
	ajaxRequest.send(null);	
}

function city_search()
{
	if(document.getElementById('catsearch').value !='---Select Category---')
	{
		$("#loader1").show();
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
			$("#loader1").hide();
			var ajaxDisplay = document.getElementById('citysearch');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			
		}
	}
	
	var queryString = "";
	ajaxRequest.open("GET","get_city_upgrade.php" + queryString, true);
	ajaxRequest.send(null);
	}
}

function area_search()
{
	$("#loader2").show();
	var city=document.getElementById("citysearch").value;
	//var city = str.options[str.selectedIndex].text;
	//alert(city);
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
			$("#loader2").hide();
			var ajaxDisplay = document.getElementById('areasearch');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			
		}
	}
	
	var queryString = "?city="+city;
	ajaxRequest.open("GET","refresh.php" + queryString, true);
	ajaxRequest.send(null);
}

function change_data()
{
	var cat=document.getElementById('catsearch').value;
	var c=document.getElementById('citysearch').value;
	var a=document.getElementById('areasearch').value;
	$("#loader3").show();
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
			window.location.reload();
			
		}
	}
	
	var queryString = "?cat="+cat+"&c="+c+"&a="+a;
	ajaxRequest.open("GET","set_search_session.php" + queryString, true);
	ajaxRequest.send(null);
}

function getVal()
{
	$("#load1").show();
	var city=document.getElementById("citybox").value;
	//var city = str.options[str.selectedIndex].text;
	//alert(city);
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
			var ajaxDisplay = document.getElementById('areabox');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			
		}
	}
	
	var queryString = "?city="+city;
	ajaxRequest.open("GET","refresh.php" + queryString, true);
	ajaxRequest.send(null);
}

function getCat()
{
	$("#load2").show();
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
			$("#load2").hide();
			var ajaxDisplay = document.getElementById('category');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			
		}
	}
	
	var queryString = "";
	ajaxRequest.open("GET","catbox.php" + queryString, true);
	ajaxRequest.send(null);
}
function openWin(image, w, h){
var wh='width='+w+',height='+h
var tmpPage=window.open('','',wh)
tmpPage.document.write('<body style="margin:0;padding:0;"><img src="'+image+'" width="'+w+'" height="'+h+'">')
tmpPage.document.close()
}

function send()
{
	if(document.getElementById("citybox").value=='--City--' || document.getElementById("areabox").value=='--Area--' || document.getElementById("category").value=='--Category--' || document.getElementById("category").value=='---Select Category---' || document.getElementById("areabox").value=='---Select Area---' || document.getElementById("name").value=='' || document.getElementById("mobile").value=='' || document.getElementById("email").value=='')
	{
		alert("Please select all the values");
	}
	else
	{
	var r=confirm("You might receive calls from our vendors..!");
	if (r==true)
  {
	 var n=document.getElementById("name").value;
	 var c=document.getElementById("citybox").value;
	 var a=document.getElementById("areabox").value;
	 var cat=document.getElementById("category").value;
	 var m=document.getElementById("mobile").value;
	 var e=document.getElementById("email").value;
	 var b=document.getElementById("budget").value;
	 $("#load3").show();
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
			$("#load3").hide();
			var ajaxDisplay = document.getElementById('msg');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			 document.getElementById("name").value="";
			 document.getElementById("citybox").value="";
			 document.getElementById("areabox").value="";
			 document.getElementById("category").value="";
			 document.getElementById("mobile").value="";
			 document.getElementById("email").value="";
			 document.getElementById("budget").value="";
			
		}
	}
	
	var queryString = "?n="+n+"&c="+c+"&a="+a+"&cat="+cat+"&m="+m+"&e="+e+"&b="+b;
	ajaxRequest.open("GET","save_lead.php" + queryString, true);
	ajaxRequest.send(null);
	
  }
	}
}

function expand(id)
{
	var id=id;
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
			var ajaxDisplay = document.getElementById('main_data');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			 	
		}
	}
	
	var queryString = "?id="+id;
	ajaxRequest.open("GET","expand.php" + queryString, true);
	ajaxRequest.send(null);
}
</script>
</head>
<body>
<!-------------+++++++++++============ Header Start ============+++++++++++------------->
<div class="header">
  <div class="topHeader">
    <div id="partykar_logo"><a href="index.php" target="_self" title="Partykar.com"><img src="images/partyKar-logo.png" alt="Partykar.com" /></a></div>
    <div class="topLogin"><a class="fancybox" href="#inline1">Sign In</a></div>
    <div id="topMenu">
      <ul>
        <li><a href="index.php" target="_self" title="Partykar.com">Home</a></li>
        <li><a href="aboutUs.php" target="_self" title="About Partykar">About us</a></li>
        <li><a href="how_to_use.php" target="_self" title="Partykar.com">How To Use</a></li>
        <li><a href="categories.php" target="_self" title="Partykar.com">Categories</a></li>
        <li><a href="contact.php" target="_self" title="Partykar.com">Contact Us</a></li>
      </ul>
    </div>
  </div>
</div>
<!-------------+++++++++++============ Header End ============+++++++++++-------------> 

<!-------------+++++++++++============ Body Page ============+++++++++++------------->
<div class="Add728x90">
<?php
$c1=$_SESSION['search_cat'];
$res1=mysql_query("select path from ads where category='$c1' and position='top' and end_date > CURDATE()",$db_con);
if(mysql_num_rows($res1)>0)
{
while ($row1=mysql_fetch_row($res1))
{
	echo "<img src='admin-login/$row1[0]'/>";
}
}
else
{
	echo "<img src='images/main_banner.jpg'/>";
}
?>
</div>
<div class="mainWrap2">
  <div class="pagePath"></div>
  
  <!-- +++++++++++ Filter +++++++++++ -->
  <div class="filterSearch">
    <div class="filterBlock">
      <form action="" method="get">
        <select name="" class="selectBoxMain" id="catsearch" onChange="city_search()">
          <option>--Search For--</option>
          
        </select><br><br><div id="loader1" style="display:none;">
               <center><img src="images/ajax-loader1.gif" /></center>
              </div>
        <select name="" class="selectBoxMain" id="citysearch" onChange="area_search()">
         <option> Choose City</option>
         
       </select><br><br><div id="loader2" style="display:none;">
               <center><img src="images/ajax-loader1.gif" /></center>
              </div>
        
         <select name="" class="selectBoxMain" id="areasearch" onChange="change_data()">
         <option>Choose Area</option>
         
        </select>
        
      </form>
    </div>
    <div class="clr"></div>
    <span class="orangeBoxSmall radius10">Enter your Details<br>
    For a relaxed experience</span>
    
    <div class="clr"></div>
    <div class="filterSearchBlock">
      <input name="name" type="text" class="inputTypeSmall" placeholder="Name" id="name">
      <select name="" class="selectBoxMain" id="citybox" onChange="getVal()">
        <option>--City--</option>
        <option value="mumbai">Mumbai</option>
        
      </select><br><br><div id="load1" style="display:none;">
               <center><img src="images/ajax-loader1.gif" /></center>
              </div>
      <select name="" class="selectBoxMain" id="areabox" onChange="getCat()">
        <option>--Area--</option>
       
      </select><br><br><div id="load2" style="display:none;">
               <center><img src="images/ajax-loader1.gif" /></center>
      </div>
       <select name="" class="selectBoxMain" id="category">
        <option>--Category--</option>
        
      </select><br><br>
      <input name="Mobile" type="text" class="inputTypeSmall" placeholder="Mobile" id="mobile">
      <input name="Email" type="text" class="inputTypeSmall" placeholder="Email" id="email">
      <input name="Budget" type="text" class="inputTypeSmall2" placeholder="Budget" id="budget">
      <span class="currency">INR</span>
      <div style="position: relative; width:210px; float:left;">
       
      </div>
      <div class="clr20"></div>
      <div align="center">
      <input name="submit" type="submit" class="sBtn radius5" value="Submit" onClick="send()">
      </div>
      <div id="load3" style="display:none;">
               <center><img src="images/ajax-loader1.gif" /></center>
      </div>
      <div id="msg"></div>
    </div>
    <div class="clr"></div>
    <div class="filterCete">
      <div class="ceteHeading">CATEGORIES</div>
      <a href="#">Banquet Halls</a><br>
      <a href="#">Mandap Decorators</a><br>
      <a href="#">Event Organizers</a><br>
      <a href="#">Disk Jockeys</a><br>
      <a href="#">Birthday Party Organisers</a><br>
      <a href="#">Photographers</a> </div>
  </div>
  <?php
  $city=$_SESSION['search_city'];
	$area=$_SESSION['search_area'];
	$cat=$_SESSION['search_cat'];
	?>
  <!-- +++++++++++ Client Info +++++++++++ -->
  <div class="vSearchList">
    <div class="vSerPath gradientGray"><span id="count"></span>&nbsp;Results Found For&nbsp;&nbsp;<img src="images/next-arrow.jpg" class="img" />&nbsp;&nbsp;&nbsp;&nbsp;<span class="headingOrangeSmall3"><?php echo $_SESSION['search_cat']; ?>&nbsp; in &nbsp;<?php echo $_SESSION['search_area']; ?>&nbsp;area</span></div>
    
    <div class="clr"></div>
<div id="loader3" style="display:none;">
               <center><img src="images/ajax-loader1.gif" /></center>
              </div>
    <div id="main_data">
    <?php

$id=$_GET['id'];
$res=mysql_query("select a.company,a.mobile,b.area,b.vendor_id from vendor a,vendor_category b where a.id=b.vendor_id and a.id=$id",$db_con);
while($row=mysql_fetch_row($res))
	{
		$r=mysql_query("select category from vendor_category where vendor_id=$row[3]",$db_con);
		$cats="";
			while($ans=mysql_fetch_row($r))
		{
			$cats.=$ans[0].',';
		}
		$img_logo=mysql_query("select logo,image1,image2,image3,image4 from vendor_uploads where vendor_id=$row[3]",$db_con);
		$logo=mysql_fetch_row($img_logo);
		if($logo[0]=='')
		$logo[0]='images/no_image.jpg';
		if($logo[1]==''){
		$logo[1]='images/no_image.jpg';
		
		}
		if($logo[2]==''){
		$logo[2]='images/no_image.jpg';
		
		}
		if($logo[3]==''){
		$logo[3]='images/no_image.jpg';
		
		}
		if($logo[4]==''){
		$logo[4]='images/no_image.jpg';
		
		}
	?>
    
		<div class='vListBlock'>
     <table width='520' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td class='vInnerLt'><div class='cImg'><img src='<?php echo $logo[0]; ?>' /></div>
          <div class='clr'></div>
         
          <div class='clr'></div></td>
        <td class='vInnerRt'><table width='356' border='0' align='left' cellpadding='0' cellspacing='0'>
            <tr>
              <td class='vTabInfo'><span class='cNameHeading'><?php echo $row[0]; ?></span>
                <table width='120' border='0' align='right' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td class='cTopIcon'><img src='images/varified.png' /></td>
                    <td class='cTopIcon'><img src='images/mailSmall-icon.png'/></td>
                    <td class='cTopIcon'><img src='images/link.png' /></td>
                    <td class='cTopIcon'><img src='images/varifiedSmall.png' /></td>
                  </tr>
                </table>
                <div class='clr5'></div>
                <table width='356' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td class='vIco'><img src='images/phone.jpg' /></td>
                    <td class='vadd'><?php echo $row[1]; ?></td>
                  </tr>
                  <tr>
                    <td class='vIco'><img src='images/address.jpg' width='15' height='15'></td>
                    <td class='vadd'><?php echo $row[2]; ?></td>
                  </tr>
                  
                </table></td>
            </tr>
            <tr>
              <td class='vTabInfo3'><span class='headingOrangeSmall'>Listed In</span><br>
                <p class='bodyTextInner'><?php echo $cats; ?></td>
            </tr>
          </table></td>
      </tr>
      <?php
	  
		  $p=explode("/",$logo[1]);
		  $p1=explode("/",$logo[2]);
		  $p2=explode("/",$logo[3]);
		  $p3=explode("/",$logo[4]);
	  ?>       <tr>
        <td colspan='2' class='vInnerFull'><span class='headingOrangeSmall'>Photos </span><br>
          <div class='gImgBlock'> <a class='fancybox' href='#show_img1'><img src='<?php echo $p[0]; ?>/thumbs/thumb_<?php echo $p[1]; ?>'/></a><a class='fancybox' href='#show_img2'><img src='<?php echo $p1[0]; ?>/thumbs/thumb_<?php echo $p1[1]; ?>'/></a><a class='fancybox' href='#show_img3'><img src='<?php echo $p2[0]; ?>/thumbs/thumb_<?php echo $p2[1]; ?>'/></a><a class='fancybox' href='#show_img4'><img src='<?php echo $p3[0]; ?>/thumbs/thumb_<?php echo $p3[1]; ?>'/> </a></div></td>
      </tr>  </table>
    </div>
		<div id='show_img1' style='display:none;'>
    <center><img src='<?php echo $logo[1]; ?>'></center>
    </div>
	<div id='show_img2' style='display:none;'>
    <center><img src='<?php echo $logo[2]; ?>'></center>
    </div>
	<div id='show_img3' style='display:none;'>
    <center><img src='<?php echo $logo[3]; ?>'></center>
    </div>
	<div id='show_img4' style='display:none;'>
    <center><img src='<?php echo $logo[4]; ?>'></center>
    </div>
	<?php
	}
	?>
 
   
    
   </div>
    <div class="clr"></div>
    <div class="navPageRank"></div>
  </div>
  

  <!-- +++++++++++ Right Side Advertise Space +++++++++++ -->
  <div class="adSpaceRight">
    <div class="adSpace180_120">
    <?php
$c2=$_SESSION['search_cat'];
$res2=mysql_query("select path from ads where category='$c2' and position='right_1' and end_date > CURDATE()",$db_con);
if(mysql_num_rows($res2)>0)
{
while ($row2=mysql_fetch_row($res2))
{
	echo "<img src='admin-login/$row2[0]'/>";
}
}
else
{
	echo "<img src='images/partyKar-logo.png'/>";
}

?>
    </div>
    <div class="adSpace180_120"><?php
$c3=$_SESSION['search_cat'];
$res3=mysql_query("select path from ads where category='$c3' and position='right_2' and end_date > CURDATE()",$db_con);
if(mysql_num_rows($res3)>0)
{
while ($row3=mysql_fetch_row($res3))
{
	echo "<img src='admin-login/$row3[0]'/>";
}
}
else
{
	echo "<img src='images/partyKar-logo.png'/>";
}
?></div>
    <div class="adSpace180_120">
    <?php
$c4=$_SESSION['search_cat'];
$res4=mysql_query("select path from ads where category='$c4' and position='right_3' and end_date > CURDATE()",$db_con);
if(mysql_num_rows($res4)>0)
{
while ($row4=mysql_fetch_row($res4))
{
	echo "<img src='admin-login/$row4[0]'/>";
}
}
else
{
	echo "<img src='images/partyKar-logo.png'/>";
}

?>
    </div>
    <div class="adSpace180_120">
    <?php
$c5=$_SESSION['search_cat'];
$res5=mysql_query("select path from ads where category='$c5' and position='right_4' and end_date > CURDATE()",$db_con);
if(mysql_num_rows($res5)>0)
{
while ($row5=mysql_fetch_row($res5))
{
	echo "<img src='admin-login/$row5[0]'/>";
}
}
else
{
	echo "<img src='images/partyKar-logo.png'/>";
}

?>
    </div>
  </div>
  <div class="clr"></div>
</div>
<!-------------+++++++++++============ Body Page End ============+++++++++++-------------> 

<!-------------+++++++++++============ Footer Start ============+++++++++++------------->
<div class="footer">
  <div class="footerblock">
    <div class="footerLt">
      <div class="popLoc"> <span>POPULAR LOCALITIES</span>
        <ul class="locMenu">
          <li><a href="#">BANDRA (60)</a></li>
          <li><a href="#">DADAR (50)</a></li>
          <li><a href="#">ANDHERI (80)</a></li>
        </ul>
        <span class="viewAll"><a href="#" class="viewAll">View All >></a></span> </div>
      <div class="bPoint">
        <div class="bPointMenu"><a href="what_is_partykar.php" target="_self" title="About Partykar">WHAT IS PARTYKAR ?</a></div>
        <div class="bPointMenu"><a href="benifit.php" target="_self" title="HOW CAN YOU BENEFIT FROM PARTYKAR?">HOW CAN YOU BENEFIT FROM PARTYKAR?</a></div>
        <div class="bPointMenu"><a href="vendor-registration.php" target="_self" title="FREE REGISTRATION FOR VENDOR">FREE REGISTRATION FOR VENDOR</a></div>
        <div class="bPointMenu"><a href="advertise.php" target="_self" title="ADVERTISE WITH US">ADVERTISE WITH US</a></div>
      </div>
      <div class="clr"></div>
    </div>
    <div class="footerRt">
      <div class="bSocial"> <span>FOLLOW US</span> <a href="#" target="_blank" class="social_icon fb" title="Join us on Facebook"></a> <a href="#" target="_blank" class="social_icon twitter" title="Follow us on Twitter"></a> <a href="#" target="_blank" class="social_icon youtube" title="Join us on YouTube"></a> <a href="#" target="_blank" class="social_icon blogger" title="Join us on Blogger"></a> </div>
      <div class="reachUs"> <span>REACH US</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        vendors@partykar.com </div>
    </div>
    <div class="clr20"></div>
    <div class="bMenu">
      <div class="bmenuList"> <a href="index.php" target="_self" title="partykar.com">HOME</a> | <a href="aboutUs.php" target="_self" title="About Partykar">ABOUT US</a> | <a href="careers.php" target="_self" title="Join With Partykar">CAREERS</a> | <a href="sitemap.php" target="_self" title="Site Map">SITE MAP</a> | <a href="contact.php" target="_self" title="Contact Us">CONTACT US</a> | <a href="user_agreement.php" target="_self" title="Contact Us">USER AGREEMENT</a> | <a href="disclaimer.php" target="_self" title="Contact Us">DISCLAIMER</a> | <a href="privacy_policy.php" target="_self" title="Contact Us">PRIVACY POLICY</a> </div>
      <div class="devBy">Designed and Developed by : <a href="http://zeistinteractive.com/" target="_blank" title="Powerd by Zeist Interactive">Zeist Interactive</a></div>
    </div>
  </div>
</div>
<div class="clr"></div>
<!-------------+++++++++++============ Footer End ============+++++++++++-------------> 

<!-------------+++++++++++============ Vendors Sign In ============+++++++++++------------->
<div id="inline1" class="popUp" style="display:none;">
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center"><h2 class="homePopH2">for artists and vendors</h2>
        <h1 class="homePopH1">the Partykar Experience</h1>
        <h2 class="homePopH2">start your Partykar experience now</h2>
        <br>
        <img src="images/pk-line.jpg" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><center>
          <table width="320" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center"><a href="#inline2" class="fancybox signIn radius5 gradientGrayDark">Sign In</a></td>
              <td align="center"><a href="vendor-registration.php" target="_self" class="signIn radius5 gradientOrange">Join Partykar</a></td>
            </tr>
          </table>
        </center></td>
    </tr>
  </table>
</div>
 
<!-------------+++++++++++============ Vendors Sign In or Joining ============+++++++++++------------->
<div id="inline2" class="popUp" style="display:none;">
  <table width="400" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
    <tr>
      <td align="center"><table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="logDet">Username</td>
            <td class="logGap">&nbsp;</td>
            <td class="logInfo"><input name="logName" type="text" class="inputHome"></td>
          </tr>
          <tr>
            <td class="logDet">Password</td>
            <td class="logGap">&nbsp;</td>
            <td class="logInfo"><input name="password" type="password" class="inputHome"></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td align="center"><input name="submit" type="submit" class="sBtn radius5" value="Sign In"></td>
    </tr>
    <tr>
      <td align="center"><span class="logInfo2"><a href="#">Forgot Password</a></span></td>
    </tr>
    <tr>
      <td align="center"><span class="altSignHeading">Alternative Sign In</span><br>
        choose your alternative signup<br>
        <br>
        <img src="images/pk-line.jpg" /></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    <tr>
      <td align="center"><center>
          <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="123" align="center"><a href="#inline3" class="fancybox"><img src="images/login_with_facebook.png" /></a></td>
              <td width="197" align="center"><a href="#"><img src="images/login_with_twitter.png" /></a></td>
            </tr>
          </table>
        </center></td>
    </tr>
  </table>
</div>
<div id="pop1" class="popUp" style="display:none" >
	<p>If you click on accept you might receive calls from our vendors</p><br><br>
    <center><button onClick="send()">Accept</button></center>
</div>
<!-------------+++++++++++============ Thank You ============+++++++++++------------->
<div id="inline3" class="popUp" style="display:none;">
  <table width="400" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
    <tr>
      <td align="center"><span class="altSignHeading">Thank You</span><br>
        a representative should contact you shortly.<br>
        <br>
        <img src="images/pk-line.jpg" /></td>
    </tr>
    <tr>
      <td align="center"><a href="index.php" target="_self" class="sBtn radius5" >Continue</a></td>
    </tr>
  </table>
</div>

</body>
</html>
