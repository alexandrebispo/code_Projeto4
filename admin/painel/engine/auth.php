<?php
session_start();
session_cache_expire(120);

ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

require_once(__DIR__ . "/password.php");
require_once(__DIR__ . "/../../../engine/config.php");
require_once(__DIR__ . "/../../../engine/conexao.php");


$user   = 'alexandrebispo.mestre@gmail.com';
$senha  = '1234';

var_dump(getDb());
echo "<br />";
print_r($user);
print_r($senha);


/*
try{
    $sql = getDb();
    $smtp = $sql->prepare("SELECT * FROM education.user WHERE email=':user'");
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

