<?php

/* return [
  '/' => 'controllers/index.php',
  '/about' => 'controllers/about.php',
  '/recipes' => 'controllers/recipes/index.php',
  '/recipe' => 'controllers/recipes/show.php',
  '/recipes/create' => 'controllers/recipes/create.php',
  '/contact' => 'controllers/contact.php',
];
   */


   $router->get('/', 'controllers/index.php');
   $router->get('/about', 'controllers/about.php');
   $router->get('/contact', 'controllers/contact.php');


   $router->get('/recipes', 'controllers/recipes/index.php');
   $router->get('/recipe', 'controllers/recipes/show.php');
   $router->get('/recipes/create', 'controllers/recipes/create.php');
   


   
 
