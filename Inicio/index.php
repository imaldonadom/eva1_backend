<?php
echo 'CONINGENIO';
?>

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CONINGENIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Home/">Home</a>
                    <a class="nav-link" href="Nosotros/">Nosotros</a>
                    <a class="nav-link" href="Nuestro Servicio/">Nuestro Servicio</a>
                    <a class="nav-link" href="Contactenos/">Contáctenos</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Image Section -->
    <section class="image-section">
        <p>IMAGINA ACÁ UNA IMAGEN BONITA</p>
        <!-- Imagen ejemplo -->
        <img src="https://via.placeholder.com/800x400" alt="Imagen Bonita" style="max-width: 100%;">
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
