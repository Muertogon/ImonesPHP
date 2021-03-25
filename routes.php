<?php
use ImonesApp\Router;
$router= new Router();
$router->define([
    '/'=>'controllers/add-corp.php',
    '/update'=>'controllers/update-corp.php',
    '/delete'=>'controllers/del-corp.php',
    '/all'=>'controllers/all-corp.php',
    '404'=>'controllers/404.php'
]);