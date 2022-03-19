<?php
    include("./CLSNoticia.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $registro = traerUno($id);
        $fila = $registro->fetch_array();
        echo("
        <form method=\"post\" action=\"./MensaNoticia.php?opcion=2&id=" . $id . "\">
            <label for=\"\">Titulo</label>
            <input name=\"titulo\" type=\"text\" value=\"" . $fila['titulo'] . "\">
            <br>
            <label for=\"\">Imagen</label>
            <input name=\"imagen\" type=\"text\" value=\"" . $fila['urlImg'] . "\">
            <br>
            <label for=\"\">D.Corta</label>
            <input name=\"dcorta\" type=\"text\" value=\"" . $fila['descCorta'] . "\">
            <br>
            <label for=\"\">D.Larga</label>
            <input name=\"dlarga\" type=\"text\" value=\"\">
            <br>
            <label for=\"\">F.Inicio</label>
            <input name=\"finicio\" type=\"date\" value=\"\">
            <br>
            <label for=\"\">F.Fin</label>
            <input name=\"ffin\" type=\"date\" value=\"\">
            <br>
            <input type=\"submit\">
        </form>
        ");   
    } else {
        echo("
        <form method=\"post\" action=\"./MensaNoticia.php\">
            <label for=\"\">Titulo</label>
            <input name=\"titulo\" type=\"text\">
            <br>
            <label for=\"\">Imagen</label>
            <input name=\"imagen\" type=\"text\">
            <br>
            <label for=\"\">D.Corta</label>
            <input name=\"dcorta\" type=\"text\">
            <br>
            <label for=\"\">D.Larga</label>
            <input name=\"dlarga\" type=\"text\">
            <br>
            <label for=\"\">F.Inicio</label>
            <input name=\"finicio\" type=\"date\">
            <br>
            <label for=\"\">F.Fin</label>
            <input name=\"ffin\" type=\"date\">
            <br>
            <input type=\"submit\">
        </form>
        ");   
    }
?>