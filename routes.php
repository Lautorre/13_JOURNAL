<?php

// Create Router instance
$router = new Router();

$router->get('add', 'ArticlesController@ajout' );
$router->post('add', 'ArticlesController@save');
$router->get('article', 'ArticlesController@show');

// Run it!
$router->run();