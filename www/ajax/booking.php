<?php 
	require_once('./search/flights.php');
	require_once('./booking/booking.php');

	if (!$_GET['flightID'] && !$_GET['searchID'] && !$_GET['modelID']) {
		echo json_encode( array(error =>'Not set "flightID"') );
		return;
	}

	if (!$_GET['flightID'] && !$_GET['searchID']) {
		echo json_encode( array(error =>'Not set "searchID"') );
		return;
	}

	if (!$_GET['flightID'] && !$_GET['modelID']) {
		echo json_encode( array(error =>'Not set "modelID"') );
		return;
	}
			
	
	if ($_GET['flightID']) {
		if (!($flight = loadFlight($_GET['flightID']) ) ) {
			//var_dump ($flight); 
			echo json_encode( array(error =>'Wrong flightID') );
			return;
		}

	} else {
		if (!($flight = createFlight($_GET['searchID'], $_GET['modelID']) ) ) {
			die();
		}

		saveFlight($flight);
	}
	sleep(1);
	echo json_encode($flight);
	
	/*$out = array(
		'bookingId' => '1212312312',
		'price' => '234 000',
		'taxes' => '250 ',
		'tariff' => '5700',
		'adults' => '3',
		'trips' => array(
			array(
				'from' => 'Киев',
				'to' => 'Лондон',
				'data' => '2/08/13',
				'flights' => array(
					array(
						'arrivalTime' => '22:50',
						'departureTime' => '22:50',
						'travelTime' => '4:10',
						'flightNumber' => 'A310/A312',
						'planeType' => 'Airbus',
						'title' => 'Трансаэро'
					),
					array(
						'arrivalTime' => '22:50',
						'departureTime' => '22:50',
						'travelTime' => '4:10',
						'flightNumber' => 'A310/A312',
						'planeType' => 'Airbus',
						'waitingTime' => '02:35',
						'title' => 'Трансаэро'
					),

				)
			),

			array(
				'from' => 'Лондон',
				'to' => 'Киев',
				'data' => '13/09/13',
				'flights' => array(
					array(
						'arrivalTime' => '22:50',
						'departureTime' => '22:50',
						'travelTime' => '4:10',
						'flightNumber' => 'A310/A312',
						'planeType' => 'Airbus',
						'title' => 'Трансаэро'
					)
				)
			)
		)
	);*/


