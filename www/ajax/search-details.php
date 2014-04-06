<?php 
require('./search/flights.php');
sleep(0.7);
if (!$_GET['sessionID'] || !$_GET['modelID']) {
	echo json_encode( array('error'=>'Wrong data') );
	return;
}

if( !( $flightSearch = loadFlightSearch($_GET['sessionID']) ) ){
	echo json_encode( array('error'=>'Wrong SessionID') );
	return;
}
			
foreach ($flightSearch['response'] as $flight) {
	if ( $flight['id'] == $_GET['modelID']) {
		echo json_encode($flight);
		return;
	}
}

echo json_encode( array('error'=>'Wrong ModelID') );
	return;



