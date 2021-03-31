<?php
use ImonesApp\Router;
$router= new Router();
$router->define([
    '/'=>'controllers/search-corp.php',
    '/create'=>'controllers/add-corp.php',
    '/update'=>'controllers/update-corp.php',
    '/delete'=>'controllers/del-corp.php',
    '/corp'=>'controllers/this-corp.php',
    '/reg'=>'controllers/register.php',
    '/login'=>'controllers/login.php',
    '/all'=>'controllers/all-corp.php',
    '404'=>'controllers/404.php'
]);