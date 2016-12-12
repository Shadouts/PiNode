<?php

namespace JsonRpcBitcoin;

require_once('JsonRpcBitcoin.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

$user = ; //RPC Username
$pass = ; //RPC Password
$host = ; //RPC Server
$port = ; //RPC Port

$bitcoin = new JsonRpcBitcoin($user, $pass, $host, $port);

switch($reqType) {
	case 'getinfo': 
		echo $bitcoin->getinfo();
		break;
	case 'getblockchaininfo': 
		echo $bitcoin->getblockchaininfo();
		break;
	case 'getmempoolinfo': 
		echo $bitcoin->getmempoolinfo();
		break;
	case 'getblock': 
		echo $bitcoin->getblock($par1);
		break;
	case 'getrawtransaction': 
		echo $bitcoin->getrawtransaction($par1, 1);
		break;
	default:
		echo '{"result":null,"error":"Improper API request.","id":1}';
}

exit;

?>