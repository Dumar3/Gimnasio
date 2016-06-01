<?php 
    require('conexion.php') ;
    $query="SELECT * FROM usuarios";
    $resultado=$conexion->query($query);
?>

<html>
<style type="text/css">

    table{
        border-collapse: collapse;
        width: 100%;
    }

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
    </head>
    <body>   
         <font size="4" face="Arial"><b>   
    <?php
        include("conexion.php");
        $registros = mysqli_query($conexion, "select * from usuarios
                        where cedula='$_REQUEST[cedula]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {?>       
                <center><h1>RECIBO</h1></center>
                </div>
                <tr>
                <div align="center">
                    <td><font size="5" face="Arial"><b> Cedula :</b></font></td>
                    <td><b><?php echo $reg['cedula']; ?></b></td>
                    <br>
                    <td><font size="5" face="Arial"><b> Nombre :</b></font></td>
                    <td><b><?php echo $reg['Nombre']; ?></b></td>
                    <br>
                    <td><font size="5" face="Arial"><b> Apellidos: </b></font></td>
                    <td><b><?php echo $reg['Apellidos']; ?></b></td>
                    <br>
                    <td><font size="5" face="Arial"><b> Fecha De Nacimineto :</b></font></td>
                    <td><b><?php echo $reg['fecha_nac']; ?></b></td>
                    <br>
                    <td><font size="5" face="Arial"><b> Direccion :</b></font></td>
                    <td><b><?php echo $reg['Direccion']; ?></b></td>
                    <br>
                    <td><font size="5" face="Arial"><b> Telefono :</b></font></td>
                    <td><b><?php echo $reg['Telefono']; ?></b></td>
                    <br>
                </tr> 
                <br>              
               <?php echo "se genero el recibo con exito";  
        } else {
            echo "lo sentimos, no podemos generar su recibo";
        }
        mysqli_close($conexion);
        ?>
        <br>
    <form action="imprimir.php" method="post">         
        <a href='http://localhost/Gimnasio/imprimir.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>
        </b></font>
        </div>
    </body>
</html>