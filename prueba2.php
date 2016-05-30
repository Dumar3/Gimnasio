<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("conexion.php");

        mysqli_query($conexion, "insert into profesores(cedula,Nombre,Apellidos,Telefono) values 
             ('$_POST[cedula]','$_POST[Nombre]','$_POST[Apellidos]','$_POST[Telefono]')")
                or die("Problemas en el select " . mysqli_error($conexion));

        mysqli_close($conexion);

        echo "El profesor fue creado.";
        ?>

    </body>
</html>
