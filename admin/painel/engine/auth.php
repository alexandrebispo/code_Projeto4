<?php
session_cache_expire(120);
session_start();
require_once(__DIR__ . "/password.php");
require_once(__DIR__ . "/../../../engine/conexao.php");

$user   = $_POST['email'];
$senha  = $_POST['password'];

try{
    $sql = getDb();
    $smtp = $sql->prepare("SELECT * FROM education.user WHERE email=:user");
    $smtp->bindValue(":user", $user);
    $smtp->execute();
    $res = $smtp->fetch(PDO::FETCH_ASSOC);

}catch (\Exception   $e){
    echo "Dados de busca do usuário incorreto" . $e->getMessage();

}

if(!empty($user) == $res['email'] AND password_verify($senha, $res['senha'])){
    $_SESSION["authing"] = "logado";
    $_SESSION["msg"] = "Você esta logado!";
    header("location: ../incudes/painel.php");
    exit;
}

/*
if($user == "alexandre" AND $senha == "1234"){

}else{
    $_SESSION["msg"] = "você não tem permissão para acessar esta página!";
    header("location: ../admin/includes/painel.php");
    exit;
}

*/

