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
            //$data=$this->pdo->prepare("SELECT COUNT(*) FROM `reg` WHERE `email`=:email AND `password`=:password");
            //$data->bindParam(':email',$this->email,PDO::PARAM_STR);
            $data2=$this->pdo->prepare("SELECT `password` FROM `reg` WHERE `email`=:email");
            $data2->bindParam(':email',$this->email,PDO::PARAM_STR);
            //$data->bindParam(':password',$this->password,PDO::PARAM_STR);
            //$data->execute();
            $data2->execute();
            $pass = $data2->fetchColumn();
            //$dataa = $data->fetchColumn();
            $verify = password_verify($this->password, $pass);
            //em: nein  , pass: welp
            if($verify == True){
                $_SESSION['email'] = 1;
                header('Location:/ImonesPHPwitSQL/create');
            }else{
                header('Location:/ImonesPHPwitSQL/login');
                echo "Neteisingai ivesti duomenys";
            }
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

}