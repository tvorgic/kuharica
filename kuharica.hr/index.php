<?php


//require 'router.php';
require 'functions.php';
require 'Database.php';




$db = new Database();

$recept = $db->query("select * from recept")->fetchAll(PDO::FETCH_ASSOC);


dd($recept);
