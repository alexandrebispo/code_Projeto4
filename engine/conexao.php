<?php
function getDb(){

    try{

        require_once(__DIR__."/../engine/config.php");

        if(!isset($config['db'])){
            throw new \InvalidArgumentException("Configuração do Banco de dados não existe!");
        }

        $host   = (isset($config['db']['host']))   ? $config['db']['host'] : null;
        $dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : null;
        $user   = (isset($config['db']['user']))   ? $config['db']['user'] : null;
        $pass   = (isset($config['db']['pass']))   ? $config['db']['pass'] : null;

        return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);

    }catch (\PDOException $e){
        die("Erro código: ". $e->getCode().": ". $e->getMessage());
    }
}

?>
