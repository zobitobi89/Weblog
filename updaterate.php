<?php
    include 'dbinit.php';
	
	$id = mysql_real_escape_string($_POST['id']);
	
	$update = "UPDATE entries
				SET rate=rate+1
				WHERE id=$id";
				
	mysql_query($update);
?>

<html>
	<head>
		<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">
	</head>
</html>