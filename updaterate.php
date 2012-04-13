<?php
    include 'dbinit.php';
	
	$comid = ($_GET['id']);
	
	$update = "UPDATE entries
				SET rate=rate+1
				WHERE id='$comid'";
				
	mysql_query($update);
?>

<html>
	<head>
		<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">
	</head>
</html>