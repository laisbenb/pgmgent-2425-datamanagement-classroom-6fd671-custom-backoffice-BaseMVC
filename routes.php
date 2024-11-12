<?php

$router->setNamespace('\App\Controllers');
$router->get('/', 'HomeController@index');
$router->get('/movie', 'MovieController@index');
$router->get('/movie/add', 'MovieController@add');
$router->post('/movie/add', 'MovieController@save');
$router->get('/movie/{id}', 'MovieController@detail');
$router->post('/movie/{id}/delete', 'MovieController@delete');

$router->get('/genre', 'GenreController@index');
$router->get('/genre/add', 'GenreController@add');
$router->post('/genre/add', 'GenreController@save');
$router->post('/genre/{id}/delete', 'GenreController@delete');

$router->get('/dashboard', 'DashboardController@index');
