<?php
require ('class/User.php');

$host = '';
$db = '';
$user = '';
$password = '';

//$connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);

//FAKE TO DLETE NOW !!!!
$connection = 'fake connection';
//END FAKE CONNECTION 
User::$connection = $connection;
