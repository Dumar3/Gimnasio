<?php 
    require('conexion.php') ;
    $query="SELECT * FROM profesores";
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
    <img alt="full screen background image" src="http://localhost/Gimnasio/gimnasio5.jpg" id="full-screen-background-image" /> 
</body>

<div align="center">
    <font size="6" face="Arial"><b> GIMNASIO SPORTGYM </b> <hr/> </font>
    </br>
    <center><h1>PROFESORES</h1></center>
    <table>
        <thead>
            <tr>
                <td><font size="5" face="Arial"><b>Cedula</b></font></td>
                <td><font size="5" face="Arial"><b>Nombre</b></font></td>
                <td><font size="5" face="Arial"><b>Apellido</b></font></td>
                <td><font size="5" face="Arial"><b>Direccion</b></font></td>
                <td><font size="5" face="Arial"><b>Telefono</b></font></td>
            </tr>
            <tbody>
                <?php while($row=$resultado->fetch_assoc()){?>
                <tr>
                    <td><b><?php echo $row['cedula']; ?></b></td>
                    <td><b><?php echo $row['Nombre']; ?></b></td>
                    <td><b><?php echo $row['Apellidos']; ?></b></td>
                    <td><b><?php echo $row['Direccion']; ?></b></td>
                    <td><b><?php echo $row['Telefono']; ?></b></td>
                </tr>
                <?php } ?>                
            </tbody>
        </thead>
    </table>
    <br>
    <form action="actualizarpro1.php" method="post">
        <font size="4" face="Arial"><b> Ingrese la cedula del profesor a actualizar: </b> </font>
        <br><br>       
        <input type="text" name="cedula"> <br> <br>   
        <input type="submit" value="Actualizar">
    </form> 
    <form action="Menu.php" method="post">         
        <a href='http://localhost/Gimnasio/Menu.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>  
    </div> 
</html>