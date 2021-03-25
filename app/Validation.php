<?php
namespace ImonesApp;
class Validation{
    private static $errors = [];
    public static function validate($data){
        self::validatePav($data['pavadinimas']);
        self::validateKodas($data['kodas']);
        self::validatePvm($data['pvmkodas']);
        self::validateAdress($data['adresas']);
        self::validateTel($data['telefonas']);
        self::validateEmail($data['email']);
        self::validateVeikla($data['veikla']);
        self::validateVadovas($data['vadovas']);
        return self::$errors;
    }
    public static function validatePav($pav)
    {
        if (empty($pav)) {
            Validation::$errors['pavadinimas'] = "Please input";
        }
    }
    public static function validateKodas($kodas)
    {
        if (empty($kodas)) {
            Validation::$errors['kodas'] = "Please input";
        }
    }
    public static function validatePvm($pvm)
    {
        if (empty($pvm)) {
            Validation::$errors['pvm'] = "Please input";
        }
    }
    public static function validateAdress($adresas)
    {
        if (empty($adresas)) {
            Validation::$errors['adresas'] = "Please input";
        }
    }
    public static function validateTel($telefonas)
    {
        if (empty($telefonas)) {
            Validation::$errors['telefonas'] = "Please input";
        }
    }
    public static function validateEmail($email)
    {
        if (empty($email)) {
            Validation::$errors['email'] = "Please input";
        }
    }
    public static function validateVeikla($veikla)
    {
        if (empty($veikla)) {
            Validation::$errors['veikla'] = "Please input";
        }
    }
    public static function validateVadovas($vadovas)
    {
        if (empty($vadovas)) {
            Validation::$errors['vadovas'] = "Please input";
        }
    }
}