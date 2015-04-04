<?php
    if($_GET['pid'] > 0){
        require_once(__DIR__ . "/../../../engine/conexao.php");

        $conn   = getDb();
        $sql    = "DELETE from pages where idpages=:idpages";
        $smtp   = $conn->prepare($sql);
        $smtp->bindParam("idpages", $_GET['pid']);
        $smtp->execute();

        header('Location: painel.php');
    }else{
        echo "Página não foi excluída!";
    }
