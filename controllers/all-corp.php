<?php
use ImonesApp\DB;
use ImonesApp\Imone;


$connection = DB::connect();
$imone = new Imone($connection);
$imone->allCorps();
require './view/pages/all-corp.view.php';

foreach ($imone->allCorps() as $row){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo '<td class="col align-self-center">';
    echo "<form action=/ImonesPHPwitSQL/corp method='post'>";
    echo '<input type=hidden name="'.$row['pavadinimas'].'"value="'.$row['pavadinimas'].'">';
    echo '<button type="submit" class="form-control" id="show" name="show">'.$row['pavadinimas'].'</button>';
    echo "</form>";
    echo "</td>";
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
