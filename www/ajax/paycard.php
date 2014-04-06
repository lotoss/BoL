<?php 
require_once('./order/order.php');

sleep(1);
if ($_POST['orderID']) {
	if ( ! ($order = loadOrder($_POST['orderID']) ) ) {
		echo json_encode(array(error => 'Wrong OrderID') );
		return;
	}


} else {
	echo json_encode(array(error => 'Wrong OrderID') );
		return;

}



if (isset($_POST['card']) ) {
	$order['paid'] = true;
	$order['paidCheck'] = '123421341234123421342134';
	saveOrder($order);
	echo json_encode($order );
}


/*unset($order['passengers']);

echo json_encode($order);*/