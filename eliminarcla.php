<html>
    <head>
        <title>Gimnasio</title>
    </head>
    <body>
        <?php
        include("conexion.php");
        $registros = mysqli_query($conexion, "select codigo from clases
                        where codigo='$_REQUEST[codigo]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            mysqli_query($conexion, "delete from clases where codigo='$_REQUEST[codigo]'") or
                    die("Problemas en el select:" . mysqli_error($conexion));
            echo "Se efectuó el borrado de la clases.";
        } else {
            echo "No existe clase con ese codigo.";
        }
        mysqli_close($conexion);
        ?>
    </body>
</html>