<?php

include 'config/connection.php';
//Deklaracja zmiennych
$request = '';
$arrayRequest = [];
$requestClass = '';
$requestParam = null;

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

if(isset($arrayRequest[7])){
    $requestParam = intval($arrayRequest[7]);
} else {
    echo "nie podałeś parametru";
}

//var_dump($requestParam);
//die();

//var_dump($arrayRequest);
//var_dump($requestParam);

//$requestClass = $arrayRequest[6];
//$aarayRequest[0] = router.php
//$arrayRequest[1] = user.php

//var_dump($request);

//var_dump($requestClass);



if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    if($requestClass == 'user'){
                
        //TODO poszukać lepszego rozwiązania
        if($requestParam > 0){
            var_dump("sss");
            //Wyświetl jednego usera
            $oUser = new User();
            $userData = $oUser->loadFromDb($requestParam);
            //print_r($userData);
            var_dump($userData);
        }
            if($requestParam == null){

                   $allUsers = User::loadAllFromDb();
                   print_r(json_encode($allUsers));
                   print_r($allUsers);
            }
       
    }
    
}
    
//    if($_SERVER['REQUEST_URI'] == '/CL/Warsztaty_dodatkowe/warsztaty_dodatkowe/Warsztaty_dodatkowe/router.php'){
//        $newUser = new User();
//        
//    //    echo 'Chodzi o usera';
//    }else{
        
    //    echo 'Nie chodzi o usera';
    
        
    
    
