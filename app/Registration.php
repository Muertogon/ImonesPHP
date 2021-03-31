<?php
namespace ImonesApp;
use PDO;
class Registration extends DB{
    protected $pdo;
    private $email;
    private $password;
    public function __construct($pdo)
    {
        $this->pdo= $pdo;

    }
    public function createUser($user){
        $this->email=$user['email'];
        $this->password=$user['password'];
        $this->insertUser();
    }
    public function insertUser(){
        try{
            $query="INSERT INTO `reg` (`email`,`password`) 
                VALUE (:email,:password)";
            $val=("SELECT COUNT(*) FROM `reg` WHERE `email`=:email");
            $val2=$this->pdo->prepare($val);
            $val2->bindParam(':email',$this->email,PDO::PARAM_STR);
            $val2->execute();
            $no = $val2->fetchColumn();
            $stmt=$this->pdo->prepare($query);
            $stmt->bindParam(':email',$this->email,PDO::PARAM_STR);
            $pass = password_hash($this->password, PASSWORD_BCRYPT);
            $stmt->bindParam(':password',$pass,PDO::PARAM_STR);
            if($no != 0){
                echo "Toks email jau naudojamas";
            }else{
                $stmt->execute();
                header('Location:/ImonesPHPwitSQL/login');
            }
        } catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
}