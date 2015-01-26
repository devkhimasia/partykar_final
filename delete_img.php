<?php
require('db.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM vendor_images WHERE image_id = $id";

mysql_query($sql);

//header('Location:vendor-profile.php'); 

?>
<html>
<header>
<script>
		
	window.location.href = "vendor-profile.php";

</script>
</header>
<body>
</body>
</html>