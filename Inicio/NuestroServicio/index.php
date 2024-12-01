<?php
// Archivo: header.php (Encabezado con el menú de navegación)
function render_header($title = "ConIngenio") {
    echo <<<HEADER
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{$title}</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: black;
                color: greenyellow;
                font-family: 'Courier New', Courier, monospace;
                padding-top: 80px; /* Espaciado para la barra de navegación */
            }

            .navbar-nav .nav-link {
                background-color: black;
                color: yellow;
                margin-right: 10px;
                border-radius: 5px;
                padding: 5px 10px;
                transition: all 0.3s ease-in-out;
            }

            .navbar-nav .nav-link:hover {
                background-color: yellow;
                color: black;
            }

            .content-container {
                margin: 20px auto;
                padding: 20px;
                background-color: #202020;
                border: 1px solid greenyellow;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            }

            h1, h2 {
                color: orange;
                text-align: center;
            }

            ul {
                margin-left: 20px;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/eva1_backend/Inicio/">
                    <img src="../imagenes/logo-dark.png" alt="Logo" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="../Nosotros/">Nosotros</a>
                        <a class="nav-link" href="../NuestroServicio/">NuestroServicio</a>
                        <a class="nav-link" href="../Contactenos/">Contáctenos</a>
                    </div>
                </div>
            </div>
        </nav>
HEADER;
}
?>

<?php
// Archivo: footer.php (Pie de página)
function render_footer() {
    echo <<<FOOTER
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
FOOTER;
}

// Renderizar el encabezado
render_header("Nuestros Servicios");
?>

<div class="container">
    <div class="content-container">
        <h1>Nuestros Servicios</h1>
    </div>

    <div class="content-container">
        <h2>Consultoría Digital</h2>
        <p>
            Nuestra Consultoría Digital ofrece asesoramiento estratégico y soluciones personalizadas para ayudar a las empresas a optimizar su presencia en línea. Desde la identificación de oportunidades de mejora hasta la implementación de estrategias efectivas, nuestro equipo de expertos en consultoría digital está comprometido a impulsar el crecimiento y la competitividad de tu empresa en el entorno digital.
        </p>
        <h3>Beneficios para los Clientes:</h3>
        <ul>
            <li>Identificación de oportunidades de mejora en la presencia digital.</li>
            <li>Estrategias personalizadas para alcanzar objetivos comerciales específicos.</li>
            <li>Maximización del retorno de la inversión en marketing y tecnología digital.</li>
        </ul>
    </div>

    <div class="content-container">
        <h2>Soluciones Multiexperiencia</h2>
        <p>
            Nuestras Soluciones Multiexperiencia proporcionan experiencias de usuario coherentes y personalizadas en todos los dispositivos y plataformas. Desde aplicaciones móviles hasta interfaces de voz y realidad aumentada, ayudamos a las empresas a crear experiencias digitales atractivas que conecten con sus clientes en cada punto de contacto.
        </p>
        <h3>Beneficios para los Clientes:</h3>
        <ul>
            <li>Aumento de la satisfacción del cliente a través de experiencias digitales consistentes.</li>
            <li>Ampliación del alcance y compromiso del cliente en diversos canales.</li>
            <li>Diferenciación de la competencia mediante experiencias innovadoras y centradas en el usuario.</li>
        </ul>
    </div>

    <div class="content-container">
        <h2>Evolución de Ecosistemas</h2>
        <p>
            Nuestra oferta de Evolución de Ecosistemas se centra en la transformación digital de los procesos empresariales y la optimización de la infraestructura tecnológica. Desde la migración a la nube hasta la integración de sistemas y la implementación de soluciones de Internet de las cosas (IoT), ayudamos a las empresas a evolucionar sus ecosistemas digitales para adaptarse a las demandas cambiantes del mercado.
        </p>
        <h3>Beneficios para los Clientes:</h3>
        <ul>
            <li>Mejora de la eficiencia operativa y reducción de costos.</li>
            <li>Optimización de la infraestructura tecnológica para un rendimiento óptimo.</li>
            <li>Preparación para el futuro y capacidad de adaptación a las nuevas tecnologías y tendencias.</li>
        </ul>
    </div>
</div>

<?php
// Renderizar el pie de página
render_footer();
?>