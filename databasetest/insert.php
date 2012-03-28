<?php

include 'dbinit.php';

$date = mysql_real_escape_string ($_POST['datum']);
$tit = mysql_real_escape_string ($_POST['title']);
$aut = mysql_real_escape_string ($_POST['autor']);
$con = mysql_real_escape_string ($_POST['content']);


$entry = "INSERT INTO entries
(datum,title,autor,content)
VALUES
(CURDATE( ), '$tit', '$aut','$con')";

$eintragen = mysql_query($entry);

echo "<a href='index.php'>back</a><br>";
?>