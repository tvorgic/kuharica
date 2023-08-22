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
   $router->delete('/', 'controllers/notes/destroy.php');

   
   dd($router->routes);
 
