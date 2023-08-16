<?php


//require 'router.php';
require 'functions.php';
require 'Database.php';

$config = require 'config.php';



$db = new Database($config['database']);




$sifra = $_GET['sifra'];

$query = "select * from recept where sifra = :sifra";

$recept = $db->query($query, [':sifra' => $sifra])->fetch();



dd($recept);
