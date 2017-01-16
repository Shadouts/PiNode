<?php

namespace JsonRpcBitcoin;

require_once('JsonRpcBitcoin.php');

$reqType = null;

if(isset($_GET['req'])) {
	$reqType = trim(stripslashes(htmlentities(strip_tags($_GET['req']))));
}

if(isset($_GET['par1'])) {
	$par1 = trim(stripslashes(htmlentities(strip_tags($_GET['par1']))));
}

if(isset($_GET['par2'])) {
	$par1 = trim(stripslashes(htmlentities(strip_tags($_GET['par2']))));
}

$user = '';  //JSON-RPC username.
$pass = ''; //JSON-RPC Password.
$host = ''; //Hostname or IP address.
$port = ''; //Port number.

$bitcoin = new JsonRpcBitcoin($user, $pass, $host, $port);

switch($reqType) {
	case 'getblockchaininfo': 
		echo $bitcoin->getblockchaininfo();
		break;
	case 'getmempoolinfo': 
		echo $bitcoin->getmempoolinfo();
		break;
	case 'getblock': 
		echo $bitcoin->getblock($par1);
		break;
	case 'getnetworkinfo': 
		echo $bitcoin->getnetworkinfo();
		break;
	case 'getpeerinfo': 
		echo $bitcoin->getpeerinfo();
		break;
	case 'getrawtransaction': 
		echo $bitcoin->getrawtransaction($par1, 1);
		break;
	default:
		echo '{"result":null,"error":"Improper API request.","id":1}';
}

exit;

?>
