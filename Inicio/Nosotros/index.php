<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONINGENIO</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style> 
        body {
            background-color: black;
            color: greenyellow;
            font-family: 'Courier New', Courier, monospace;
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

        .image-section p {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 1.2rem;
        }

        .image-section img {
            display: block;
            margin: 0 auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/eva1_backend/Inicio/">
              <img src="../imagenes/logo-dark.png" alt="CONINGENIO Logo" style="height: 40px;">
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

    <!-- Image Section -->
    <section class="image-section" style="margin-top: 65px;">
    <!-- Imagen -->
    <img src="../imagenes/imglogin.png" alt="Descripción de la imagen" class="img-fluid d-block mx-auto w-25 bg-black mt-3 img-fluid" style="max-width: 10%; height: auto; display: block; margin-left: 0; border-radius: 60px;">
    </section> 
    <section>
        <div class="container py-5">
            <div class="row d-flex">
              <!-- Primer párrafo -->
              <div class="col-12 col-md-6 mb-3 d-flex">
                <p class="text-light border border-white p-3 fs-5 w-100 text-center text-wrap" style="min-height: 364px; height: 100%;">
                  <strong>Misión:</strong><br>
                  Nuestra misión es brindar soluciones innovadoras y de alta calidad que satisfagan las necesidades y expectativas de nuestros clientes. Nos comprometemos a ofrecer productos y servicios que impulsen el éxito y la transformación en sus negocios, manteniendo siempre un enfoque centrado en el cliente, la excelencia y la responsabilidad social.
                </p>
              </div>
          
              <!-- Segundo párrafo -->
              <div class="col-12 col-md-6 mb-3 d-flex">
                <p class="text-light border border-white p-3 fs-5 w-100 text-center text-wrap" style="min-height: 364px; height: 100%;">
                  <strong>Visión:</strong><br>
                  Nos visualizamos como líderes en el mercado global, reconocidos por nuestra capacidad para anticipar y adaptarnos a las demandas cambiantes del entorno empresarial. Aspiramos a ser un referente de innovación, sostenibilidad y excelencia en la industria, creando un impacto positivo en la sociedad y generando valor a largo plazo para nuestros clientes, empleados, accionistas y comunidades en las que operamos.
                </p>
              </div>
            </div>
          </div>
   </section>
   
   <section>
    <div class="container d-flex justify-content-center align-items-start ">
        <div class="row text-center g-1">
            <!-- Primera fila de 4 elementos -->
            <div class="col-3 mb-3">
                <a href="https://www.facebook.com" target="_blank">
                    <img src="../imagenes/facebook.png" class="img-fluid rrss bg-white" alt="Facebook">
                </a>
            </div>
            <div class="col-3 mb-3">
                <a href="https://www.instagram.com" target="_blank">
                    <img src="../imagenes/instagram.png" class="img-fluid rrss bg-white" alt="Instagram">
                </a>
            </div>
            <div class="col-3 mb-3">
                <a href="https://www.twitter.com" target="_blank">
                    <img src="../imagenes/logotipo-de-twitter-sobre-fondo-negro.png" class="img-fluid rrss bg-white" alt="Twitter">
                </a>
            </div>
            <div class="col-3 mb-3">
                <a href="https://www.tiktok.com" target="_blank">
                    <img src="../imagenes/tik-tok.png" class="img-fluid rrss bg-white" alt="TikTok">
                </a>
            </div>
            <!-- Segunda fila de 4 elementos -->
            <div class="col-3 mb-3">
                <a href="https://www.youtube.com" target="_blank">
                    <img src="../imagenes/youtube.png" class="img-fluid rrss bg-white" alt="YouTube">
                </a>
            </div>
            <div class="col-3 mb-3">
                <a href="https://www.telegram.com" target="_blank">
                    <img src="../imagenes/telegrama.png" class="img-fluid rrss bg-white" alt="Telegram">
                </a>
            </div>
            <div class="col-3 mb-3">
                <a href="https://www.whatsapp.com" target="_blank">
                    <img src="../imagenes/whatsapp.png" class="img-fluid rrss bg-white" alt="WhatsApp">
                </a>
            </div>
            <div class="col-3 mb-3">
                <a href="https://www.linkedin.com" target="_blank">
                    <img src="../imagenes/linkedin.png" class="img-fluid rrss bg-white" alt="LinkedIn">
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .rrss {
        width: 60px; 
        height: auto; 
        border-radius: 13px;
    }
</style>

    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>