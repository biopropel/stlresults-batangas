<!DOCTYPE HTML>
<html>
<head prefix="og: http://ogp.me/ns#">

<meta name="description" content="Daily small town lottery (STL) results in the province of Batangas.">
<meta name="keywords" content="pcso, philippine charity sweepstakes office, small town lottery, stl results, Batangas">
<meta name="author" content="EbokAlaEh">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Language" content="en-us" />

<link rel="canonical" href="https://stlresults.000webhostapp.com/index.php" />
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">

<title>STL Results Batangas</title>

<meta property="og:site_name" content="PCSO STL Results Batangas"/>
<meta property="og:type" content="article" />

<meta property="og:title" content="Daily PCSO STL Results" />
<meta property="og:description" content="Daily PCSO small town lottery (STL) results in the province of Batangas." />

<link rel="stylesheet" href="assets/main.css" type="text/css" />
  
</head>

<body>

	<h1>PCSO Small Town Lottery (STL) Results Batangas</h1>
	
	<h3>Daily small town lottery (STL) results in the province of Batangas.</h3>
	<p>
		First draw is done every 11AM, 2nd draw is at 4PM and 3rd draw at 8PM.
	</p>
	<?php
		// Read JSON file
		$json = file_get_contents('./results-batangas.json');

		//Decode JSON
		$json_data = json_decode($json,true);
		
		echo "<table><th>Date</th><th>1st Ball (11AM)</th><th>2nd Ball (4PM)</th><th>3rd Ball (8PM)</th>";

		//Traverse array and get the data 
		foreach ($json_data as $val) {
			echo "<tr><td>".$val['drawDate']."</td><td>".$val['one']."</td><td>".$val['two']."</td><td>".$val['three']."</td></tr>";
		}
		
		echo "</table>";
	?>
	
	<span class="footerText">@EBOKALAEH 2022</span>
</body>
</html>