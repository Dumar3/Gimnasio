<html>
    <head>
        <title>Gimnasio</title>
    </head>
    <body>
        <?php
        include("conexion.php");
        mysqli_query($conexion, "update usuarios
                          set Telefono='$_POST[telefononuevo]' 
                        where Telefono='$_POST[telefonoviejo]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        echo "El telefono fue modificado con exito";
        ?>
    </body>
</html>
