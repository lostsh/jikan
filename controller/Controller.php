<?php
include "../connection.php";
require_once($_SERVER['DOCUMENT_ROOT'].'/model/Product.php');

class Controller{

    private static ?Controller $that = null;

    private Array $products = array();

    //private String $previousPage = "index.php";

    private $pdo = null;

    private String $categorie = "";

    private function __construct(){
        include "../connection.php";
        $this->pdo = $pdo;

        $sql = "SELECT category.name AS category, `description`, `image`, prix, stock FROM products INNER JOIN category ON products.id_category = category.id;";
        $query = $this->pdo->query($sql);

        foreach($query as $row){
            //if the category does not exist the create it
            if($this->products[$row['category']] == null) 
                $this->products[$row['category']] = array();
            // save the product
            array_push($this->products[$row['category']], new Product($row));
        }
    }

    /*
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
    }*/

    public static function getController(){
        if(self::$that == null) self::$that = new Controller();
        return self::$that;
    }

    public function setCategorie(String $categ){ $this->categorie = $categ; }
    public function getCurrentProducts(){ return $this->products[$this->categorie]; }

    public function get(String $cat, int $index){ return $this->products[$cat][$index]; }
}