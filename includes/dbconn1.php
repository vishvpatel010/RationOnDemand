<?php 
//Firebase Connection file 2
require __DIR__.'\..\vendor\autoload.php';


use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory())

	-> withServiceAccount(__DIR__.'/rationondemand1-firebase-adminsdk-g3fbl-e64b13f8be.json')
	-> withDatabaseUri('https://rationondemand1-default-rtdb.firebaseio.com/');

	$database = $factory->createDatabase();
	$auth = $factory->createAuth();
?>