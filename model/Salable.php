<?php

/**
 * This class represent a salable object
 */
class Salable{

    protected int $price = -1;

    public function __construct(int $price){
        if(!isset($price)){
            $this->price = $price;
        }
    }

    public function getPrice(){ return $this->price; }

    protected function setPrice(int $price){ $this->price = $price; }

    public function __toString(){
        return "Price : ".$this->price;
    }
}