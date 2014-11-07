<?php

//Array de Configuração;
return array(
    'db' =>  array(
       'host'  =>  '127.0.0.1',
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
