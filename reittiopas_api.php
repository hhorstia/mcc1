<?php
/**
This function is used to make calls to the Reittiopas API and find public transportation routes between
two locations or addresses given.
Uses the REST API at http://developer.reittiopas.fi/pages/fi/http-get-interface-version-2.php?lang=EN
*/

class Reittiopas {

	private $username = "";
	private $password = "";

	private $url;
	
	function __construct() {
		$this->url = "http://api.reittiopas.fi/hsl/prod/?user=" . $this->username .
			"&pass=" . $this->password;
	
	}
	
	public function findRouteDuration($from, $to) {

		$url_parameters = "&request=route&show=1&to=$to&from=$from";

		$response = file_get_contents($this->url . $url_parameters);

		$json = json_decode($response, true);
		//var_dump($json);

		return $json[0][0]['duration'];

	}

	public function findCoordinates($address) {

		$url_parameters = "&request=geocode&key=teekkarik";
	
		$response = file_get_contents($this->url . $url_parameters);
		$json = json_decode($response, true);
	

	}
}

?>
