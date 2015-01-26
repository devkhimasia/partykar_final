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

<link rel="stylesheet" href="css/Selectyze.jquery1.css" type="text/css" />
<script type="text/javascript" src="jquery/Selectyze.jquery.js"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		$('.selectyze1').Selectyze({
			theme : 'selectList'
		});
		
	$('.fancybox').fancybox();

});
	
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript" src="js/common.js"></script>
<script src="js/jquery.form.js"></script>
<script>
$(document).ready(function(){
	$(function() {

$( ".areaAuto" ).autocomplete({source:'suggest_area.php', minLength:1});
});

 function onsuccess(response,status){
  $("#loader").hide();
	  if(response == 1)
	  {
		  window.location.href='vendor-profile.php';
		  
	  }else{
	  	$("#err_msg").php(response);
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
<!-------------+++++++++++============ Header Start ============+++++++++++------------->
<div class="header">
  <div class="topHeader">
    <div id="partykar_logo"><a href="index.php" target="_self" title="Partykar.com"><img src="images/partyKar-logo.png" alt="Partykar.com" /></a></div>
    <div class="topLogin"><a class="fancybox" href="#inline1">Sign In</a></div>
    <div id="topMenu">
      <ul id="trans-nav">
        <li><a href="index.php" target="_self" title="Partykar.com">Home</a></li>
        <!--<li><a href="aboutUs.php" target="_self" title="About Partykar">About us</a></li>-->
        <li><a href="how_to_use.php" target="_self" title="Partykar.com">How To Use</a></li>
        <li><a href="categories.php" target="_self" title="Partykar.com">Categories</a>
        <ul>            
             <li><a href="set_search_session.php?c=any&a=any&cat=caterer">CATERER</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=make up/ parlour">MAKE UP ARTISTS</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=singer">SINGER</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=photographer ">PHOTOGRAPHER</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=musician ">MUSICIAN</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=banquet ">BANQUET</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=fashion designer ">FASHION DESIGNER</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=choreographer">CHOREOGRAPHER</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=mehendi">MEHENDI</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=decorater ">DECORATOR</a></li>
            <!--<li><a href="set_search_session.php?c=any&a=any&cat=event / wedding planner">EVENT / WEDDING</a></li>-->
            <li><a href="set_search_session.php?c=any&a=any&cat=Clubs/ Lounge">CLUBS / LOUNGE</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=tatoo">TATOO</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=compere ">COMPERE</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=mimicry ">MIMICRY</a></li>
            <li><a href="set_search_session.php?c=any&a=any&cat=magician ">MAGICIAN</a></li>
          </ul>
        </li>
        <li><a href="contact.php" target="_self" title="Partykar.com">Get in Touch</a></li>
      </ul>
    </div>
  </div>
</div>
<!-------------+++++++++++============ Header End ============+++++++++++-------------> 
<!-------------+++++++++++============ Body Page ============+++++++++++------------->
<div class="innerBg"></div>
<div class="mainWrap">
  <div class="pagePath"><a href="index.php" class="linkHome">Home</a> <span class="pathArrow">></span> <span class="headingOrangeSmall">Careers</span></div>
  <div class="vloginForm">
        
    <div class="pkBenInfo"> <span class="headingOrangeSmall2">Careers</span><br>
      <p class="bodyText">If you can think out of the box and make a difference by being part of Partykar you are at the right door!!!<br><br>
      
    <span class="careersHeading">Role: Business Development Executive (4 Vacancies)</span><br>
    <span class="vacancy">The Job involves gaining proficiency in Marketing/ Customer Acquisition/ Promoting/Branding.</span>
    
        <ul class="ul_margin35">
        <li>You will be expected to build  the market presence , generate leads, bringing in new clients and growing business for Partykar</li>        
        <li>Execute the company strategy on Branding and Marketing, Customer References, Event Marketing and to drive enterprise customer acquisition, build reputation and establish our leadership in the market.</li>        
        <li>Execute strategies focused on market segments, strategic customers, and prospects that create strong brand awareness and demand for companies services</li>        
        <li>Meeting, presenting the business model and converting the prospects into business.</li>       
        <li>To individually follow up with prospective clients & individually manage a pipeline of leads.</li>    
        <li>To pitch to new & existing clients, understanding detailed requirements and send proposals on time.</li>        
        <li>Maximizes all opportunities in the process of closing a lead.</li>
        <li>To assist and advice prospects on memberships and payment process.</li>
        <li>To research and build a strong database of vendors.</li>
        <li>Liaising and maintaining relationships for membership renewals and  retaining clients.</li>
        <li>Achieving  periodical membership targets on continuous basis.</li>
        <li>Contributing innovative marketing strategies to increase market presence, sell subscriptions & internet marketing projects to companies.</li>
        </ul>
        
        
        <div class="flotRight"><a href="mailTo:vendors@partykar.com" class="applyNow flotRight radius10">Apply Now</a></div>
        
        <div class="clr20"></div>
        <span class="careersHeading">Desired Candidate</span><br>
    <span class="vacancy">Education: Graduate (any specialization)</span>
    
		<ul class="ul_margin35">
        <li>Confident and an extrovert personality with excellent presentation and communication skills.</li>
        <li>Ability to identify the key person in companies and  interact effectively  staff in wide range of businesses .</li>
        <li>Proficiency in MS-Excel and MS-word.</li>
        <li>Creative thinker, open to ideas; Strong problem solving/analytical abilities, not afraid to be provocative and disruptive in marketing thought.</li>
        <li>Ability to multi-task, quickly prioritize projects and work independently.</li>
        <li>No ego - we are a small, dynamic team and everyone pitches in to get the job done.</li>
        <li>A positive, flexible attitude and a sense of humor are essential.</li>
        <li>Should be an ambitious go-getter, and have the knack to spot a business opportunity wherever he/she goes.</li>
        <li>Enthusiastic about growing and building a strong career in e-commerce</li>
        </ul>
      <div class="flotRight"><a href="mailTo:vendors@partykar.com" class="applyNow flotRight radius10">Apply Now</a></div>
      </p>
      
      </div>
      
    
  </div>
  <div class="adSpaceRight">
    <!--<div class="adSpace180_120">180x120</div>
    <div class="adSpace180_120">180x120</div>
    <div class="adSpace180_120">180x120</div>
    <div class="adSpace180_120">180x120</div>-->
    <img src="images/ad-banner.png"/>
  </div>
  <div class="clr"></div>
</div>
<!-------------+++++++++++============ Body Page End ============+++++++++++-------------> 
<!-------------+++++++++++============ Footer Start ============+++++++++++------------->
<div class="footer">
  <div class="footerblock">
    <div class="footerLt">
      <div class="popLoc"> <span>ABOUT PARTYKAR</span>
        <p>
          Partykar is a one stop that helps you to get the best celebration deals to create a mesmerizing event. We get you /line up the best banquets, best caterers, best decorators, best fashion designers, best DJ's, best mehendi artists, best photographers and more that will keep you and your wallet happy. You name it and we have it! </p>     
       </div>
      <div class="bPoint">
        <div class="bPointMenu"><a href="what_is_partykar.php" target="_self" title="About Partykar">WHAT IS PARTYKAR ?</a></div>
        <div class="bPointMenu"><a href="benifit.php" target="_self" title="HOW CAN YOU BENEFIT FROM PARTYKAR?">HOW CAN YOU BENEFIT FROM PARTYKAR?</a></div>
        <div class="bPointMenu"><a href="vendor-registration.php" target="_self" title="FREE REGISTRATION FOR VENDOR">GET LISTED FOR FREE</a></div>
        <div class="bPointMenu"><a href="advertise.php" target="_self" title="ADVERTISE WITH US">ADVERTISE WITH US</a></div>
      </div>
      <div class="clr"></div>
    </div>
    <div class="footerRt">
      <div class="bSocial"> <span>FOLLOW US</span>  <a href="#" target="_blank" title="Join us on Facebook"><img src="images/facebook.png" /></a> 
      <a href="#" target="_blank" title="Follow us on Twitter"><img src="images/twitter.png" /></a> 
      <a href="#" target="_blank" title="Join us on YouTube"><img src="images/youtube.png" /></a> 
      <a href="#" target="_blank" title="Join us on Blogger"><img src="images/blogger.png" /></a> </div>
      <div class="reachUs"> <span>REACH US</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="mailto:vendors@partykar.com">vendors@partykar.com</a> </div>
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
  <div id="err_msg"> </div>
  <?php /*?><?php

if(isset($_POST['submit']))
{
	$id=$_POST['logName'];
	$pass=$_POST['password'];
	require('db.php');
	$res=mysql_query("select code from vendor where email='$id' and password='$pass' and confirmed='yes'",$db_con);
if (mysql_num_rows($res)>0)
{
	$code=mysql_fetch_row($res);
	$_SESSION['code']=$code[0];
	
}
else
{
	echo "fail";
}
if(isset($_SESSION['code']))
{
	header('Location:vendor-profile.php');
}
}
?><?php */?>
  <form action="verify_login.php" method="post" id="login_form">
    <center>
      <table width="400" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center">
        <tr>
          <td align="center"><table width="400" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="logDet">Email</td>
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
          <div id="loader" style="display:none;">
            <center>
              <img src="images/ajax-loader.gif" />
            </center>
          </div>
          <div>
            <div id="onsuccessmsg"></div>
          </div>
        </tr>
        <tr>
          <td align="center"><span class="logInfo2"><a href="#">Forgot Password</a></span></td>
        </tr>
      </table>
    </center>
  </form>
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