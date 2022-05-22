require_once 'connection.php'

<?php
$sql = "SELECT title FROM product";
$query = $pdo->query($sql);
foreach ($query as $row) {
    echo 'Nom : ' . $row['title']. "\n";
}