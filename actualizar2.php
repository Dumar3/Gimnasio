<html>
    <head>
        <title>Gimnasio</title>
    </head>
    <body>
        <?php
        include("conexion.php");
        mysqli_query($conexion, "update usuarios
                          set Direccion='$_POST[direccionnueva]' 
                        where Direccion='$_POST[direccionvieja]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        echo "La direccion fue modificada con exito";
        ?>
    </body>
</html>
