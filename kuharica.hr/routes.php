<?php

   $router->get('/', 'controllers/index.php');
   $router->get('/about', 'controllers/about.php');
   $router->get('/contact', 'controllers/contact.php');


   $router->get('/recipes', 'controllers/recipes/index.php');
   $router->get('/recipe', 'controllers/recipes/show.php');
   $router->delete('/recipe', 'controllers/recipes/destroy.php');


   $router->get('/recipes/create', 'controllers/recipes/create.php');
   $router->post('/recipes', 'controllers/recipes/store.php');
   


   
 
