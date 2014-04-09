<?php 
	require('./search/airports.php');
	
	$out = findAirports($_POST['query']);

	echo json_encode( array('query' => $_POST['search'], 'data' =>$out, 'time' => $_POST['search']) );
?>