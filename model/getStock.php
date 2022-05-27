<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/Controller.php');

$c = Controller::getController();
$id = htmlspecialchars($_GET['id']);

// update the stock
if(isset($_GET['stock'])){
    $sql = "UPDATE products SET stock = ".htmlspecialchars($_GET['stock'])." WHERE id = ".$id.";";
    $query = $c->pdo->exec($sql);
}

// send new product stock
header('Content-Type: application/json');

echo json_encode(array(
    "id" => $id,
    "stock" => $c->get($id)->getStock()
));