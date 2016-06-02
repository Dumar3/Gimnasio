<?php 
    require('conexion.php') ;
    $query="SELECT * FROM clases";
    $resultado=$conexion->query($query);
?>

<html>
<title> SPORTGYM</title>
</head>

<style type="text/css">

    body{
        font:normal medium/1.4 sans-serif;
        background: linear-gradient(0deg, #C0C0C0, #F8F8F8);
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
    <div id="cuadro">
    <img alt="full screen background image" src="http://localhost/Gimnasio/gimnasio5.jpg" id="full-screen-background-image" /> 
    <div align="center">
    <font size="6" face="Arial"><b> GIMNASIO SPORTGYM </b> <hr/> </font>
    </br>
    <div id="titulo">
    <center><h1>CLASES</h1></center>
    </div>
    <table>
        <thead>
            <tr class="centro">
                <td><font size="5" face="Arial"><b>Codigo</b></font></td>
                <td><font size="5" face="Arial"><b>Nombre</b></font></td>
                <td><font size="5" face="Arial"><b>Fecha</b></font></td>
                <td><font size="5" face="Arial"><b>Hora</b></font></td>
                <td><font size="5" face="Arial"><b>Profesor</b></font></td>
                <td><font size="5" face="Arial"><b>Cupos</b></font></td>
            </tr>
            <tbody>
                <?php while($row=$resultado->fetch_assoc()){?>
                <?php 
                    require('conexion.php') ;
                    $Q="SELECT Nombre FROM profesores where cedula='$row[profesor]'";
                    $Con=$conexion->query($Q);
                ?>
                <tr>
                    <?php $Nom=$Con->fetch_assoc() ?>
                    <td><b><?php echo $row['codigo']; ?></b></td>
                    <td><b><?php echo $row['Nombre']; ?></b></td>
                    <td><b><?php echo $row['fecha']; ?></b></td>
                    <td><b><?php echo $row['hora']; ?></b></td>
                    <td><b><?php echo $Nom['Nombre']; ?></b></td>
                    <td><b><?php echo $row['cupos']; ?></b></td>
                </tr>
                <?php } ?>                
            </tbody>
        </thead>
    </table>
    </div>
    <div align="center">
    <form action="eliminarcla.php" method="post">
    <br>
        <font size="4" face="Arial"><b> Ingrese el codigo de la clase a eliminar: </b> </font>
        <br><br>
        <input type="text" name="codigo" id="codigo" placeholder="Codigo Clase">
        <br><br>
        <input type="submit" value="Eliminar">
    </form>
    <form action="Menu.php" method="post">         
        <a href='http://localhost/Gimnasio/Menu.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>  
    </div>
    </div> 
    </body>
</html>