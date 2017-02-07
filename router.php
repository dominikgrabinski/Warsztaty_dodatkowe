<?php

include 'config/connection.php';
//Deklaracja zmiennych
$request = '';
$arrayRequest = [];
$requestClass = '';

//var_dump($_SERVER['REQUEST_METHOD']);
//var_dump($_SERVER['REQUEST_URI']);

$request = $_SERVER['REQUEST_URI'];
$arrayRequest = explode('/',$request);
if(isset($arrayRequest[6])){
    $requestClass = $arrayRequest[6];
} else {
    echo "Nie podałeś nazwy klasy";
    die();
}



//$requestClass = $arrayRequest[6];
//$aarayRequest[0] = router.php
//$arrayRequest[1] = user.php

//var_dump($request);

//var_dump($requestClass);



if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    if($_SERVER['REQUEST_URI'] == '/CL/Warsztaty_dodatkowe/warsztaty_dodatkowe/Warsztaty_dodatkowe/router.php'){
        $newUser = new User();
        
    //    echo 'Chodzi o usera';
    }else{
        
    //    echo 'Nie chodzi o usera';
    
        
    }
    
}