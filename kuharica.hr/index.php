<?php


//require 'router.php';
require 'functions.php';

$dsn = "mysql:host=localhost;port=3306;dbname=kuharica;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);


$statement = $pdo->prepare("select * from recept");
$statement->execute();

$recepti = $statement->fetchAll();

dd($recepti);




