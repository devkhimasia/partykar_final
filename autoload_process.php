<?php
include("db.php"); //include config file
function cat_name($cat_id)
{
	if($cat_id != "any"){
		$res = mysql_query("select category from category where id= $cat_id");
		if(mysql_num_rows($res) > 0)
		{
			$cat_name = mysql_fetch_assoc($res);
			echo $cat_name['category']; 
		}
	}
}

if($_POST)
{
	//echo "hello";
	//sanitize post value
	$group_number = $_POST["group_no"];
	$city_s = stripslashes($_POST["city"]);
	$area_s = stripslashes($_POST["area"]);
	$cat_s = stripslashes($_POST["cat"]);
	$keywords_s = stripslashes($_POST["keywords"]);
	$name_s = stripslashes($_POST["name"]);
	
	$items_per_group = 10;
	//throw HTTP error if group number is not valid
	/*if(!is_numeric($group_number)){
		header('HTTP/1.1 500 Invalid number!');
		exit();
	}*/
	
	//get current starting point of records
	$position = ($group_number * $items_per_group);
	

	//Limit our results within a specified range. 
	$results = mysql_query("select a.*,b.area,b.vendor_id,b.keywords,b.membership_type from vendor a,vendor_category b where a.id=b.vendor_id $city_s $area_s $cat_s  $keywords_s $name_s ORDER BY FIELD(membership_type,'Platinum','Gold','Silver','free') LIMIT $position, $items_per_group",$db_con);
	//echo mysql_num_rows($results);
	
	if ($results) { 
		//output results from database
		
		//echo mysql_num_rows($results);
		
		while ($row=mysql_fetch_assoc($results))
		{
				$r=mysql_query("select category from vendor_category where vendor_id =". $row['vendor_id']."",$db_con);
				$cats="";
				while($ans=mysql_fetch_row($r))
				{
					$cats.=$ans[0].',';
				}
				$img_logo=mysql_query("select logo from vendor_uploads where vendor_id=".$row['vendor_id']."",$db_con);
				$logo=mysql_fetch_row($img_logo);
				if($logo[0]=='')
				$logo[0]='images/no_image.jpg';
				
						
				$ratingsql=mysql_query("select id,total_votes,total_value from ratings where id =". $row['vendor_id']."",$db_con);
				 
				 if(mysql_num_rows($ratingsql) > 0)
				 {
					 while($row_rating = mysql_fetch_assoc($ratingsql))
					 {
						 $ratingcal = (($row_rating['total_value'] / $row_rating['total_votes'])*100)/5;
						 $votes = $row_rating['total_votes'];
						 
					 }
					 
				 }else{
					 $ratingcal = "";
					  $votes = "";
				 }
				 
				 
				 
				if($row['mobile'] != "" )
				{
					$mobiledata = "+91 ". substr($row['mobile'],-10);
				}
				
				if($row['mobile2'] != "")
				{
					$mobiledata .= " , +91 ".substr($row['mobile2'],-10) . "<br>";
				}
				
								
				if($row['telephone'] != "" )
				{
					$mobiledata1 =  "0".substr($row['telephone'],4,2) . " " . substr($row['telephone'],-8);
				}
				
				if($row['telephone2'] != "")
				{
					$mobiledata1 .= " , 0".substr($row['telephone2'],4,2) . " " .substr($row['telephone2'],-8) ."<br>" ;
				}
				
				
						 
				 
				 
				
		?>
      
		<div class='vListBlock'>
     <table width='520' border='0' cellspacing='0' cellpadding='0'>
        <tr>
          <td class='vInnerLt1'><div class='cImg'><img src='<?php echo $logo[0];?>' /></div></td>
          <td class='vInnerRt1'><table width='380' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td class='cInfoLft'><a href='<?php echo cat_name($row['category']) ."/". $row['vendor_id']."/". str_replace(" ","-",$row['company']);?>.html'><span class='cNameHead' style='cursor:pointer; text-transform:capitalize;'><?php echo $row['company'];?></span></a></td>
              
              </tr>
              <tr>
                <td class='cInfoLft'><table width='250' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td class='cInfoIco'><img src='images/phone.jpg' width='15' height='15'></td>
                      <td class='cInfoTxt'><?php echo $mobiledata . $mobiledata1;?></td>
                    </tr>
                    <tr>
                      <td class='cInfoIco'><img src='images/address.jpg' width='15' height='15'></td>
                      <td class='cInfoTxt'>
					  <?php if($row['address'] == ""){
						echo $row['area'];
						  
					  }else{
						  
					  	echo substr($row['address'],0,35) ."...";
					  }
					   ?>
                      </td>
                      
                      </tr>
                    <?php
					if($cat_s!='any')
					{
					?>
                    	
                    	<tr>
                      		<td class='cInfoIco'>&nbsp;</td>
                      		<td class='cInfoTxt'><?php if($row['keywords'] == "" or $row['keywords'] == "none") { echo "";}else{ echo rtrim($row['keywords'],","); }?></td>
                    	</tr>
					<?php
                    }
					else
					{
					?>
                    <tr>
                      <td class='cInfoIco'>&nbsp;</td>
                      <td class='cInfoTxt'><?php echo $cats;?></td>
                    </tr>
					<?php
                    }
					?>
                    <tr>
                      <td class='cInfoIco'>&nbsp;</td>
                      <td class='cInfoTxt'>
                      
                      <div class='rating_bar'>
						    <div  class='rating' style='width:<?php echo round($ratingcal); ?>%;'></div>
					  </div>
                      
                      
                      
                     <!-- <div style="width:60px; background:#990000; padding:3px; border:1px solid #666; border-radius:5px; text-align:center; float:left;"><span style="font-size:20px; color:#fff;"><?php //echo round($ratingcal,1); ?></span><span style="font-size:12px; color:#fff"> / 5</span></div><?php //if($votes != ""){ ?><span style="padding:15px 0 0 10px; display:block; float:left;"> Based on <?php //echo $votes; ?> votes</span><?php //}?> -->
					  
					  
                      </td>
                    </tr>
                  </table></td>
                <td class='cInfoRgt'><br>
				<?php
				if($row['membership_type']=='free')
				{
				?>
                  <a class='various fancybox.iframe' href='own_this_data.php?id=<?php echo $row['id']."&name=".$row['company'];?> '><img src='images/own-this-listing.png'></a>
                 <?php 
                  } 
				  ?>
			 </td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div>
    <?php }
	
	}
	//unset($results);
	//$mysqli->close();
}
?>