<?php
use ImonesApp\DB;
use ImonesApp\Imone;

if(isset($_POST['send'])){
    $connection = DB::connect();
    $imone = new Imone($connection);
    $imone->createCorp($_POST);
}else {
    require './view/pages/add-corp.view.php';
}