<?php
use ImonesApp\DB;
use ImonesApp\Imone;
require './view/pages/this-corp.view.php';

if(isset($_POST['show'])){
    $connection = DB::connect();
    $imone = new Imone($connection);
    $first = reset($_POST);
    echo "<table>";
    foreach ($imone->searchCorp($first) as $res) {
        echo "<tr>";
        echo "<td>" . $res['pavadinimas'] . "</td>";
        echo "<td>" . $res['kodas'] . "</td>";
        echo "<td>" . $res['pvm_kodas'] . "</td>";
        echo "<td>" . $res['adresas'] . "</td>";
        echo "<td>" . $res['telefonas'] . "</td>";
        echo "<td>" . $res['el_pastas'] . "</td>";
        echo "<td>" . $res['veikla'] . "</td>";
        echo "<td>" . $res['vadovas'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}



