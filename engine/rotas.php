<?php

require_once(__DIR__."/../engine/funcoes.php");
require_once(__DIR__."/../engine/config.php");

if(preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])){
    return false;
}else{

    $getPath = curRoute();

    // Verifica se Rota esta vazia e retorna TRUE, caso esteja.
    if(empty($getPath) || $getPath == "home"){
       $pageName = "home";

    //Verifica se esta setado a rota e se ela esta definida, caso false retorna page 404.
    }elseif(isset($getPath) && in_array($getPath, $config['route']) != $config['route']){
        $pageName = "404";

    //Caso seja solicitado uma busca.
    }elseif($getPath == "busca"){

        $pageName = "search";

    //Caso procure a página contato
    }elseif($getPath == "contato"){

        $pageName = "contato";

    }else{
        $pageName = $getPath;
    }
}

//Função anonima para incluir a página de conteúdo.
$getPageContent = function () use ($pageName) {
    require_once(__DIR__ . "/../includes/".$pageName.".php");

};

return $getPageContent();

?>