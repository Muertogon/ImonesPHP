<?php
use ImonesApp\DB;
use ImonesApp\Login;

if (isset($_POST['login'])) {
    session_start();
    $connection = DB::connect();
    $imone = new Login($connection);
    $imone->Validate($_POST);
} else {
    require './view/pages/login-view.php';
}
