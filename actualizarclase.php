<html>
    <head>
        <title>Gimnasio</title>
    </head>
    <body>

        <?php
        include("conexion.php");
        $registros = mysqli_query($conexion, "select * from clases
                        where codigo='$_POST[codigo]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            ?>

            <form action="actualizarclase2.php" method="post">
                Ingrese nueva direccion:
                <input type="text" name="fechanueva" value="<?php echo $reg['fecha'] ?>">
                <br>
                <input type="hidden" name="fechavieja" value="<?php echo $reg['fecha'] ?>">              
                <input type="submit" value="Modificar">
            </form>

    <?php
} else
    echo "No existe clase con ese codigo";
?>
    </body>
</html><?php