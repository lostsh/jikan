<?php
include "../connection.php";
require_once($_SERVER['DOCUMENT_ROOT'].'/model/Product.php');

class Controller{

    private static ?Controller $that = null;

    private Array $products = array();

    //private String $previousPage = "index.php";

    public $pdo = null;

    private String $categorie = "";

    private function __construct(){
        include($_SERVER['DOCUMENT_ROOT'].'/connection.php');
        $this->pdo = $pdo;

        $sql = "SELECT products.id, category.name AS category, `description`, `image`, prix, stock FROM products INNER JOIN category ON products.id_category = category.id;";
        $query = $this->pdo->query($sql);
        
        foreach($query as $row){
            //if the category does not exist the create it
            if($this->products[$row['category']] == null) 
                $this->products[$row['category']] = array();
            // save the product
            array_push($this->products[$row['category']], new Product($row));
        }
    }

    public static function getController(){
        if(self::$that == null) self::$that = new Controller();
        return self::$that;
    }

    public function setCategorie(String $categ){ $this->categorie = $categ; }
    public function getCurrentProducts(){ return $this->products[$this->categorie]; }

    public function get(int $id){
        foreach($this->products as $cat => $products){
            foreach($products as $p){
                if($p->id == $id){
                    $sql = "SELECT stock FROM products WHERE id = ".$id.";";
                    $query = $this->pdo->query($sql);
                    foreach($query as $row) $p->setStock($row['stock']);
                    return $p;
                }
            }
        }
        return null;
    }
}