<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require "vendor/autoload.php";
use ImonesApp\Request;
use ImonesApp\Router;

require Router::load('routes.php')->direct(Request::uri());