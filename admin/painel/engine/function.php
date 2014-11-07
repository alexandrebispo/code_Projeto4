<?php
/**
 * Created by PhpStorm.
 * User: Alexandre Bispo
 * Date: 07/11/14
 * Time: 00:39
 */


/**
* return void
* */
function verifySession(){
    if(!isset($_SESSION['authing']) AND $_SESSION['authing'] == "logado"){
        echo "Você não tem permissão a esta página";
        header("location: 404.php");
    }
}