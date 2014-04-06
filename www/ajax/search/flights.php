<?php 
$companies = array(
	'Трансаэро', 
	'Международные Авиалинии Украины', 
	'Австрийские авиалинии', 
	'ЛОТ Польские Авиалинии', 
	'ЧСА - Чешские авиалинии', 
	'Аэрофлот - РА', 
	'Эйр Берлин', 
	'Люфтганза'
);

$planes = array(
	'An 148',
	'Embraer E-jet',
	'Boeing 737',
	'Bombardier Canadair Regional Jet',
	'Airbus 319',
	'Airbus 320',
	'Sukhoi Superjet 100'
);

$flightNumbers = array(
	'SU4443',
	'LO768',
	'PS58',
	'PS820',
	'LH2555'
);



function newFlightSearch () {
	global $companies, $airports;

	//Генерируем объект поиска
	/*var_dump($_GET['from']);
	var_dump($_GET['to']);*/
	$from = findAirports($_GET['from']);
	$to = findAirports($_GET['to']);
	
	$flightSearch = array(
		query => array(
			from => $from[0],
			to => $to[0],
			forward => $_GET['forward'],
			back => $_GET['back'],
			ticketClass => $_GET['ticketClass'],
			adults => $_GET['adults'],
			childrens => $_GET['childrens'],
			infants => $_GET['infants'],
			placedInfants => $_GET['placedInfants'],
			sessionID => uniqid(),

		),
		lenght => rand(30, 85),
		directOnly => array(),
		response => array()
	);

	generateFlights($flightSearch);
	saveFlightSearch($flightSearch);

	return $flightSearch;
}

function saveFlightSearch ($flightSearch) {
	
	if ( file_exists('./search/results/'.$flightSearch['query']['sessionID'].'.json') )
		$fp = fopen('./search/results/'.$flightSearch['query']['sessionID'].'.json', 'w');
	else 
		$fp = fopen('./search/results/'.$flightSearch['query']['sessionID'].".json", 'w');
	
	if (fwrite($fp, json_encode($flightSearch) ) )
		fclose($fp);
}

function loadFlightSearch ($sessionID) {
	
	if (! file_exists('./search/results/'.$sessionID.'.json') )
		return FALSE;
	
	$out = file_get_contents('./search/results/'.$sessionID.'.json');

	return json_decode($out, TRUE);
}

function generateFlights (&$flightSearch) {
	global $companies, $airports, $flightNumbers, $planes;
	
	$count = 0;
	$id = count($flightSearch['response']) + 1;

	while (/*$count < 10 &&*/ count($flightSearch['response']) < $flightSearch['lenght']) {
		//Генерация полных данных
		$response = &$flightSearch['response'];
		$query = &$flightSearch['query'];
		$response[] = array(
			id => "$id",
			price => 0,
			title => '',
			stop => 0
		);

		//Генерация полных данных
		$lastIdx = count($response) - 1;
		$response[$lastIdx]['trips'] = array();

		for ($i = 0 ; $i < ($query['back'] ? 2 : 1); $i++) {
			$from = findAirports($i == 0 ? $query['from']['IATA'] : $query['to']['IATA']);
			$from = $from[0];

			$to = findAirports($i == 0 ? $query['to']['IATA'] : $query['from']['IATA']);
			$to = $to[0];

			$response[$lastIdx]['trips'][] = array(
				from => $from['title'] ? $from['title'] : $from['city'], 
				to => $to['title'] ? $to['title'] : $to['city'],
				date => $i == 0 ? $query['forward'] : $query['back']
			);

			$stop = rand(0, 9);
			$stop = $stop < 5 ? 0 : $stop;
			$stop = $stop >= 5 && $stop < 8 ? 1 : $stop;
			$stop = $stop > 7 ? 2 : $stop;


			$response[$lastIdx]['stop'] = $response[$lastIdx]['stop'] > $stop ? $response[$lastIdx]['stop'] : $stop;

			$price = rand (3000, 5000) * ($stop + 1);
			$response[$lastIdx]['price'] += $price;

			$trip = &$response[$lastIdx]['trips'][$i];
			$trip['variants'] = array();
			$variants = rand(1, 4);

			for ($j = 0; $j < $variants; $j++) {

				$flight = array();
				for ($g = 0; $g < $stop + 1; $g++ ) {
					$depH = rand(0, 23);
					$depM = rand(0, 11) * 5;

					$trvH = rand(1, 8);
					$trvM = rand(0, 11) * 5;

					$arrH = $depH + $trvH;
					$arrM = $depM + $trvM;
					if ($arrM > 60) {
						$arrM -= 60; $arrH++;
					}
						

					$flight[] = array(
						'arrivalTime' => ($arrH < 10 ? '0'.$arrH : $arrH).':'.($arrM < 10 ? '0'.$arrM : $arrM),
						'departureTime' => ($depH < 10 ? '0'.$depH : $depH).':'.($depM < 10 ? '0'.$depM : $depM),
						'travelTime' => $trvH.':'.($trvM < 10 ? '0'.$trvM : $trvM),
						'flightNumber' => $flightNumbers[rand (0, count($companies) - 1)],
						'planeType' => $planes[rand (0, count($companies) - 1)],
						'title' => $companies[rand (0, count($companies) - 1)]
					);

					$lastFlIdx = count($flight) -1;
					if($i == 0 && $j == 0 && mb_stripos($response[$lastIdx]['title'], $flight[$lastFlIdx]['title'], 0, 'utf-8') === FALSE) {
						$response[$lastIdx]['title'] .= ($g == 0? '' : ', ').$flight[$lastFlIdx]['title'];
					}
					
					//расчет времени ожидания
					if($g > 0) {
						
						/*$lastIdx = count($flight) -1;

						$arrT = explode(':', $flight[$lastIdx -1]."" );
						$depT = explode(':', $flight[$lastIdx]."" );

						$wtH = ((int) $depT[0]) - ((int) $arrT[0]);
						$wtM = (int) $depT[1] - (int) $arrT[1];

						if ($wtM < 0) {
							$wtM += 60;
							$wth--;
						}

						$wtH = $flight[$lastIdx];*/
						$wtH = rand(0, 23);
						$wtM = rand(0, 11) * 5;
						$flight[$lastFlIdx]['waitingTime'] = $wtH.':'.($wtM < 10 ? '0'.$wtM : $wtM);
					}
				}
				$trip['variants'][] = $flight;

			}



		}
		
		if ($response[$lastIdx]['stop'] == 0) {
			unset($response[$lastIdx]['stop']);
			
		}
		$prices[] = $response[$lastIdx]['price'];

		$id++; $count++;
		
	}

	array_multisort($prices, SORT_NUMERIC, $flightSearch['response']);

	foreach($flightSearch['response'] as $flight) {
		if (!$flight['stop']) {
			$flightSearch['directOnly'][] = $flight;
		}

	}
	
	saveFlightSearch($flightSearch);
}

?>