<?php

$app->router->get('', 'HomeController', 'index');
$app->router->get('home', 'HomeController', 'index');
$app->router->get('home/add/{id}', 'HomeController', 'index');

