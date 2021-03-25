<?php
use ImonesApp\DB;
use ImonesApp\Imone;
require './view/pages/all-corp.view.php';

$connection = DB::connect();
$imone = new Imone($connection);
$imone->allCorps();
?>
<style>
    table,td,tr{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
    .o{
        color: white;
        background-color: #274283;
    }
</style>
<body>
    <table>
        <tr class="o">
            <td>ID</td>
            <td>PAVADINIMAS</td>
            <td>KODAS</td>
            <td>PVM KODAS</td>
            <td>ADRESAS</td>
            <td>TELEFONAS</td>
            <td>EL PASTAS</td>
            <td>VEIKLA</td>
            <td>VADOVAS</td>
        </tr>
        <?php foreach ($imone->allCorps() as $row){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['pavadinimas']."</td>";
            echo "<td>".$row['kodas']."</td>";
            echo "<td>".$row['pvm_kodas']."</td>";
            echo "<td>".$row['adresas']."</td>";
            echo "<td>".$row['telefonas']."</td>";
            echo "<td>".$row['el_pastas']."</td>";
            echo "<td>".$row['veikla']."</td>";
            echo "<td>".$row['vadovas']."</td>";
            echo "</tr>";
        } ?>
    </table>
</body>
