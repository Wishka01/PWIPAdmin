<?php

    include("./CLSNoticia.php");
    $opcion = $_GET['opcion'];

    if ($opcion == 1) {
        // Añadir
        $titulo = $_POST['titulo'];
        $imagen = $_POST['imagen'];
        $dcorta = $_POST['dcorta'];
        $dlarga = $_POST['dlarga'];
        $finicio = $_POST['finicio'];
        $ffin = $_POST['ffin'];
        insertar($imagen, $titulo, $dcorta, $dlarga, $finicio, $ffin);
    } elseif ($opcion == 2) {
            // Modificar
            $id = $_GET['id'];
            $titulo = $_POST['titulo'];
            $imagen = $_POST['imagen'];
            $dcorta = $_POST['dcorta'];
            $dlarga = $_POST['dlarga'];
            $finicio = $_POST['finicio'];
            $ffin = $_POST['ffin'];
            modificar($id, $imagen, $titulo, $dcorta, $dlarga, $finicio, $ffin);
    } elseif ($opcion == 3) {
        // Eliminar
        $idNoticia = $_GET['id'];
        eliminar($idNoticia);
    }

    header("Location: ./GrillaNoticia.php");
?>