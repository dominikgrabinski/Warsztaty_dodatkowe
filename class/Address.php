<?php

class Address {
    
    private $id;
    private $city;
    private $zipCode;
    private $street;
    private $apartmentNumber;
    
    public function __construct() {
        $this->id = -1;
        $this->apartmentNumber = '';
        $this->city = '';
        $this->street = '';
        $this->zipCode = '';
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setApartmentNumber($apartmentNumber){
        $this->apartmentNumber = $apartmentNumber;
    }
    
    public function getApartmentNumber(){
        return $this->apartmentNumber;
    }

    public function setCity($city){
        $this->city = $city;
    }
    
    public function getCity(){
        return $this->city;
    }    
    
    public function setStreet($street){
        $this->street = $street;
    }
    
    public function getstreet(){
        return $this->street;
    }
    
    public function setZipCode($zipCode){
        $this->zipCode = $zipCode;
    }
    
    public function getZipCode(){
        return $this->zipCode;
    }
    
    
}



