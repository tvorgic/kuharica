<?php

   $router->get('/', 'controllers/index.php');
   $router->get('/about', 'controllers/about.php');
   $router->get('/contact', 'controllers/contact.php');


   $router->get('/recipes', 'controllers/recipes/index.php');//->only('auth');
   $router->get('/recipe', 'controllers/recipes/show.php');
   $router->delete('/recipe', 'controllers/recipes/destroy.php');



   $router->get('/recipe/edit', 'controllers/recipes/edit.php');
   $router->patch('/recipe', 'controllers/recipes/update.php');


   $router->get('/recipes/create', 'controllers/recipes/create.php');
   $router->post('/recipes', 'controllers/recipes/store.php');
   
   
   
   $router->get('/register', 'controllers/registration/create.php')->only('guest');
   $router->post('/register', 'controllers/registration/store.php');
   
   
   
   $router->get('/login', 'controllers/sessions/create.php')->only('guest');
   $router->post('/session', 'controllers/session/store.php')->only('guest');
   


   
 
