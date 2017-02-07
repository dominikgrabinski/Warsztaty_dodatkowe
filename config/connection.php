<?php
require ('class/User.php');

$host = 'localhost';
$db = 'PACZKOMAT';
$user = 'root';
$password = '123';

$connection = new PDO("mysql:host=$host;dbname=$db;charset=UTF8;", $user, $password);

//FAKE TO DLETE NOW !!!!
//$connection = 'fake connection';
//END FAKE CONNECTION 
User::$connection = $connection;

//var_dump($connection);