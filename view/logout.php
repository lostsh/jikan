<?php
include_once "../controller/Controller.php";

session_start();

$c = Controller::getController();

$_SESSION['user'] = null;
$_SESSION['basket'] = null;

header('Location: '.(isset($_SESSION['prevPage'])?$_SESSION['prevPage']:"/") );