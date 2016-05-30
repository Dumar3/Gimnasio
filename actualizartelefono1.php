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

            <form action="actualizartelefono2.php" method="post">
                Ingrese nuevo telefono:
                <input type="text" name="telefononuevo" value="<?php echo $reg['Telefono'] ?>">
                <br>
                <input type="hidden" name="telefonoviejo" value="<?php echo $reg['Telefono'] ?>">
                
                <input type="submit" value="Modificar">
            </form>

    <?php
} else
    echo "No existe usuario con dicha cedula";
?>
    </body>
</html>
    <?php