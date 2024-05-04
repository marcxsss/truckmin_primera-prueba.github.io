<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Truckmin Group</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description"><!DOCTYPE html>
  <html lang="es">
  
  <head>
   

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="img/iconTuckmin.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"rel="stylesheet">
  <!-- Libraries CSS Files
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-Dd5N2q2O46uiUZapakNqOXbqAsSVz/IlCPhgAIZ3L6eZt9z0KyimS+RplOJ8Xi7A/Z9zE81PHj9LcGoRiCblXw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Main Stylesheet File -->
   <!--  <link rel="shortcut icon" href="img/" type="image/x-icon">-->

  </head>
 
    <title>Formulario de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #072348;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #333;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #072348;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #050c1d;
        }

        textarea {
            resize: vertical;
        }
    </style>
       <script>
        // Datos de departamentos y distritos
        const datosUbicacion = {
            Lima: ["Miraflores", "San Isidro", "Surco", "Barranco", "San Borja", "San Juan de Lurigancho"],
            // Agrega más departamentos y distritos según tus necesidades
        };

        // Función para cargar dinámicamente las opciones de un elemento select
        function cargarOpciones(elemento, opciones) {
            elemento.innerHTML = '<option value="" disabled selected>Seleccione una opción</option>';
            opciones.forEach(opcion => {
                const option = document.createElement("option");
                option.value = opcion;
                option.text = opcion;
                elemento.appendChild(option);
            });
        }

        // Función para actualizar las opciones de distritos basándose en el departamento seleccionado
        function actualizarDistritos() {
            const departamento = document.getElementById("departamento").value;
            const distritoSelect = document.getElementById("distrito");

            // Cargar dinámicamente las opciones de distritos según el departamento
            if (datosUbicacion.hasOwnProperty(departamento)) {
                cargarOpciones(distritoSelect, datosUbicacion[departamento]);
            }
        }

        // Función para cargar dinámicamente las opciones de departamentos al cargar la página
        window.onload = function() {
            const departamentoSelect = document.getElementById("departamento");
            cargarOpciones(departamentoSelect, Object.keys(datosUbicacion));
        };
    </script> 
</head>
<body>
    <form action="" method="post">
        <h2>Libro de Reclamaciones</h2>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>
        
        <label for="dni">Distrito</label>
        <input type="text" id="distrito" name="distrito" required>

        <label for="dni">Provincia</label>
        <input type="text" id="provincia" name="provincia" required>
          
        <label for="dni">Departamento</label>
        <input type="text" id="departamento" name="departamento" required>
       

        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" rows="5" required></textarea>

        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>

<?php
if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $dni = $_POST["dni"];
    $distrito = $_POST["distrito"];
    $provincia = $_POST["provincia"];
    $departamento = $_POST["departamento"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "ventas@truckmin.pe";
    $asunto = "Nuevo mensaje de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "DNI: $dni\n";
    $contenido .= "Distrito: $distrito\n";  // Aquí corrí el error
    $contenido .= "Provincia: $provincia\n";  // Aquí corrí el error
    $contenido .= "Departamento: $departamento\n";  // Aquí corrí el error
    $contenido .= "Mensaje: $mensaje";

    $header = "From: reclamaciones@truckmi.pe";

    $mail = @mail($destinatario, $asunto, $contenido, $header);

    if ($mail) {
        echo "<script>alert('El correo se envió correctamente.')</script>";
    } else {
        echo "<script>alert('El correo no se pudo enviar, intente nuevamente.')</script>";
    }
}
?>
