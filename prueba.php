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
         <form action="principal.php" method="post">         
            <a href='http://localhost/Gimnasio/principal.php' type="submit"> 
            <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
        </form>
        <?php
        include("conexion.php");
        mysqli_query($conexion, "insert into usuarios(cedula,Nombre,Apellidos,fecha_nac,Direccion,Telefono,pass) values 
             ('$_POST[cedula]','$_POST[Nombre]','$_POST[Apellidos]','$_POST[fecha_nac]','$_POST[Direccion]','$_POST[Telefono]','$_POST[contraseña]')")
                or die( "Problemas al registrar tus datos, posbiblemente ya te encuentres registrado, por favor regresa y rectificar tus datos ingresados" );
        mysqli_close($conexion);
        echo "El usuario fue registrado con exito!!!!";
        ?>
        </b></font>

        </div>
    </body>
</html>
