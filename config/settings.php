<?php

return [

    //se creo este archivo para constantes de configuracion a nivel proyecto
    //cuando la configuracion es diferente para desarrollo que produccion lo recomendable es que venga del archivo .env
    'ASSETS_URL_PREFIX' => env('ASSETS_URL_PREFIX'),
    'TEST' => [
        "ARREGLO_INTERNO" => true
    ],

];
