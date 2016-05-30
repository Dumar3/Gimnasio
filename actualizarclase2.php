<html>
    <head>
        <title>Gimnasio</title>
    </head>
    <body>
        <?php
        include("conexion.php");
        mysqli_query($conexion, "update clases
                          set fecha='$_POST[fechanueva]' 
                        where fecha='$_POST[fechavieja]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        echo "La fecha fue modificada con exito";
        ?>
    </body>
</html>
