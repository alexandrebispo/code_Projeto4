<?php

//Array de Configuração;
$config = array(
    'db' =>  array(
<<<<<<< HEAD
        'host'  =>  '127.0.0.1',
=======
        'host'  =>  'localhost',
>>>>>>> 7c2b5e0996061fd736f2dbcf26fb78f1ff1d1619
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