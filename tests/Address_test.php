<?php

include '../class/Address.php';

$oAddress = new Address();

$oAddress->setApartmentNumber(92);
$oAddress->setCity('Myszków');
$oAddress->setStreet('Piękna');
$oAddress->setZipCode("42-300");

var_dump($oAddress);


