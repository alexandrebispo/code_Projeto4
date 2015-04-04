<?php

ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

session_start();
session_cache_expire(120);

require_once(__DIR__ . "/password.php");
require_once(__DIR__ . "/../../../engine/conexao.php");

if(!$_SESSION['authing'] = "logado"){

    try{

        $user = $_POST['email'];
        $senha = $_POST['password'];

        $sql = getDb();
        $smtp = $sql->prepare("SELECT * FROM education.user WHERE email=:user");
        $smtp->bindValue(":user", $user);
        $smtp->execute();
        $res = $smtp->fetch(PDO::FETCH_ASSOC);

    }catch (\Exception   $e){
        echo "Dados de busca do usuário incorreto" . $e->getMessage();

    }


if(isset($user) == $res['email'] AND password_verify($senha, $res['senha']) == TRUE){
    $_SESSION["authing"] = "logado";
    $_SESSION["msg"] = "Você esta logado!";
    header("location: ../incudes/painel.php");
}

}else{
   header("location: ../includes/painel.php");
}
