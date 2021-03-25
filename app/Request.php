<?php
namespace ImonesApp;

class Request {
    public static function uri(){
        return str_replace("/ImonesPHPwitSQL","",trim($_SERVER['REQUEST_URI']));
    }
}