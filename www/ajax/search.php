<?php 
	
	require('./search/airports.php');
	require('./search/flights.php');
	

	//алгоритм
	if ($_GET['modelID']) { 
		$modelFind = false;
	}
	//Если в запросе есть sessionID
	if ($_GET['sessionID']) {
		//пытаемся считать файл хранящий данные о поиске с sessionID
		//если такого файла нет шлем ответ с ошибкой, что должно привести к редиректу на home страницу
		//если есть то загружаем данные
		if( !( $flightSearch = loadFlightSearch($_GET['sessionID']) ) )
			echo json_encode( array('error'=>'Wrong SessionID') );

	} else {
		//Если в запросе нет sessionID, то генерируем новый объект 
		$flightSearch = newFlightSearch();

	}

	//$_GET['directOnly'];
	//из объекта выбираем ответы соотв доп параметрам
	
	$response = array();
	$fltIdx = 0;
	if($_GET['page'])
		$fltIdx = $_GET['page'] * 10 - 10;
	
	if ($_GET['directOnly'] === 'true') {

		
		while (count($response) < 10 && $fltIdx < count($flightSearch['directOnly']) ) {
			$flt = $flightSearch['directOnly'][$fltIdx];

			$response[] = $flt;
			if ( !$_GET['modelID'] || $flt['id'] != $_GET['modelID'] )
				unset ($response[count($response) - 1]['trips']);
			if ($_GET['modelID'] && $flt['id'] == $_GET['modelID']) 
				$modelFind = true;
			
			$fltIdx++;
		}
	} else {
		while (count($response) < 10 && $fltIdx < $flightSearch['lenght'] ) {
		
			//выбираем ответы
			$flt = $flightSearch['response'][$fltIdx];
			
			$response[] = $flt;
			
			if ( !$_GET['modelID'] || $flt['id'] != $_GET['modelID'] )
				unset ($response[count($response) - 1]['trips']);
			if ($_GET['modelID'] && $flt['id'] == $_GET['modelID']) 
				$modelFind = true;
			
			$fltIdx++;
		}
	}
	
	
	
	

	//возвращаем необходимый результат
	if ($_GET['sessionID']) {
		$query = $flightSearch['query'];
		//unset ($query['sessionID']);
	} else {
		$query = array(sessionID => $flightSearch['query']['sessionID']);
	}
	
	if ($_GET['modelID'] && !$modelFind) { 
		foreach ($flightSearch['response'] as $flight) {
			if ($flight['id'] == $_GET['modelID']) {
				$response[] = $flight;
			}
		}
	}

	sleep(rand(1, 2)/ 2 + 1);
	echo json_encode( 
		array(
			query =>$query, 
			response =>$response, 
			length => $_GET['directOnly'] === 'true' ? count($flightSearch['directOnly']) : $flightSearch['lenght'] 
		) 
	);

	

?>