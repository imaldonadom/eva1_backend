<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>
    <style> 
        body {
            background-color: black;
            color: greenyellow;
            font-family: 'Courier New', Courier, monospace;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        form {
            background-color: Black;
            padding: 20px;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid greenyellow;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: Black;
            color: greenyellow;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="../"style="background-color: black; color: orange">Pagina Principal</a>
        <hr>
        <h1>Contáctenos</h1>
        <p>Esta sección contiene un formulario de contacto que permite enviar consultas o solicitudes de información a la empresa.</p>
        <p style="background-color: black; color: red;" required>Todos los campos deben ser completados</p>

        <form action="procesar_formulario.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" style="background-color: black; color: white;" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" style="background-color: black; color: white;" required>
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required style="background-color: black; color: white;"></textarea>
            <P style="background-color: black; color: red">Mensaje con tope de 500 caracteres</P>

            <input type="submit" value="Enviar" style="background-color: green; color: white;">
        </form>
        
        <h2>Información de Contacto</h2>
        <p>Dirección Física:<br>Av. Providencia 1234, Oficina 601<br>Providencia, Santiago<br>Chile</p>
        <p>Contacto Telefónico:<br>Teléfono: +56 2 1234 5678</p>
        <p>Correo Electrónico:<br>info@coningenio.cl</p>
        <p>Dominio de la página web:<br>www.coningenio.cl</p>

    </div>
</body>
</html>