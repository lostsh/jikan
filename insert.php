<?php
require_once('connection.php');

include_once "controller/Controller.php";
session_start();
$c = Controller::getController("products.json");

$array = ["birds", "ghosts", "fruits"];

foreach($array as $cat){
    $c->setCategorie($cat);
    // display product rows
    foreach($c->getCurrentProducts() as $p){
        $sql = "INSERT INTO `products` (`id`, `id_category`, `description`, `image`, `prix`, `stock`) VALUES (NULL, (SELECT DISTINCT category.id FROM category WHERE category.name LIKE '".$cat."'), '".$p->getDescription()."', '".$p->getUrl()."', '".$p->getPrice()."', '30');";
        $query = $pdo->exec($sql);
    }
}




// show inserted data :

$sql = "SELECT id, id_category, `description`, `image`, prix, stock FROM products";
$query = $pdo->query($sql);

echo("- id : id_category : description : image : prix : stock <br>");

foreach ($query as $row) {
    echo("- ".$row['id']." : ".$row['id_category']." : ".$row['description']." : ".$row['image']." : ".$row['prix']."€ : ".$row['stock']."units <br>");
}