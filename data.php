<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "djurkul");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$sql = "SELECT * FROM `hundar` WHERE 1";

//    echo $sql;
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $hundar = $stmt->fetch();
    
    $hundar["hundar"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($hundar);
?>