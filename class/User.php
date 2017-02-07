<?php

/*
 * Class reprezent one user
 * TODO Validate seter
 * 
 */

class User {
    private $id;
    private $addressId;
    private $name;
    private $surname;
    private $credits;
    private $hashedPassword;
    static public $connection;
    
    public function __construct() {
        $this->id = -1;
        $this->addressId = null;
        $this->name = '';
        $this->surname = '';
        $this->credits = null;
        $this->hashedPassword = '';
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getAddressId() {
        return $this->addressId;
    }
    
    public function setAddressId($addressId){
        $this->addressId = $addressId;
        return true;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name = $name;
        return true;
    }
    
    public function getSurname(){
        return $this->surname;
    }
    
    public function setSurname($surname){
        $this->surname = $surname;
        return true;
    }
    
        public function getCredits(){
        return $this->credits;
    }
       
    public function setCredits($ammountCredits){
        $this->credits = $ammountCredits;
    }
    
    public function getHashedPassword(){
        return $this->hashedPassword;
    }
    
    public function setHashedPassword($password){
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $this->hashedPassword = $hashedPassword;
        return true;
    }
    
    public function loadFromDb($idUser){
       $sql = "SELECT * FROM user WHERE id = $idUser";
       
        if($result = self::$connection->query($sql)){
            $row = $result->fetch(PDO::FETCH_ASSOC);
            
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->surname = $row['surname'];
            $this->credits = $row['credits'];
            $this->hashedPassword = $row['pass'];
            $this->addressId = $row['address_id'];
            
            
            //Not true becouse usage on view - ze względu na użycie widoku
            return $row;
            
        } else {
            
            return false;
        }
        
    }
    
//    static public function loadAllFromDb($idUser){
//       $sql = "SELECT * FROM user ";
//       
//        if($result = self::$connection->query($sql)){
//            $row = $result->fetch(PDO::FETCH_ASSOC);
//            
//            $this->id = $row['id'];
//            $this->name = $row['name'];
//            $this->surname = $row['surname'];
//            $this->credits = $row['credits'];
//            $this->hashedPassword = $row['pass'];
//            $this->addressId = $row['address_id'];
//            
//            
//            //Not true becouse usage on view - ze względu na użycie widoku
//            return $row;
//            
//        } else {
//            
//            return false;
//        }
//        
//    }
    
}

