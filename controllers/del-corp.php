<?php
use ImonesApp\DB;
use ImonesApp\Imone;
if(isset($_POST['delete'])){
    $connection = DB::connect();
    $imone = new Imone($connection);
    $imone->deleteCorp($_POST['id']);
}else {
    require './view/pages/del-corp.view.php';
}