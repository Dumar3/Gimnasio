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

            $cons = mysqli_query($conexion, "select * from clases
                        where fecha='$_POST[fecha]' and hora='$_POST[hora]'") or
                die("Problemas en el select:" . mysqli_error($conexion));

                if($R=mysqli_fetch_array($cons)){
                    echo "Ya existe una clase ese dia y a esa hora,por favor regresar y rectificar los datos";
                }else{
                     mysqli_query($conexion, "insert into clases(Nombre,fecha,hora,profesor) values 
                        ('$_POST[nombre]','$_POST[fecha]','$_POST[hora]','$_POST[cedula]')")
                        or die("Problemas en el select " . mysqli_error($conexion));
                    mysqli_close($conexion);
                    echo "La clase fue creada con exito.";
                }
        }else{
            echo "No existe un profesor asociado a esa cedula, por favor volver y rectificar los datos "; 
        }
    ?>
    <form action="crearclase.php" method="post">         
        <a href='http://localhost/Gimnasio/crearclase.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>
        </b></font>
        </div>
    </body>
</html>