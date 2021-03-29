<style>
    table,td,tr{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
</style>
<?php
use ImonesApp\DB;
use ImonesApp\Imone;
if(isset($_POST['search'])) {
    $connection = DB::connect();
    $imone = new Imone($connection);
    echo "<table>";
        foreach ($imone->searchCorp($_POST['pavadinimas']) as $res){
            echo "<tr>";
            echo "<td>".$res['pavadinimas']."</td>";
            echo "<td>".$res['kodas']."</td>";
            echo "<td>".$res['pvm_kodas']."</td>";
            echo "<td>".$res['adresas']."</td>";
            echo "<td>".$res['telefonas']."</td>";
            echo "<td>".$res['el_pastas']."</td>";
            echo "<td>".$res['veikla']."</td>";
            echo "<td>".$res['vadovas']."</td>";
            echo "</tr>";
        }
}else{
    require './view/pages/search-corp.view.php';
}
