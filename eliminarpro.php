<html>
    <head>
        <title>Gimnasio</title>
    </head>
    <body>
        <?php
        include("conexion.php");
        $registros = mysqli_query($conexion, "select cedula from usuarios
                        where cedula='$_REQUEST[cedula]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            mysqli_query($conexion, "delete from usarios where cedula='$_REQUEST[cedula]'") or
                    die("Problemas en el select:" . mysqli_error($conexion));
            echo "Se efectuó el borrado del profesor.";
        } else {
            echo "No existe profesor con esa cedula.";
        }
        mysqli_close($conexion);
        ?>
    </body>
</html>