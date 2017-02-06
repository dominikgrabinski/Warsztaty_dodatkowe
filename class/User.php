<?php

/*
 * Class reprezent one user
 * TODO Validate seter
 * 
 */

class User {
    private $id;
    private $address;
    private $name;
    private $surname;
    private $credits;
    private $hashedPassword;
    static public $connection;
    
    public function __construct() {
        $this->id = -1;
        $this->address = '';
        $this->name = '';
        $this->surname = '';
        $this->credits = null;
        $this->hashedPassword = '';
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getAddress() {
        return $this->address;
    }
    
    public function setAddress($address){
        $this->address = $address;
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
    
}

