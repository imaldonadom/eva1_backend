<?php
$base_url = "/eva1_backend/inicio/";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Fondo general */
        body {
            background: url('imagenes/hero.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto', sans-serif; /* Usando Roboto de Google Fonts */
            color: #ffffff; /* Texto blanco para mejor contraste */
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(0, 0, 0, 0.8); /* Fondo negro semitransparente */
        }
        .navbar-brand img {
            height: 40px;
        }
        .navbar-nav .nav-link {
            color: yellow;
            margin-right: 10px;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            background-color: yellow;
            color: black;
        }
        .navbar-nav .nav-link.active {
            background-color: orange;
            color: white;
        }

        /* Contenedor del contenido */
        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo semitransparente para mejorar legibilidad */
            padding: 20px;
            border-radius: 10px;
            margin-top: 100px; /* Espacio desde el navbar */
        }

        /* Estilos del formulario */
        form {
            background-color: #222; /* Fondo oscuro */
            padding: 20px;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #fff; /* Texto blanco */
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #76ff03; /* Verde brillante */
            border-radius: 5px;
            background-color: #333; /* Fondo oscuro */
            color: #fff; /* Texto blanco */
        }
        input[type="submit"] {
            background-color: #76ff03; /* Verde brillante */
            color: #000; /* Texto negro */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #ffffff; /* Blanco */
            color: #000; /* Negro */
        }

        /* Información adicional */
        h1, h2 {
            color: #76ff03; /* Verde brillante */
        }
        p {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $base_url; ?>">
            <img src="<?php echo $base_url; ?>imagenes/logo-dark.png" alt="CONINGENIO Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>Nosotros/">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>NuestroServicio/">Nuestro Servicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>Contactenos/">Contáctenos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Contenido principal -->
    <div class="container">
        <hr>
        <h1 class="text-center">Contáctenos</h1>
        <p class="text-center">Esta sección contiene un formulario de contacto que permite enviar consultas o solicitudes de información a la empresa.</p>
        <p class="text-center text-danger">Todos los campos deben ser completados</p>

        <form action="procesar_formulario.php" method="post" class="p-4 shadow-lg rounded">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" class="form-control" rows="4" maxlength="500" required></textarea>
                <small class="form-text text-danger">Mensaje con tope de 500 caracteres</small>
            </div>

            <button type="submit" class="btn btn-success btn-block">Enviar</button>
        </form>
        
        <h2 class="mt-5">Información de Contacto</h2>
        <p>Dirección Física:<br>Av. Providencia 1234, Oficina 601<br>Providencia, Santiago<br>Chile</p>
        <p>Contacto Telefónico:<br>Teléfono: +56 2 1234 5678</p>
        <p>Correo Electrónico:<br>info@coningenio.cl</p>
        <p>Dominio de la página web:<br>www.coningenio.cl</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
