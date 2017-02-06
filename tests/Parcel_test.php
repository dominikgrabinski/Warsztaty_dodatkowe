<?php

include '../class/Parcel.php';

$oParcel = new Parcel();

$oParcel->setUser("Dominik");
$oParcel->setSize("XXL");

var_dump($oParcel);