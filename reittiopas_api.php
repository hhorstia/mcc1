<?php
/**
This function is used to make calls to the Reittiopas API and find public transportation routes between
two locations or addresses given.
Uses the REST API at http://developer.reittiopas.fi/pages/fi/http-get-interface-version-2.php?lang=EN
*/

function findRouteDuration($from, $to) {

$username = "";
$password = "";

$url_beginning = "http://api.reittiopas.fi/hsl/prod/?user=$username&pass=$password";

$url_parameters = "&request=route&show=1&to=$to&from=$from";

$response = file_get_contents($url_beginning . $url_parameters);

$json = json_decode($response, true);
//var_dump($json);

return $json[0][0]['duration'];

}

function findCoordinates($address) {

}

?>
