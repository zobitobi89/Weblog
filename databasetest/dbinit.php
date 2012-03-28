<?php
    $server = "localhost";
	$user ="root";
	$pass = "";
	$base = "blogentries";
	
	mysql_connect($server,$user,$pass);
	mysql_select_db($base);
	
	// Einstellung: SQL-Fehler­meldungen anzeigen
    $showsqlerrors=true;

    // Ausgabe einer Fehler­meldung und Abbruch
    function sqlExit($sql)
    {
        global $showsqlerrors;
        if ($showsqlerrors)
            echo "Fehler in SQL-Kommando: $sql<br/>".mysql_error()."<br/>\n";
        exit();
    }
	
	function sqlQuery($statement) {
		$result = mysql_query($statement);
		return $result;
	}
	
?>