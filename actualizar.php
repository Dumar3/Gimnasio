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
<font size="6" face="Arial"><b> GIMNASIO SPORTGYM </b> <hr/> </font></br>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>     
    <font size="4" face="Arial"><b>   
    <?php
        include("conexion.php");
        $registros = mysqli_query($conexion, "select * from usuarios
                        where cedula='$_POST[cedula]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
    ?>
        <form action="actualizar2.php" method="post">
                <font size="4" face="Arial"><b> Ingrese la nueva direccion: </b> </font><br>
                <br>
                <input type="text" name="direccionnueva" value="<?php echo $reg['Direccion'] ?>">
                <br>
                <input type="hidden" name="direccionvieja" value="<?php echo $reg['Direccion'] ?>">
                <br> 
                <font size="4" face="Arial"><b> Ingrese el nuevo telefono: </b> </font><br>             
                <br>
                <input type="text" name="telefononuevo" value="<?php echo $reg['Telefono'] ?>">
                <br>
                <input type="hidden" name="telefonoviejo" value="<?php echo $reg['Telefono'] ?>">  
                <br>  
                <font size="4" face="Arial"><b> Ingrese la nueva contraseña: </b> </font><br>             
                <br>
                <input type="text" name="contranueva" value="<?php echo $reg['pass'] ?>">
                <br>
                <input type="hidden" name="contravieja" value="<?php echo $reg['pass'] ?>">  
                <br>            
                <input type="submit" value="Modificar">
                <br>
        </form>
    <?php
    } else
        echo "No existe un usuario registrado con dicha cedula";
    ?>
        </b></font>
        <form action="actualizar1.php" method="post">         
        <a href='http://localhost/Gimnasio/actualizar1.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
        </form>
        </div>
    </body>
</html>


