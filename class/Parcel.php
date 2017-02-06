<?php

class Parcel {
    private $id;
    private $user;
    private $size;
    
    public function __construct() {
        $this->id = -1;
        $this->user = '';
        $this->size = '';
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setUser($user){
        $this->user = $user;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function setSize($size){
        $this->size = $size;
    }
    
    public function getSize(){
        return $this->size;
    }
}

