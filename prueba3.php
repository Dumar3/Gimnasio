<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("conexion.php");
        $registros = mysqli_query($conexion, "select * from profesores
                        where cedula='$_POST[cedula]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "insert into clases(codigo,Nombre,fecha,hora,profesor) values 
             ('$_POST[codigo]','$_POST[nombre]','$_POST[fecha]','$_POST[hora]','$_POST[cedula]')")
                or die("Problemas en el select " . mysqli_error($conexion));

        mysqli_close($conexion);

        echo "La clase fue creada.";
    }else{
        echo "No esxiste profesor asociado.";
        
    }
?>
    </body>
</html>