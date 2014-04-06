<?php
require_once('./booking/booking.php');

function createOrder ($flightID) {
	if(!$flightID) {
		echo json_encode( array('error'=>'Wrong Query, not set FlightID') );
	}

	if( !( $order = loadFlight($flightID) ) ) {
		echo json_encode( array('error'=>'Wrong FlightID') );	
		
		return;
	}

	$order['orderID'] = rand(12345, 78901).rand(67890, 23456).rand(12345, 78901);
	$order['timestamp'] = time() + 16200;
	$order['paid'] = false;
	$order['email'] = $_POST['email'];
	$order['phone'] = $_POST['phone'];
	$order['passengers'] = $_POST['passengers'];

	return $order;
	
	
} 


function saveOrder ($order) {
	if ( file_exists('./order/results/'.$order['orderID'].'.json') )
		$fp = fopen('./order/results/'.$order['orderID'].'.json', 'w');
	else 
		$fp = fopen('./order/results/'.$order['orderID'].".json", 'w');
	
	if (fwrite($fp, json_encode($order) ) )
		fclose($fp);
}

function loadOrder ($orderID) {
	
	//var_dump(file_exists('./order/results/'.$orderID.'.json'));
	if (! file_exists('./order/results/'.$orderID.'.json') )
		return FALSE;
	
	$out = file_get_contents('./order/results/'.$orderID.'.json');
	
	return json_decode($out, TRUE);
}