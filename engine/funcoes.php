<?php


//Rota atual
function curRoute() {
    return str_replace(".php", "", substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1));
}

function session_verify() {
    if(!isset($_SESSION['authing']) == "logado"){
        header("location: ../admin/painel/includes/painel.php");
    }
}

?>