<?php

$heading = 'Create recipe';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  dd($_POST);
}



require 'views/recipe-create.view.php';