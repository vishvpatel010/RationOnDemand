<?php 
//Firebase Connection file
require __DIR__.'\..\vendor\autoload.php';


use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory())

	-> withServiceAccount(__DIR__.'/rationondemand-c2d82-firebase-adminsdk-w0kai-01c722e36d.json')
	-> withDatabaseUri('https://rationondemand-c2d82-default-rtdb.firebaseio.com/');

	$database = $factory->createDatabase();
	$auth = $factory->createAuth();
?>