<?php
use PDO;
global $pdo;


try{
    $pdo = new PDO("mysql:dbname=modelo_mvc;host=localhost", "root", "");
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
