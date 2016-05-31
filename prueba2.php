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
        $registros = mysqli_query($conexion, "select * from profesores
                        where cedula='$_POST[cedula]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            echo "Ya existe un profesor creado con esa cedula, favor volver y rectificar los datos";
        }else{
            mysqli_query($conexion, "insert into profesores(cedula,Nombre,Apellidos,Direccion,Telefono) values 
                ('$_POST[cedula]','$_POST[Nombre]','$_POST[Apellidos]','$_POST[Direccion]','$_POST[Telefono]')")
                or die("Problemas en el select " . mysqli_error($conexion));
            mysqli_close($conexion);
            echo "El profesor fue creado.";
        }
    ?>
    <form action="registrarProfesor.php" method="post">         
        <a href='http://localhost/Gimnasio/registrarProfesor.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>
        </b></font>
        </div>
    </body>
</html>