<?php
use ImonesApp\DB;
use ImonesApp\Imone;

if(isset($_POST['update'])) {
    $connection = DB::connect();
    $imone = new Imone($connection);
    $imone->updateCorp($_POST['id'], $_POST['pavadinimas'], $_POST['kodas'], $_POST['pvm_kodas'], $_POST['adresas'],
        $_POST['telefonas'], $_POST['el_pastas'], $_POST['veikla'], $_POST['vadovas']);
}else{
    require './view/pages/update-corp.view.php';
}