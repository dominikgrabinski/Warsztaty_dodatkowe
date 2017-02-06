<?php

include '../class/User.php';

$oUser = new User();

var_dump($oUser);

//Back in future
if ($oUser instanceof User){
    echo 'Instance of User';
}else{
    echo 'Instance is not User';
}

//TODO tests get and set function
//TODO Write function to tests

