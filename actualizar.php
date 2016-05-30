<html>
    <head>
        <title>Gimnasio</title>
    </head>
    <body>

        <?php
        include("conexion.php");
        $registros = mysqli_query($conexion, "select * from usuarios
                        where cedula='$_POST[cedula]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            ?>

            <form action="actualizar2.php" method="post">
                Ingrese nueva direccion:
                <input type="text" name="direccionnueva" value="<?php echo $reg['Direccion'] ?>">
                <br>
                <input type="hidden" name="direccionvieja" value="<?php echo $reg['Direccion'] ?>">              
                <input type="submit" value="Modificar">
            </form>

    <?php
} else
    echo "No existe usuario con dicha cedula";
?>
    </body>
</html><?php