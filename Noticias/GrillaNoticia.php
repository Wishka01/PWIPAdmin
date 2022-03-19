<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>

    <link rel="stylesheet" href="../Estilos/Noticias.css">
</head>
<body>
    <div class="contenedorGrilla">
        <?php
            include("./CLSNoticia.php");
            $registros = traerTodo();
            while (($row = $registros->fetch_array()) != null) {
                echo("
                    <div class=\"noticia\">
                        <div class=\"contenedor_img\">
                            <img class=\"noticia_img\" src=" . $row['urlImg'] . ">
                        </div>
                        <div class=\"cuerpo\">
                            <h2 class=\"noticia_titulo\">" . $row['titulo'] . "</h2>
                            <button onclick=\"location.href='./FormuNoticia.php?id=" . $row['idNoticia'] . "'\">Editar</button>
                            <button onclick=\"location.href='./MensaNoticia.php?opcion=3&id=" . $row['idNoticia'] . "'\">Eliminar</button>
                        </div>
                    </div>
                    ");
            }
        ?>
    </div>
</body>
</html>