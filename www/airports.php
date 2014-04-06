<?php 
	$query = $_POST['query'];
	$time = $_POST['time'];

	$data = array(
		array('MOW', 'Москва', 'Россия'),
		array('MSX', 'Моссенджо', 'Конго'),
		array('OSM', 'Мосул', 'Ирак'),
		array('ODS', 'Одесса', 'Украина'),
		array('IEV', 'Киев', 'Украина'),
		array('LED', 'Санкт-Петербург', 'Россия')
	);

	

	$req = array(
		'query' => $query,
		'time' => $time,
		''
	);

	foreach ($data as $item) {
		foreach ($item as $value) {
			if (strpos($value, $query) > -1) {
				
				break;
			}
		}
		
	}

	$resp = array(
		'success' => true,
		'data' => $req
	);


?>