<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>This is our Blog!</title>
		
		<script type="text/javascript" src="lib/jquery-1.6.2.js"></script>
		<script type="text/javascript" src="lib/scripting.js"></script>
		
		<link rel="stylesheet" type="text/css" href="style.css">
		
</head>
	<body>
		<div id="wrapper">
			<div id="main">
			
				<div class="content">
				
							<div class="header">
							</div>
							
							<ul class="tabs">
								    <li><a href="#tab1">Home</a></li>
								    <li><a href="#tab2">Top 10</a></li>
								    <li><a href="#tab3">About</a></li>
								    <li><a href="#tab4">Contact us</a></li>
							</ul>
							
							<div id="tab1" class="tab_content">
										
											<div class="entrybox">
														<form action="insert.php" method="post">
												<p>
													Title:
													<input type="text" name="title" style="font-weight: bold;">
													Author:
													<input type="text" name="autor" style="font-weight: bold;">
												</p>
												<p style="text-align: top;">
													<textarea name="content" cols="35" rows="7"></textarea>
												</p>
												<br>
												<p>
													<input type="submit" name="send">
												</p>
												
													</form>
											</div>
											
											<?php
												    // Verbindung zur Datenbank herstellen
												    require_once "dbinit.php";
												
												    // SQL-Anfrage: Ergebnis ist stets eine Tabelle
												    $statement="SELECT datum,title,autor,content FROM entries ORDER BY id DESC";
												
												    // Anfrage ausfŸhren
												    $result=sqlQuery($statement);
												
												
													while ($row=mysql_fetch_object($result))
													{
													echo "<div class='commentbox'>";
														echo "<div class='commentheader'>";
															echo "<table border='0'>";
																	  echo "<tr>";
																	    echo "<td rowspan='2' width='41px' style='background: url(images/calicon.png) no-repeat;background-size: 40px' ></td>";
																	    echo "<td>".$row->title."</td>";
																	  echo "</tr>";
																	  echo "<tr>";
																	    echo "<td>".by ." ".$row->autor."</td>";
																	  echo "</tr>";		
															echo "</table>";
														echo "</div>";
												
														echo "<div class='commentcontent'>";
															echo "$row->content";
														echo "</div>";
													echo "</div>";	
													}
													
												    // Tabelle in HTML darstellen
												   /* echo "<table border=\"1\">\n";
												    while ($row=mysql_fetch_row($result))
												    {
												        echo "<tr>";
												        foreach ($row as $item)    // jedes Element $item der Zeile $row durchlaufen
												            echo "<td>$item</td>";
															echo "<td><input type='button' value='Like'></td>";
												        echo "</tr>\n";
														
												    }
												    echo "</table>\n";
												  */  	    
											?>
							</div>
							
							<div id="tab2" class="tab_content">
							<p>Top10</p>
							</div>
							
							<div id="tab3" class="tab_content">
							<p>About</p>
							</div>
							
							<div id="tab4" class="tab_content">
							<p>Contact us</p>
							</div>
				</div>
			
			</div>
		</div>
	</body>
</html>
