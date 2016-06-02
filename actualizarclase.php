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
        $registros = mysqli_query($conexion, "select * from clases
                        where codigo='$_POST[codigo]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
    ?>
        <form action="actualizarclase2.php" method="post">
                <font size="4" face="Arial"><b> Ingrese la nueva fecha: </b> </font><br>
                <br>
                <input type="date" name="fechanueva" value="<?php echo $reg['fecha'] ?>">
                <br>
                <input type="hidden" name="fechavieja" value="<?php echo $reg['fecha'] ?>">
                <br> 
                <font size="4" face="Arial"><b> Ingrese la nueva hora: </b> </font><br>             
                <br>
                <input type="time" name="horanueva" value="<?php echo $reg['hora'] ?>">
                <br>
                <input type="hidden" name="horavieja" value="<?php echo $reg['hora'] ?>">  
                <br> 
                <font size="4" face="Arial"><b> Ingrese la cedula del nuevo profesor: </b> </font><br>
                <br>
                <input type="text" name="cedulanueva" value="<?php echo $reg['profesor'] ?>">
                <br>
                <input type="hidden" name="cedulavieja" value="<?php echo $reg['profesor'] ?>">
                <br> 
                <font size="4" face="Arial"><b> Ingrese el numero de cupos: </b> </font><br>             
                <br>
                <input type="text" name="cuponuevo" value="<?php echo $reg['cupos'] ?>">
                <br>
                <input type="hidden" name="cupoviejo" value="<?php echo $reg['cupos'] ?>">  
                <br>           
                <input type="submit" value="Modificar">
                <br>
        </form>
    <?php
    } else
        echo "No existe una clase registrado con dicho codigo";
    ?>
        </b></font>
        <form action="actualizarclase1.php" method="post">         
        <a href='http://localhost/Gimnasio/actualizarclase1.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
        </form>
        </div>
    </body>
</html>