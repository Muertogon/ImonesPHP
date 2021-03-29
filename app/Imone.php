<?php
namespace ImonesApp;
use PDO;
class Imone extends DB {
    protected $pdo;
    private $pavadinimas;
    private $kodas;
    private $pvm_kodas;
    private $adresas;
    private $telefonas;
    private $el_pastas;
    private $veikla;
    private $vadovas;
    public function __construct($pdo)
    {
        $this->pdo= $pdo;

    }
    public function createCorp($corp){
        $this->pavadinimas=$corp['pavadinimas'];
        $this->kodas=$corp['kodas'];
        $this->pvm_kodas=$corp['pvm_kodas'];
        $this->adresas=$corp['adresas'];
        $this->telefonas=$corp['telefonas'];
        $this->el_pastas=$corp['el_pastas'];
        $this->veikla=$corp['veikla'];
        $this->vadovas=$corp['vadovas'];
        $this->insertCorp();
    }
    public function insertCorp(){
        try{
            $query="INSERT INTO `imones` (`pavadinimas`,`kodas`,`pvm_kodas`,`adresas`,`telefonas`,`el_pastas`,`veikla`,`vadovas`) 
                VALUE (:pavadinimas,:kodas,:pvm_kodas,:adresas,:telefonas,:el_pastas,:veikla,:vadovas)";
            $stmt=$this->pdo->prepare($query);
            $stmt->bindParam(':pavadinimas',$this->pavadinimas,PDO::PARAM_STR);
            $stmt->bindParam(':kodas',$this->kodas,PDO::PARAM_STR);
            $stmt->bindParam(':pvm_kodas',$this->pvm_kodas,PDO::PARAM_STR);
            $stmt->bindParam(':adresas',$this->adresas,PDO::PARAM_STR);
            $stmt->bindParam(':telefonas',$this->telefonas,PDO::PARAM_STR);
            $stmt->bindParam(':el_pastas',$this->el_pastas,PDO::PARAM_STR);
            $stmt->bindParam(':veikla',$this->veikla,PDO::PARAM_STR);
            $stmt->bindParam(':vadovas',$this->vadovas,PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/ImonesPHPwitSQL/all');
        } catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
    public function allCorps(){
        try{
        $data=$this->pdo->prepare("SELECT * FROM imones");
            $data->execute();
            return $sql = $data->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $e){
            echo $e->getMessage();
        }
    }
    public function deleteCorp($id){
        try{
            $stmt=$this->pdo->prepare("DELETE FROM imones WHERE `id`=:id");
            $stmt->bindValue(":id",$id,PDO::PARAM_INT);
            $stmt->execute();
            header('Location:/ImonesPHPwitSQL/all');
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }
    public function updateCorp($id, $pavadinimas, $kodas, $pvm_kodas, $adresas, $telefonas, $el_pastas, $veikla, $vadovas){
        try {
            $data=$this->pdo->prepare("UPDATE imones SET `pavadinimas`=:pavadinimas, `kodas`=:kodas, `pvm_kodas`=:pvm_kodas,
            `adresas`=:adresas, `telefonas`=:telefonas, `el_pastas`=:el_pastas, `veikla`=:veikla, `vadovas`=:vadovas WHERE `id`=:id");
            $data->bindValue(":id",$id,PDO::PARAM_INT);
            $data->bindParam(':pavadinimas',$pavadinimas,PDO::PARAM_STR);
            $data->bindParam(':kodas',$kodas,PDO::PARAM_STR);
            $data->bindParam(':pvm_kodas',$pvm_kodas,PDO::PARAM_STR);
            $data->bindParam(':adresas',$adresas,PDO::PARAM_STR);
            $data->bindParam(':telefonas',$telefonas,PDO::PARAM_STR);
            $data->bindParam(':el_pastas',$el_pastas,PDO::PARAM_STR);
            $data->bindParam(':veikla',$veikla,PDO::PARAM_STR);
            $data->bindParam(':vadovas',$vadovas,PDO::PARAM_STR);
            $data->execute();
            if($data->rowcount() >0 ) {
                echo "Rezultatu Nera";
            }
            header('Location:/ImonesPHPwitSQL/create');
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }
    public function searchCorp($name){
        try {
            $data=$this->pdo->prepare("SELECT pavadinimas, kodas, pvm_kodas, adresas, telefonas, el_pastas, veikla, vadovas  FROM imones WHERE 
                                            `pavadinimas`=:pavadinimas");
            $data->bindValue(":pavadinimas",$name, PDO::PARAM_STR);
            $data->execute();
            if ($data->rowCount() > 0) {
                return $sql = $data->fetchAll(PDO::FETCH_ASSOC);
            }else{
                echo 'Nera irasu';
            }
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }



}
