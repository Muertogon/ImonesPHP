<?php

namespace ImonesApp;
use PDO;
class Login extends DB{
    protected $pdo;
    private $email;
    private $password;
    public function __construct($pdo)
    {
        $this->pdo= $pdo;

    }
    public function Validate($user){
        $this->email=$user['email'];
        $this->password=$user['password'];
        $this->Validate2();
    }
    public function Validate2(){
        try{
            $data=$this->pdo->prepare("SELECT COUNT(*) FROM `reg` WHERE `email`=:email AND `password`=:password");
            $data->bindParam(':email',$this->email,PDO::PARAM_STR);
            //$e = password_hash($this->password, PASSWORD_BCRYPT);
            $data->bindParam(':password',$this->password,PDO::PARAM_STR);
            //$val = password_verify($this->password, $e);
            $data->execute();
            $dataa = $data->fetchColumn();
            if($dataa == 1){
                $_SESSION['email'] = 1;
                header('Location:/ImonesPHPwitSQL/create');
            }else{
                header('Location:/ImonesPHPwitSQL/login');
            }
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

}