<?php 
require_once('./order/order.php');

sleep(1);
if ($_GET['orderID']) {
	if ( ! ($order = loadOrder($_GET['orderID']) ) ) {
		echo json_encode(array(error => 'Wrong OrderID') );
		return;
	}


} else {
	$order = createOrder($_POST['flightID']);
	saveOrder($order);

}

if ($_GET['payCash'] == true && !isset($order['payCashID']) ) {
	$order['payCashID'] = rand(12345, 34567).rand(67890, 89012).rand(12345, 67890);
	saveOrder($order);
}


unset($order['passengers']);

echo json_encode($order);