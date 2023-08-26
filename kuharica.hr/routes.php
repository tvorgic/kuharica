<?php

   $router->get('/', 'index.php');
   $router->get('/about', 'about.php');
   $router->get('/contact', 'contact.php');


   $router->get('/recipes', 'recipes/index.php');//->only('auth');

   $router->get('/recipe', 'recipes/show.php');

   $router->delete('/recipe', 'recipes/destroy.php');



   $router->get('/recipe/edit', 'recipes/edit.php');

   $router->patch('/recipe', 'recipes/update.php');


   $router->get('/recipes/create', 'recipes/create.php');
   
   $router->post('/recipes', 'recipes/store.php');
   
   
   
   $router->get('/register', 'registration/create.php')->only('guest');
   $router->post('/register', 'registration/store.php')->only('guest');
   
   
   
   $router->get('/login', 'session/create.php')->only('guest');

   $router->post('/session', 'session/store.php')->only('guest');

   $router->delete('/session', 'session/destroy.php')->only('auth');
   


   
 
