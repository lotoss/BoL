<?php 

$airports = array(
	array (
		title => 'Домодедово',
		IATA => 'DME',
		city => 'Москва',
		country => 'Россия'
	),
	array (
		title => 'Шереметьево',
		IATA => 'SVO',
		city => 'Москва',
		country => 'Россия'
	),
	array (
		title => 'Внуково',
		IATA => 'VKO',
		city => 'Москва',
		country => 'Россия'
	),
	array (
		IATA => 'MOW',
		city => 'Москва',
		country => 'Россия'
	),
	array (
		title => 'Пулково',
		IATA => 'LED',
		city => 'Санкт-Петербург',
		country => 'Россия'
	),
	array (
		title => 'Кольцово',
		IATA => 'SVX',
		city => 'Екатеринбург',
		country => 'Россия'
	),
	array (
		title => 'Толмачёво',
		IATA => 'OVB',
		city => 'Новосибирск',
		country => 'Россия'
	),
	array (
		title => 'Сочи',
		IATA => 'AER',
		city => 'Сочи',
		country => 'Россия'
	),
	array (
		title => 'Пашковский',
		IATA => 'KRR',
		city => 'Краснодар',
		country => 'Россия'
	),

	array (
		title => 'Уфа',
		IATA => 'UFA',
		city => 'Уфа',
		country => 'Россия'
	),
	array (
		title => 'Емельяново',
		IATA => 'KJA',
		city => 'Красноярск',
		country => 'Россия'
	),
	array (
		title => 'Курумоч',
		IATA => 'KUF',
		city => 'Самара',
		country => 'Россия'
	),
	array (
		title => 'Хабаровск',
		IATA => 'KHV',
		city => 'Хабаровск',
		country => 'Россия'
	),
	array (
		IATA => 'KYV',
		city => 'Киев',
		country => 'Украина'
	),
	array (
		title => 'Борисполь',
		IATA => 'KBP',
		city => 'Киев',
		country => 'Украина'
	),
	array (
		title => 'Киев-Жуляны',
		IATA => 'IEV',
		city => 'Киев',
		country => 'Украина'
	)
);


function findAirports ($str) {
	global $airports;
	$out = array();
 	
	foreach ($airports as $airport) {
		if (mb_stripos($airport['title'], $str, 0, 'utf-8') === 0 
			|| mb_stripos($airport['IATA'], $str, 0, 'utf-8' ) === 0 
			|| mb_stripos($airport['city'], $str, 0, 'utf-8' )  === 0 ) {
			
			$out[] = $airport;
		}
	}

	return $out;

}










?>
