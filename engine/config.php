<?php

//Array de Configuração;
$config = array(
    'db' =>  array(
        'host'  =>  'localhost',
        'dbname'=>  'education',
        'user'  =>  'root',
        'pass'  =>  'root',
    ),
    //Rotas válidas
    'route' =>  array(
       'home',
       'empresa',
       'produtos',
       'contato',
       'procurar',
       '404',
       'admin' => array(
           'painel',
            'user/inserir',
            'user/editar',
            'user/excluir'
        ),

    ),

);

?>