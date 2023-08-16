<?php


//require 'router.php';
require 'functions.php';
require 'Database.php';

$config = require 'config.php';




$db = new Database($config['database']);

$recept = $db->query("select * from recept")->fetchAll();


dd($recept);
