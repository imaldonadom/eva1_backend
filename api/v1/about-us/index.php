<?php
// Permitir solicitudes de cualquier origen y definir métodos permitidos
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Content-Type: application/json; charset=UTF-8");

// Captura del encabezado de autorización
$authHeader = isset($_SERVER['HTTP_AUTHORIZATION']) ? $_SERVER['HTTP_AUTHORIZATION'] :
              (isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION']) ? $_SERVER['REDIRECT_HTTP_AUTHORIZATION'] : null);

// Token esperado
$expectedToken = 'ciisa';

// Verificar si el token en el encabezado coincide con el esperado
if ($authHeader === $expectedToken) {
    // Autenticación exitosa
    $aboutUsData = [
        "company_name" => "CIISA",
        "mission" => "Proveer soluciones tecnológicas innovadoras para mejorar la eficiencia de nuestros clientes.",
        "vision" => "Ser líder en tecnología y soluciones digitales, ofreciendo un impacto positivo en la sociedad.",
        "values" => [
            "Innovación",
            "Excelencia",
            "Responsabilidad",
            "Compromiso con el cliente"
        ]
    ];
    
    // Respuesta con datos en formato JSON
    echo json_encode($aboutUsData);
} else {
    // Respuesta de error de autenticación
    http_response_code(401);
    echo json_encode(["error" => "Unauthorized"]);
}
