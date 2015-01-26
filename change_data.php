<?php
require('db.php');
$cat=$_GET['cat'];
$city=$_GET['c'];
$area=$_GET['a'];


$res=mysql_query("select a.company,a.mobile,b.area,b.vendor_id from vendor a,vendor_category b where a.id=b.vendor_id and b.city='$city' and b.area='$area' and b.category='$cat' and membership_type='platinum'",$db_con);
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
	  if ($logo[1]!='' or $logo[1]!=null)
	  {
	  echo"       <tr>
        <td colspan='2' class='vInnerFull'><span class='headingOrangeSmall'>Photos </span><br>
          <div class='gImgBlock'><img src='$logo[1]'/><img src='$logo[2]'/><img src='$logo[3]'/><img src='$logo[4]'/> </div></td>
      </tr>";
	  }
	  
echo"    </table>
    </div>
		";
	}
	
	$res=mysql_query("select a.company,a.mobile,b.area,b.vendor_id from vendor a,vendor_category b where a.id=b.vendor_id and b.city='$city' and b.area='$area' and b.category='$cat' and membership_type='gold'",$db_con);
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
	  if ($logo[1]!='' or $logo[1]!=null)
	  {
	  echo"       <tr>
        <td colspan='2' class='vInnerFull'><span class='headingOrangeSmall'>Photos </span><br>
          <div class='gImgBlock'><img src='$logo[1]'/><img src='$logo[2]'/><img src='$logo[3]'/><img src='$logo[4]'/> </div></td>
      </tr>";
	  }
	  
echo"    </table>
    </div>
		";
	}
	
	$res=mysql_query("select a.company,a.mobile,b.area,b.vendor_id from vendor a,vendor_category b where a.id=b.vendor_id and b.city='$city' and b.area='$area' and b.category='$cat' and membership_type='silver'",$db_con);
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
	  if ($logo[1]!='' or $logo[1]!=null)
	  {
	  echo"       <tr>
        <td colspan='2' class='vInnerFull'><span class='headingOrangeSmall'>Photos </span><br>
          <div class='gImgBlock'><img src='$logo[1]'/><img src='$logo[2]'/><img src='$logo[3]'/><img src='$logo[4]'/> </div></td>
      </tr>";
	  }
	  
echo"    </table>
    </div>
		";
	}
	
	$res=mysql_query("select a.company,a.mobile,b.area,b.vendor_id from vendor a,vendor_category b where a.id=b.vendor_id and b.city='$city' and b.area='$area' and b.category='$cat' and membership_type='free'",$db_con);
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
	  if ($logo[1]!='' or $logo[1]!=null)
	  {
	  echo"       <tr>
        <td colspan='2' class='vInnerFull'><span class='headingOrangeSmall'>Photos </span><br>
          <div class='gImgBlock'><img src='$logo[1]'/><img src='$logo[2]'/><img src='$logo[3]'/><img src='$logo[4]'/> </div></td>
      </tr>";
	  }
	  
echo"    </table>
    </div>
		";
	}
	

?>