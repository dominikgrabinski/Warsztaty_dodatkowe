<?php

class Size {
    private $id;
    private $size;
    private $credits;
    
    public function __construct() {
        $this->id = -1;
        $this->size = '';
        $this->credits = '';
    }
    
     public function getId(){
        return $this->id;
    }
    
    public function setSize($size){
        $this->size = $size;
    }
    
    public function getSize(){
        return $this->size;
    }
    
    public function setCredits($credits){
        $this->credits = $credits;
    }
    
    public function getCredits(){
        return $this->credits;
    }
    
    
}
