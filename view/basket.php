<?php
include_once "../controller/Controller.php";
session_start();

if(!isset($_SESSION['user'])) header('Location: '.(isset($_SESSION['prevPage'])?$_SESSION['prevPage']:"/") );

$c = Controller::getController();

$cat = htmlspecialchars($_GET['cat']);
$i = htmlspecialchars( $_GET['i']);
$action = htmlspecialchars( $_GET['action'] );

$prod = $c->get($cat, $i);

if($action!=null && ($action=='ADD' || $action=='DEL') && $prod!=null){
    if(!isset($_SESSION['basket'])) $_SESSION['basket'] = array();
    
    if($_SESSION['basket'][$cat][$i] == null){
        $_SESSION['basket'][$cat][$i]['prod'] = $prod;
        $_SESSION['basket'][$cat][$i]['qte'] = 0;
    }
    if(($_SESSION['basket'][$cat][$i]['qte'] > 0 && $action=='DEL') ||
        ($_SESSION['basket'][$cat][$i]['qte'] < 30 && $action=='ADD'))
        $_SESSION['basket'][$cat][$i]['qte'] += ($action=='ADD'?1:-1);
}

// action done go back to the previous page
header('Location: '.(isset($_SESSION['prevPage'])?$_SESSION['prevPage']:"/") );