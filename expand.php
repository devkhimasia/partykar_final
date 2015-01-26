<?php
require('db.php');
$id=$_GET['id'];
$res=mysql_query("select a.company,a.mobile,b.area,b.vendor_id from vendor a,vendor_category b where a.id=b.vendor_id and b.id=$id",$db_con);
while ($row=mysql_fetch_row($res))
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
		echo "
		<div class='vListBlock'>
     <table width='520' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td class='vInnerLt'><div class='cImg'><img src='$logo[0]' /></div>
          <div class='clr'></div>
         
          <div class='clr'></div></td>
        <td class='vInnerRt'><table width='356' border='0' align='left' cellpadding='0' cellspacing='0'>
            <tr>
              <td class='vTabInfo'><span class='cNameHeading'>$row[0]</span>
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
                    <td class='vadd'>$row[1]</td>
                  </tr>
                  <tr>
                    <td class='vIco'><img src='images/address.jpg' width='15' height='15'></td>
                    <td class='vadd'>$row[2]</td>
                  </tr>
                  
                </table></td>
            </tr>
            <tr>
              <td class='vTabInfo3'><span class='headingOrangeSmall'>Listed In</span><br>
                <p class='bodyTextInner'>$cats</td>
            </tr>
          </table></td>
      </tr>
      ";
	  
		  $p=explode("/",$logo[1]);
		  $p1=explode("/",$logo[2]);
		  $p2=explode("/",$logo[3]);
		  $p3=explode("/",$logo[4]);
	  echo"       <tr>
        <td colspan='2' class='vInnerFull'><span class='headingOrangeSmall'>Photos </span><br>
          <div class='gImgBlock'> <a class='fancybox' href='#show_img1'><img src='$p[0]/thumbs/thumb_$p[1]'/></a><a class='fancybox' href='#show_img2'><img src='$p1[0]/thumbs/thumb_$p1[1]'/></a><a class='fancybox' href='#show_img3'><img src='$p2[0]/thumbs/thumb_$p2[1]'/></a><a class='fancybox' href='#show_img4'><img src='$p3[0]/thumbs/thumb_$p3[1]'/> </a></div></td>
      </tr>";
	 
	  
echo"    </table>
    </div>
		<div id='show_img1' style='display:none;'>
    <center><img src='$logo[1]'></center>
    </div>
	<div id='show_img2' style='display:none;'>
    <center><img src='$logo[2]'></center>
    </div>
	<div id='show_img3' style='display:none;'>
    <center><img src='$logo[3]'></center>
    </div>
	<div id='show_img4' style='display:none;'>
    <center><img src='$logo[4]'></center>
    </div>
		";
	}
	
?>
   <a href="">Back to Search Results</a>