<?php

// fichier de liaison à la base de données
$database_host = 'localhost';
$database_port = '3306';
$database_dbname = 'bbd_projet';
$database_user = 'pma';
$database_password = 'password';
$database_charset = 'UTF8';
$database_options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];
try {
    $pdo = new PDO(
        'mysql:host=' . $database_host .
        ';port=' . $database_port .
        ';dbname='. $database_dbname .
        ';charset=' . $database_charset,
        $database_user,
        $database_password,
        $database_options
    );
} catch (PDOException $e) {
    echo 'Echec lors de la connexion :' . $e->getMessage();
}
