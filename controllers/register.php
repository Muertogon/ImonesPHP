<?php
use ImonesApp\DB;
use ImonesApp\Registration;

if (isset($_POST['register'])) {
    $connection = DB::connect();
    $imone = new Registration($connection);
    $imone->createUser($_POST);
} else {
    require './view/pages/register-view.php';
}