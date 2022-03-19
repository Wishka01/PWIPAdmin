<?php
    function insertar($urlImg, $titulo, $descCorta, $descLarga, $fecInicio, $fecFin) {
        include("../CLSSQL.php");
        $consulta = "INSERT INTO Noticias (`urlImg`, `titulo`, `descCorta`, `descLarga`, `fecInicio`, `fecFin`) VALUES ('" . $urlImg . "', '" . $titulo ."', '" . $descCorta . "', '" . $descLarga . "', '" . $fecInicio . "', '" . $fecFin . "');";
        $registrosAfectados = mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        return $registrosAfectados;
    }

    function eliminar($idNoticia) {
        include("../CLSSQL.php");
        $consulta = "DELETE FROM Noticias WHERE idNoticia = " . $idNoticia . ";";
        $registrosAfectados = mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        return $registrosAfectados;
    }

    function modificar($idNoticia, $urlImg, $titulo, $descCorta, $descLarga, $fecInicio, $fecFin) {
        include("../CLSSQL.php");
        $consulta = "UPDATE Noticias SET `urlImg` = '" . $urlImg . "', `titulo` = '" . $titulo . "', `descCorta` = '" . $descCorta . "', `descLarga` = '" . $descLarga . "', `fecInicio` = '" . $fecInicio . "', `fecFin` = '" . $fecFin . "' WHERE idNoticia = " . $idNoticia . ";";
        $registrosAfectados = mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        return $registrosAfectados;
    }

    function traerTodo() {
        include("../CLSSQL.php");
        $consulta = "SELECT * FROM Noticias;";
        $registros = mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        return $registros;
    }

    function traerUno($idNoticia) {
        include("../CLSSQL.php");
        $consulta = "SELECT * FROM Noticias WHERE idNoticia = " . $idNoticia . ";";
        $registros = mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        return $registros;
    }
?>