<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('imagenes/hero.png') no-repeat center center fixed; /* Ruta de la imagen */
            background-size: cover; /* La imagen ocupa todo el fondo */
            color: greenyellow;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
        }

        .navbar-nav .nav-link {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente para los enlaces */
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

        .image-section p {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="imagenes/logo-dark.png" alt="CONINGENIO Logo" style="height: 40px;">
          </a>   
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Home/">Home</a>
                    <a class="nav-link" href="Nosotros/">Nosotros</a>
                    <a class="nav-link" href="NuestroServicio/">NuestroServicio</a>
                    <a class="nav-link" href="Contactenos/">Contáctenos</a>
                </div>
            </div>
        </div>
    </nav>


    <section class="image-section" style="margin-top: 75px;">
      <!-- Imagen añadida con alineación a la izquierda -->
      <img src="imagenes/logo-light.png" alt="Descripción de la imagen" style="max-width: 75%; height: auto; display: block; margin-left: 0; border-radius: 10px;">
    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


    
</body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Sticky</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
        html, body {
            height: 100%;
            margin: 0;
        }

        .content {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .main {
            flex: 1; 
        }

        footer {
            background-color: #343a40; 
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="main">
            <h1 class="text-center">Ofrecemos el mejor Servicio del pais</h1>
            <p class="text-center">Navega por nuestro sitio y veras que lo que ofrecemos es lo ideal para aliviar tu dolor, rella nuestro formualrio del item de contactenos. Responderemos enseguida</p>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <h5>Sobre Nosotros</h5>
                        <p>
                            Somos una empresa dedicada a brindar soluciones tecnológicas innovadoras.
                        </p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h5>Enlaces</h5>
                        <ul class="list-unstyled">
                            <li><a href="Home/" class="text-white text-decoration-none">Inicio</a></li>
                            <li><a href="Nosotros/" class="text-white text-decoration-none">Nosotros</a></li>
                            <li><a href="Servicios/" class="text-white text-decoration-none">Servicios</a></li>
                            <li><a href="Contacto/" class="text-white text-decoration-none">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h5>Síguenos</h5>
                        
                        <div class="text-center mb-3">
                            <img src="imagenes/rrss4.png" alt="Conéctate con nosotros" style="max-width: 40%; border-radius: 20px;">
                        </div>
                    </div>
                </div>
                <hr class="border-light">
                <p class="mb-0">© 2024 CONINGENIO. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>

    <!-- FontAwesome para íconos de redes sociales -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
