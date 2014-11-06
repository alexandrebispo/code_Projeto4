<?php
/**
 * Created by PhpStorm.
 * User: Alexandre Bispo
 * Date: 29/10/14
 * Time: 12:38
 */

require_once(__DIR__ . "/../../../engine/config.php");
<<<<<<< HEAD
require_once(__DIR__ . "/../../../engine/funcoes.php");
=======

function curRoute() {
   return str_replace(".php", "", substr($_SERVER["REQUEST_URI"],+7));
}
>>>>>>> 7c2b5e0996061fd736f2dbcf26fb78f1ff1d1619

if(preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])){
    return false;
}else{

    $getPath = curRoute();

<<<<<<< HEAD
    var_dump($getPath);

=======
>>>>>>> 7c2b5e0996061fd736f2dbcf26fb78f1ff1d1619
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

<<<<<<< HEAD
    print_r($getPageContent());
=======
    return $getPageContent();
>>>>>>> 7c2b5e0996061fd736f2dbcf26fb78f1ff1d1619

}