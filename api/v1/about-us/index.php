<?php
// Captura del encabezado de autorización directamente desde $_SERVER
$authHeader = isset($_SERVER['HTTP_AUTHORIZATION']) ? $_SERVER['HTTP_AUTHORIZATION'] : null;

if ($authHeader === 'ciisa') {
    // Autenticación exitosa
    // Simulación de datos de “Nosotros”
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
    
    // Configuración del encabezado de respuesta y envío de datos en formato JSON
    header('Content-Type: application/json');
    echo json_encode($aboutUsData);
} else {
    // Respuesta de error si la autenticación falla
    http_response_code(401);
    echo json_encode(["error" => "Unauthorized"]);
}


