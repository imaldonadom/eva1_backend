<?php
$_esquema = $_SERVER["REQUEST_SCHEME"];
$_ubicacion = $_SERVER["HTTP_HOST"];
$_metodo = $_SERVER["REQUEST_METHOD"];
$_path = $_SERVER["REQUEST_URI"];
$_partes = explode('/', $_path);
$_version = $_ubicacion == 'localhost' ? $_partes[2] : null;
$_mantenedor = $_ubicacion == 'localhost' ? $_partes[3] : null;
$_parametros = [];
$_parametros = $_ubicacion == 'localhost' ?  $_partes[4] : null;

if (strlen($_parametros)>0){
    $_parametros = explode('?'. $_parametros)[1];
    $_parametros = explode('&'. $_parametros)
}else{
    $_parametros = [];
}

header("")