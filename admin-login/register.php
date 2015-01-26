<?php
require('db.php');
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
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tahoma">
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/selectify.css" />
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" href="css/Selectyze.jquery1.css" type="text/css" />
<script type="text/javascript" src="jquery/Selectyze.jquery.js"></script>
<script type="text/javascript" src="http://jaysalvat.github.io/vegas/releases/latest/jquery.vegas.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script src="js/jquery.form.js"></script>
<link rel=stylesheet href="css/autoClass.css">
</link>
<!--<script src="js/jquery-1.9.1.js"></script>-->

<script>
 $(document).ready(function() {
    $("#pin").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
           (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#mobile").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#mobile2").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
          (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#mobile3").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#mobile4").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
           (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#telephone").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
           (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#telephone2").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
          (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#telephone3").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
          (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#telephone4").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
         (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#telephone_code").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
          (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#telephone_code2").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
         (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#telephone_code3").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
          (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
	$("#telephone_code4").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
           (e.keyCode == 86 && e.ctrlKey === true) || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
				//document.getElementById("only_no").style.display='none';
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// document.getElementById("only_no").style.display='block';
            e.preventDefault();
        }
    });
});
 </script>
<script>
window.onload=function catb()
{
	//alert("city");
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
			var ajaxDisplay = document.getElementById('catbox');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			
		}
	}
	
	var queryString = "";
	ajaxRequest.open("GET","catbox.php" + queryString, true);
	ajaxRequest.send(null);
}
</script>
<script>
function store()
{
	
	
	//var check=$('#checkbox').is(':checked');
	//alert("check");
	var company=document.getElementById("company").value;
	//alert(company);
	var name=document.getElementById("name").value;
	//var str1=document.getElementById("selbox");
	var city = document.getElementById("selbox").value;
	//var str=document.getElementById("areabox");
	var area =document.getElementById("areab").value;
	var address=document.getElementById("address").value;
	var pin=document.getElementById("pin").value;
	var mobile=document.getElementById("mobile").value;
	mobile="+91"+mobile;
	var mobile2=document.getElementById("mobile2").value;
	mobile2="+91"+mobile2;
	var mobile3=document.getElementById("mobile3").value;
	mobile3="+91"+mobile3;
	var mobile4=document.getElementById("mobile4").value;
	mobile4="+91"+mobile4;
	//alert(fb);
	//var t_c=document.getElementById("telephone_code").value;
	var tel_code=document.getElementById("telephone_code").value;
	var telephone=document.getElementById("telephone").value;
	telephone="+91"+tel_code+telephone;
	var tel_code2=document.getElementById("telephone_code2").value;
	var telephone2=document.getElementById("telephone2").value;
	telephone2="+91"+tel_code2+telephone2;
	var tel_code3=document.getElementById("telephone_code3").value;
	var telephone3=document.getElementById("telephone3").value;
	telephone3="+91"+tel_code3+telephone3;
	var tel_code4=document.getElementById("telephone_code4").value;
	var telephone4=document.getElementById("telephone4").value;
	telephone4="+91"+tel_code4+telephone4;
	
	//alert(telephone);
	var email=document.getElementById("email").value;
	var website=document.getElementById("website").value;
	
	var password=document.getElementById("password").value;
	var added_by=document.getElementById("added_by").value;
	var str2=document.getElementById("catbox");
	var category = str2.options[str2.selectedIndex].text;
	
		if(company=='')
		{
			alert("Please Enter the Company Name.");
			return false;
		}
		/*else if(address=='')
		{
			alert("Please Enter the Address.");
		}
		else if(pin=='')
		{
			alert("Please Enter the Pin Code.");
		}*/
		else if(added_by=='')
		{
			alert("Please Enter Name of the Employee.");
			return false;
		}
		else if(city=='---Select City---')
		{
			alert("Please Select a City.");
			return false;
		}
		else if(category=='---Select Category---')
		{
			alert("Please Select a Category.");
			return false;
		}
		else if(email!='')
		{
			//alert("Please Select a Category.");
			var x=document.getElementById("email").value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			  {
			  alert("Not a valid e-mail address");
			  document.getElementById("email").value="";
				  return false;
		 	 }
		}else{
			}
			
	 	if($('#checkbox').is(':checked'))
	 	{
		
	 	var chkArray = [];
     
		/* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
		$(".chk:checked").each(function() {
			chkArray.push($(this).val());
		});
     
		/* we join the array separated by the comma */
		var selected;
		selected = chkArray.join(',') + ",";
		 //alert (selected);
		/* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
		if(selected.length > 1){
			var keywords=selected; 
		}else{
			//alert("Please at least one of the checkbox");   
			var keywords="none";
		}
	//alert(company+"--"+name+"--"+city+"--"+area+"--"+mobile+"--"+telephone+"--"+email+"--"+password+"--"+category+"--"+keywords);
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
			window.location.href="all_vendors.php";
			
		}
	}
	
		var queryString = "?a="+company+"&b="+name+"&c="+city+"&d="+area+"&e="+mobile+"&f="+telephone+"&g="+email+"&h="+password+"&i="+category+"&j="+keywords+"&k="+address+"&added_by="+added_by+"&mobile2="+mobile2+"&mobile3="+mobile3+"&mobile4="+mobile4+"&telephone2="+telephone2+"&telephone3="+telephone3+"&telephone4="+telephone4+"&pin="+pin+"&website="+website;
		//alert(queryString);
		ajaxRequest.open("POST","save_vendor.php" + queryString, true);
		ajaxRequest.send(null);
	}
	else
	{
		alert("Please check the Terms and Conditions");
	}
			
			
	
			
		
			

	
}
</script>
<script>
function check()
{
	$("#loader1").show();
	var str1=document.getElementById("catbox");
	var category = str1.options[str1.selectedIndex].text;
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
			var ajaxDisplay = document.getElementById('check');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			
		}
	}
	
	var queryString = "?category="+category;
	ajaxRequest.open("GET","check.php" + queryString, true);
	ajaxRequest.send(null);
}
</script>
<script>
function getVal()
{
	$("#loader").show();
	var str=document.getElementById("selbox");
	var city = str.options[str.selectedIndex].text;
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
			$("#loader").hide();
			var ajaxDisplay = document.getElementById('areabox');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
			
		}
	}
	
	var queryString = "?city="+city;
	ajaxRequest.open("GET","refresh.php" + queryString, true);
	ajaxRequest.send(null);
}
function add_tel(id)
{
	if(id==1)
	$("#hidden_mob_2").show();
	else if(id==2)
	$("#hidden_mob_3").show();
	else if(id==3)
	$("#hidden_mob_4").show();
	
	//document.getElementById("addmore").innerHTML='<img src="images/show_less.png">';
	//document.getElementById("hidden_mob_1").style.display='block';
}
function add_ll(id)
{
	if(id==1)
	$("#hidden_tel_2").show();
	else if(id==2)
	$("#hidden_tel_3").show();
	else if(id==3)
	$("#hidden_tel_4").show();
	
	//document.getElementById("addmore").innerHTML='<img src="images/show_less.png">';
	//document.getElementById("hidden_mob_1").style.display='block';
}
</script>
</head>
<body>
<!-------------+++++++++++============ Header Start ============+++++++++++------------->
<div class="header">
  <div class="topHeader">
    <div id="partykar_logo"><img src="images/partyKar-logo.png" alt="Partykar.com" /></div>
    <div class="topLogin"> <a href="#" title="Admin Login"><img src="images/admin.png" alt="Admin Login" />&nbsp;&nbsp;&nbsp;&nbsp;
      Welcome Admin&nbsp;&nbsp;|&nbsp;</a> <a href="index.php?logout=ok" title="Logout"><img src="images/logout.png" alt="Logout" /></a> </div>
  </div>
</div>
<!-------------+++++++++++============ Header End ============+++++++++++-------------> 
<!-------------+++++++++++============ Body Page ============+++++++++++------------->
<div class="mainWrap">
  <div class="pagePath"></div>
  <div class="vloginForm">
    <div class="vReg gradientGray">Vendor Registration</div>
    <div class="vForm">
      <center>
        <div id="ty">
          <table width="980" border="0" align="left" cellpadding="0" cellspacing="0" >
            <tr>
              <td class="formTitle">Company Name</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input class="comAuto inputType" id="company" />
                <span class="check"></span></td>
            </tr>
            <script>
	$(function() {
var availableTags1 = [
<?php 
$com=mysql_query("select distinct company from vendor",$db_con);
while($row2=mysql_fetch_row($com))
{
	echo '"'.$row2[0].'",';
}
?>
];
$( ".comAuto" ).autocomplete({
source: availableTags1
});
});


	</script>
            <tr>
              <td class="formTitle">Name</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input name="name" type="text" class="inputType" id="name"></td>
            </tr>
            <tr>
              <td class="formTitle">City </td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><select name="Country" class="selectBoxMain1"  onChange="getVal();" id="selbox">
                  <option value="" selected="selected">---Select City---</option>
                  <?php
				$res=mysql_query("select city from add_city",$db_con);
				while($row=mysql_fetch_row($res))
				{
					echo "<option value='$row[0]'>$row[0]</option>";
				}
				?>
                </select></td>
              <td><div id="loader" style="display:none;">
                  <center>
                    <img src="images/ajax-loader1.gif" />
                  </center>
                </div></td>
            </tr>
            <tr>
              <td class="formTitle">Area</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input class="areaAuto autoBlock" id="areab" />
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


	</script></td>
            </tr>
            <tr>
              <td class="formTitle">Address</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><textarea name="address" class="inputType" id="address"></textarea></td>
            </tr>
            <tr>
              <td colspan="3" height="10"></td>
            </tr>
            <tr>
              <td class="formTitle">Pin code</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input name="name" type="text" class="inputType" id="pin" maxlength="6"></td>
            </tr>
            <tr>
              <td class="formTitle">Website</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input name="website" type="text" class="inputType" id="website" maxlength="50"></td>
            </tr>
            <tr>
              <td colspan="3" height="10"></td>
            </tr>
            <tr>
              <td class="formTitle">Mobile</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input type="text" class="inputType2" value="+91" readonly>
                -
                <input name="name" type="text" class="inputType1" id="mobile" >
                <span id="addmore"><img src="images/add_more.png" style="width:20px; height:20px;" title="Add other number " onClick="add_tel(1)"></span></td>
            </tr>
            <tr id="hidden_mob_2" style="display:none;">
              <td class="formTitle">Mobile</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input type="text" class="inputType2" value="+91" readonly>
                -
                <input name="name" type="text" class="inputType1" id="mobile2" maxlength="10">
                <span id="addmore"><img src="images/add_more.png" style="width:20px; height:20px;" title="Add other number " onClick="add_tel(2)"></span></td>
            </tr>
            <tr id="hidden_mob_3" style="display:none;">
              <td class="formTitle">Mobile</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input type="text" class="inputType2" value="+91" readonly>
                -
                <input name="name" type="text" class="inputType1" id="mobile3" maxlength="10">
                <span id="addmore"><img src="images/add_more.png" style="width:20px; height:20px;" title="Add other number " onClick="add_tel(3)"></span></td>
            </tr>
            <tr id="hidden_mob_4" style="display:none;">
              <td class="formTitle">Mobile</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input type="text" class="inputType2" value="+91" readonly>
                -
                <input name="name" type="text" class="inputType1" id="mobile4" maxlength="10"></td>
            </tr>
            <tr>
              <td class="formTitle">Telephone</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input type="text" size="3" class="inputType2" value="+91" readonly>
                -
                <input type="text" id="telephone_code" size="3" class="inputType3" maxlength="4">
                -
                <input name="name" type="text" class="inputType4" id="telephone" maxlength="8">
                <span id="addmore"><img src="images/add_more.png" style="width:20px; height:20px;" title="Add other number " onClick="add_ll(1)"></span></td>
            </tr>
            <tr id="hidden_tel_2" style="display:none;">
              <td class="formTitle">Telephone</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input type="text" size="3" class="inputType2" value="+91" readonly>
                -
                <input type="text" id="telephone_code2" size="3" class="inputType3" maxlength="4">
                -
                <input name="name" type="text" class="inputType4" id="telephone2" maxlength="8">
                <span id="addmore"><img src="images/add_more.png" style="width:20px; height:20px;" title="Add other number " onClick="add_ll(2)"></span></td>
            </tr>
            <tr id="hidden_tel_3" style="display:none;">
              <td class="formTitle">Telephone</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input type="text" size="3" class="inputType2" value="+91" readonly>
                -
                <input type="text" id="telephone_code3" size="3" class="inputType3" maxlength="4">
                -
                <input name="name" type="text" class="inputType4" id="telephone3" maxlength="8">
                <span id="addmore"><img src="images/add_more.png" style="width:20px; height:20px;" title="Add other number " onClick="add_ll(3)"></span></td>
            </tr>
            <tr id="hidden_tel_4" style="display:none;">
              <td class="formTitle">Telephone</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input type="text" size="3" class="inputType2" value="+91" readonly>
                -
                <input type="text" id="telephone_code4" size="3" class="inputType3" maxlength="4">
                -
                <input name="name" type="text" class="inputType4" id="telephone4" maxlength="8"></td>
            </tr>
            <tr>
              <td class="formTitle">Email Id</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input name="name" type="text" class="inputType" id="email"></td>
            </tr>
            <tr>
              <td class="formTitle">Password</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input name="password" type="text" class="inputType" id="password"></td>
            </tr>
            <tr>
              <td class="formTitle">Added By</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><input name="name" type="text" class="inputType" id="added_by"></td>
            </tr>
            <tr>
              <td class="formTitle">Categories</td>
              <td class="fGap">:</td>
              <td class="inputBoxBlock"><select class="selectBoxMain1" id="catbox" onChange="check();" >
                </select></td>
            </tr>
            <tr>
              <td colspan="3"><div class="checkBlock"  id="check">
                  <div id="loader1" style="display:none;">
                    <center>
                      <img src="images/ajax-loader1.gif" />
                    </center>
                  </div>
                  <!--<table width="470" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="check"><input name="" type="checkbox" value="">
                      &nbsp;&nbsp;Wedding</td>
                    <td class="check"><input name="" type="checkbox" value="">
                      &nbsp;&nbsp;Parties</td>
                    <td class="check1"><input name="" type="checkbox" value="">
                      &nbsp;&nbsp;Exhibitions</td>
                  </tr>
                  <tr>
                    <td class="check"><input name="" type="checkbox" value="">
                      &nbsp;&nbsp;Boat / Yatch Party</td>
                    <td class="check"><input name="" type="checkbox" value="">
                      &nbsp;&nbsp;Celebrity Events</td>
                    <td class="check1"><input name="" type="checkbox" value="">
                      &nbsp;&nbsp;School / College Events</td>
                  </tr>
                  <tr>
                    <td class="check"><input name="" type="checkbox" value="">
                      &nbsp;&nbsp;Birthday Parties</td>
                    <td class="check"><input name="" type="checkbox" value="">
                      &nbsp;&nbsp;Cocktails</td>
                    <td class="check1"><input name="" type="checkbox" value="">
                      &nbsp;&nbsp;Theme Parties</td>
                  </tr>
                </table>--> 
                </div></td>
            </tr>
            <tr>
              <td colspan="3" class="formTitle"><input type="checkbox" name="checkbox" id="checkbox">
                &nbsp;&nbsp;<span class="agree">I agree to the partykar terms & conditions</span></td>
            </tr>
            <tr>
              <td class="formTitle">&nbsp;</td>
              <td class="fGap">&nbsp;</td>
              <td class="inputBoxBlock"><input name="submit" type="submit" class="sBtn radius5" value="Submit" onClick="store();"></td>
            </tr>
          </table>
        </div>
      </center>
    </div>
    <div class="clr20"></div>
  </div>
  <div class="clr"></div>
</div>
<!-------------+++++++++++============ Body Page End ============+++++++++++-------------> 
<!-------------+++++++++++============ Footer Start ============+++++++++++------------->
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