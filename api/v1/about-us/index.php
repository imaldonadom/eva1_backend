<?php
function checkAuth($headers) {
    if (isset($headers['Authorization']) && $headers['Authorization'] === 'ciisa') {
        return true;
    }
    return false;
}

// Verificar autenticación
$headers = apache_request_headers();
if (!checkAuth($headers)) {
    http_response_code(401);
    echo json_encode(["error" => "Unauthorized"]);
    exit;
}

// Simulación de datos de “Nosotros”
$aboutUsData = [
    "company_name" => "Coningenio",
    "mission" => "Proveer soluciones tecnológicas innovadoras para mejorar la eficiencia de nuestros clientes.",
    "vision" => "Ser líder en tecnología y soluciones digitales, ofreciendo un impacto positivo en la sociedad.",
    "values" => [
        "Innovación",
        "Excelencia",
        "Responsabilidad",
        "Compromiso con el cliente"
    ]
];

// Enviar la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($aboutUsData);

