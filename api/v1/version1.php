<?php
$_esquema = $_SERVER["REQUEST_SCHEME"];
$_ubicacion = $_SERVER["HTTP_HOST"];
$_metodo = $_SERVER["REQUEST_METHOD"];
$_path = $_SERVER["REQUEST_URI"];
$_partes = explode('/', $_path);
$_version = $_ubicacion == 'localhost' ? $_partes[2] : null;
$_mantenedor = $_ubicacion == 'localhost' ? $_partes[3] : null;
$_parametros = $_ubicacion == 'localhost' ? $_partes[4] : null;

// Validación y procesamiento de parámetros
if (!empty($_parametros)) {
    $_parametros = explode('?', $_parametros, 2);
    if (isset($_parametros[1])) {
        $_parametros = explode('&', $_parametros[1]);
    } else {
        $_parametros = [];
    }
} else {
    $_parametros = [];
}

// Encabezados HTTP
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Content-Type: application/json; charset=UTF-8");

$_header = null;
try {
    // Obtener encabezados y validar autorización
    $headers = getallheaders();
    $_header = isset($headers['Authorization']) ? $headers['Authorization'] : null;
    
    if ($_header === null) {
        throw new Exception('No tiene autorización');
    }
} catch (Exception $e) {
    http_response_code(401);
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}

// Ejemplo de token para validación (para pruebas)
$_token_get = 'Bearer get';