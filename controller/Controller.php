<?php
require_once "../model/Product.php";

class Controller{

    private static ?Controller $that = null;

    private Array $products = array();

    //private String $previousPage = "index.php";

    private String $categorie = "";

    private function __construct(String $file){
        $data = json_decode(file_get_contents($file), true);

        foreach($data['products'] as $key => $values){
            $this->products[$key] = array();
            foreach($values as $p){
                array_push($this->products[$key], new Product($p));
            }
        }
    }

    public static function getController(String $file = "../products.json"){
        if(self::$that == null) self::$that = new Controller($file);
        return self::$that;
    }

    public function setCategorie(String $categ){ $this->categorie = $categ; }
    public function getCurrentProducts(){ return $this->products[$this->categorie]; }

    public function get(String $cat, int $index){ return $this->products[$cat][$index]; }
}