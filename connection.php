<?php
$dsn = "mysql:dbname=jikan;host=localhost";
$pdo = new PDO($dsn, 'root', '');
global $dsn;
global $pdo;