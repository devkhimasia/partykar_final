<?php
require('db.php');
if($_POST['category']=='Clubs/ Lounge')
{
	$category='Clubs';
}
else if($_POST['category']=='Event / Wedding Planners')
{
	$category='Event';
}
else if($_POST['category']=='Make up/ Parlours')
{
	$category='Parlours';
}
else
{
	$category=$_POST['category'];
}
$vendor=$_POST['vendor'];
$position=$_POST['position'];
$date=$_POST['date'];

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))

&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Only images allowed";
    }
  else
    {
   
    if (file_exists("ads/".$category."/".$position."/".$vendor."_". $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
		  $path="ads/".$category."/".$position."/".$vendor."_". $_FILES["file"]["name"];
     mysql_query("insert into ads (category,vendor,position,path,start_date,end_date) values ('$category','$vendor','$position','$path',CURDATE(),'$date')",$db_con);
	   move_uploaded_file($_FILES["file"]["tmp_name"],
      "ads/".$category."/".$position."/".$vendor."_". $_FILES["file"]["name"]);
	 
	  
	  }
    }
  }
else
  {
  echo "Invalid file";
  }
?>