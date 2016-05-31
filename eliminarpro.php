<html>
<style type="text/css">
    html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
    }
    #full-screen-background-image {
        z-index: -999;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
    }

</style>
<body>
    <img alt="full screen background image" src="http://localhost/Gimnasio/gimnasio5.jpg" id="full-screen-background-image" /> 
</body>
<div align="center">
<font size="6" face="Arial"><b> GIMNASIO SPORTGYM </b> <hr/> </font>
</br>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>   
         <font size="4" face="Arial"><b>   
    <?php
        include("conexion.php");
        $registros = mysqli_query($conexion, "select cedula from profesores
                        where cedula='$_REQUEST[cedula]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            mysqli_query($conexion, "delete from profesores where cedula='$_REQUEST[cedula]'") or
                    die("Problemas en el select:" . mysqli_error($conexion));
            echo "Se efectuó el borrado del profesor.";
        } else {
            echo "No existe ningun profesor con esa cedula.";
        }
        mysqli_close($conexion);
    ?>
    <form action="eliminarprofesor.php" method="post">         
        <a href='http://localhost/Gimnasio/eliminarprofesor.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>
        </b></font>
        </div>
    </body>
</html>