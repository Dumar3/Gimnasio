<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("conexion.php");

        mysqli_query($conexion, "insert into clases(codigo,fecha,hora,profesor) values 
             ('$_POST[codigo]','$_POST[fecha]','$_POST[hora]','$_POST[profesor]')")
                or die("Problemas en el select " . mysqli_error($conexion));

        mysqli_close($conexion);

        echo "La clase fue creada.";
        ?>

    </body>
</html>