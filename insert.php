<?php

include 'dbinit.php';

$date = mysql_real_escape_string ($_POST['datum']);
$tit = mysql_real_escape_string ($_POST['title']);
$aut = mysql_real_escape_string ($_POST['autor']);
$con = mysql_real_escape_string ($_POST['content']);


$entry = "INSERT INTO entries
(datum,title,autor,content,rate)
VALUES
(CURDATE( ), '$tit', '$aut','$con',1)";

$eintragen = mysql_query($entry);

echo "<a href='index.php'>back</a><br>";
?>

<html>
	<head>
		<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">
	</head>
</html>