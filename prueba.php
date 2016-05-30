<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("conexion.php");

        mysqli_query($conexion, "insert into usuarios(cedula,Nombre,Apellidos,fecha_nac,Direccion,Telefono) values 
             ('$_POST[cedula]','$_POST[Nombre]','$_POST[Apellidos]','$_POST[fecha_nac]','$_POST[Direccion]','$_POST[Telefono]')")
                or die("Problemas en el select " . mysqli_error($conexion));

        mysqli_close($conexion);

        echo "El usuario fue creado.";
        ?>

    </body>
</html>
