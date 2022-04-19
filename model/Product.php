<?php

require_once "Salable.php";

/**
 * This class represent a salable product
 */
class Product extends Salable{

    private String $url = "";

    private String $description = "";

    public function __construct(array $arguments = array()){
        if(!empty($arguments)){
            foreach ($arguments as $property => $argument) {
                $this->{$property} = $argument;
            }
            if($this->image != null && $this->url == ""){
                $this->url = $this->image;
                unset($this->image);
            }
        }
    }

    public function getUrl(){ return $this->url; }

    public function getDescription(){ return $this->description; }

    /**
     * Get the product under the form of a table row
     */
    public function __toString(){
        return "
        <tr>
            <td><img src='".$this->url."' alt='Product figure'></td>
            <td>".$this->description."</td>
            <td>".$this->getPrice()." k$</td>
        </tr>";
    }
}