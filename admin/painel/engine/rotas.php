<?php
/**
 * Created by PhpStorm.
 * User: Alexandre Bispo
 * Date: 29/10/14
 * Time: 12:38
 */

require_once(__DIR__ . "/../../../engine/config.php");
require_once(__DIR__ . "/../../../engine/funcoes.php");

if(preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])){
    return false;
}else{

    $getPath = curRoute();

    var_dump($getPath);

    if(!isset($_SESSION["authing"])){

        $pageName = "auth";

    }else{

        if(empty($getPath) || $getPath == "painel"){

            $pageName = "painel";

        }elseif(isset($getPath) && in_array($getPath, $config['route']['admin']) != $config['route']['admin']){

            $pageName = "404";

        }elseif($getPath == "user/inserir"){

            $pageName = "user/inseir";

        }elseif($getPath == "user/edit"){

            $pageName = "user/edit";

        }elseif($getPath == "user/delete"){

            $pageName = "user/delete";

        }else{

            $pageName = $getPath;

        }
    }

    //Função anonima para incluir a página de conteúdo.
    $getPageContent = function () use ($pageName) {
        require_once(__DIR__ . "/../includes/".$pageName.".php");
    };

    print_r($getPageContent());

}