<!DOCTYPE html> 
<html> 
	<head> 
	<title>MCC 1</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	<script src="geolocation.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>MCC 1</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p id="demo">Hello world</p>
		<button onclick="getLocation()">Try It</button>
<?php
	ini_set('display_errors', '1');
	require_once('reittiopas_api.php');
	
	$from = "2546445,6675512";
	$to = "2549445,6675513";
	
	$ro = new Reittiopas();
	
	$duration = $ro->findRouteDuration($from, $to);
	$duration_minutes = ($duration / 60) . " m " . ((($duration / 60) % 1) * 60) . " s";
	
	echo "Route from $from to $to, duration $duration seconds or $duration_minutes";

?>
		
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>
