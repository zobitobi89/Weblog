<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>T and T Weblog</title>
		
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
								
								<span class="infocontainer">
									<input type="Button" value="Say something..." class="say"> <span class="showdate"></span>
								</span>
								
										
											<div class="entrybox">
														<form action="insert.php" method="post" onSubmit="return checkform()" name="entrycommbox">
												<p>
													Title:
													<input type="text" name="title" style="font-weight: bold;">
													Author:
													<input type="text" name="autor" style="font-weight: bold;">
												</p>
												<p style="text-align: top;">
													<textarea class="textcom" name="content" cols="35" rows="7" id="writecom"></textarea>
												</p>
												<br>
												<p>
													<input type="submit" name="send" value="Share it!">
												</p>
													</form>
											</div>
											
											<?php
												    // Verbindung zur Datenbank herstellen
												    require_once "dbinit.php";
												
												    // SQL-Anfrage: Ergebnis ist stets eine Tabelle
												    $statement="SELECT id,datum,title,autor,content,rate FROM entries ORDER BY id DESC";
												
												    // Anfrage ausf�hren
												    $result=sqlQuery($statement);
													
													//Monatarray
													$month=array('','January','February','March','April','May','June','July','August','September','October','November','December');
												
												
													while ($row=mysql_fetch_object($result))
													{
													echo "<div class='commentbox'>";
														echo "<div class='commentheader'>";
															echo "<table class='commenttab'>";
																	  echo "<tr>";
																	    echo "<td rowspan='2' width='41px'>".$month[substr($row->datum,6,-3)]."<br/>".substr($row->datum,-2)."<sup>th</sup>"."</td>";
																	    //TODO: add st,nd,rd to days (current status: for all days: th!)
																	    echo "<td>".$row->title."</td>";
																	  echo "</tr>";
																	  echo "<tr>";
																	    echo "<td>".by ." ".$row->autor."</td>";
																	  echo "</tr>";		
															echo "</table>";
														echo "</div>";
														echo "<div class='commentcontent'>";
															echo "$row->content";
															echo "<div class='rate'>";
															echo "<a class='hearts' href='updaterate.php?id=$row->id'>&hearts;</a>";
															if($row->rate > 1 || $row->rate == 0){
															echo "$row->rate hearts";
															}
															else {
															echo "$row->rate heart";	
															}
															echo "</div>";
														echo "</div>";
													echo "</div>";	
													}
											?>
							</div>
							
							<div id="tab2" class="tab_content">
								<p>This are the current TOP10 entries...</p>
							<?php
							require_once "dbinit.php";
							
							$top10 = "SELECT * FROM entries WHERE id > 0 ORDER BY rate DESC LIMIT 10";
							
							$restop10 = sqlQuery($top10);
							
							while ($row=mysql_fetch_object($restop10))
													{
													echo "<div class='commentbox'>";
														echo "<div class='commentheader'>";
															echo "<table class='commenttab'>";
																	  echo "<tr>";
																	    echo "<td rowspan='2' width='41px'>".$month[substr($row->datum,6,-3)]."<br/>".substr($row->datum,-2)."<sup>th</sup>"."</td>";
																	    //TODO: add st,nd,rd to days (current status: for all days: th!)
																	    echo "<td>".$row->title."</td>";
																	  echo "</tr>";
																	  echo "<tr>";
																	    echo "<td>".by ." ".$row->autor."</td>";
																	  echo "</tr>";		
															echo "</table>";
														echo "</div>";
														echo "<div class='commentcontent'>";
															echo "$row->content";
															echo "<div class='rate'>";
															if($row->rate > 1 || $row->rate == 0){
															echo "$row->rate hearts";
															}
															else {
															echo "$row->rate heart";	
															}
															echo "</div>";
														echo "</div>";
													echo "</div>";	
													}
							?>
							
							</div>
							
							<div id="tab3" class="tab_content">
							<p>About</p>
							<p>
								This is the Weblog which was implemented during the class 'Web Engeneering II'. <br>
								by Tufan Doenmez and Tobias Zogrotzky
							</p>
							</div>
							
							<div id="tab4" class="tab_content">
							<p>Contact us</p>
							<form action="mailto:to2912@googlemail.com" method="post" name="mailform" onsubmit="return checkmailform()" enctype="text/plain">
												<p>
													Betreff:
													<input type="text" name="title" style="font-weight: bold;">
													Name:
													<input type="text" name="autor" style="font-weight: bold;">
												</p>
												<p style="text-align: top;">
													<textarea name="content" cols="50" rows="14"></textarea>
												</p>
												<br>
												<p>
													<input type="submit" name="send" value="Contact us!">
												</p>
													</form>
							</div>
				</div>
			
			</div>
		</div>
	</body>
</html>
