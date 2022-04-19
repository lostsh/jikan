<?php
include_once "../controller/Controller.php";

session_start();

$c = Controller::getController();

$_SESSION['user'] = null;

header('Location: '.(true?"/":$c.getPrevPage()) );