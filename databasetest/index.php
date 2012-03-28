<html>
<head>
<title>DB Abfrage Test</title>

</head>

<body>
<?php
    // Verbindung zur Datenbank herstellen
    require_once "dbinit.php";

    // SQL-Anfrage: Ergebnis ist stets eine Tabelle
    $statement="SELECT datum,title,autor,content FROM entries ORDER BY id DESC";

    // Anfrage ausführen
    $result=sqlQuery($statement);

    // Tabelle in HTML darstellen
    echo "<table border=\"1\">\n";
    while ($row=mysql_fetch_row($result))
    {
        echo "<tr>";
        foreach ($row as $item)    // jedes Element $item der Zeile $row durchlaufen
            echo "<td>$item</td>";
        echo "</tr>\n";
    }
    echo "</table>\n";
    
    
?>

<form action="insert.php" method="post">
    <fieldset>
        <legend>Eintrag schrieben:</legend>
        <label>Titel: <input type="text" name="title" /></label>
        <label>Autor: <input type="text" name="autor" /></label>
        <label>Content: <input type="text" name="content" /></label>
        <input type="submit" name="formaction" value="Post it!" />
    </fieldset>
</form>


</body>
</html>