<?php
require_once('./search/flights.php');
function createFlight ($searchID, $modelID) {
	
	if( !( $flightSearch = loadFlightSearch($searchID) ) ) {
		echo json_encode( array('error'=>'Wrong SearchID') );	
		
		return;
	}
	
	foreach ($flightSearch['response'] as $flight) {
		if ($flight['id'] == $modelID) 
			$result = $flight;
	}

	if( !$result ) {
		echo json_encode( array('error'=>'Wrong ModelID') );		
		return;
	}


	$result['flightID'] = 'flt'.uniqid();
	
	$result['taxes'] = ceil($result['price'] * 0.02);
	$result['tariff'] = $result['price'] - $result['taxes'];
	$result['adults'] = $flightSearch['query']['adults'];
	$result['childrens'] = $flightSearch['query']['childrens'];
	$result['infants'] = $flightSearch['query']['infants'];
	$result['placedInfants'] = $flightSearch['query']['placedInfants'];
	$result['adults'] = $flightSearch['query']['adults'];
	$result['ticketClass'] = $flightSearch['query']['ticketClass'];
	unset($result['title']);
	unset($result['id']);


	foreach ($result['trips'] as $key => &$trip) {
		
		if (count($trip['variants']) > 1 && $_GET['checked'][$key] == '') {
			echo json_encode(array(error => 'Wrong cheked system param') );
			return;
		}
		
		$trip['flights'] = $trip['variants'][(int)$_GET['checked'][$key]];
		unset($trip['variants']);
	}
	
	return $result;
} 


function saveFlight ($flight) {
	if ( file_exists('./booking/results/'.$flight['flightID'].'.json') )
		$fp = fopen('./booking/results/'.$flight['flightID'].'.json', 'w');
	else 
		$fp = fopen('./booking/results/'.$flight['flightID'].".json", 'w');
	
	if (fwrite($fp, json_encode($flight) ) )
		fclose($fp);
}

function loadFlight ($flightID) {
	
	//var_dump(file_exists('./booking/results/'.$flightID.'.json'));
	if (! file_exists('./booking/results/'.$flightID.'.json') )
		return FALSE;
	
	$out = file_get_contents('./booking/results/'.$flightID.'.json');

	return json_decode($out, TRUE);
}