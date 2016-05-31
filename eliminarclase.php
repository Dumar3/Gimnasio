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
    table{
        border-collapse: collapse;
        width: 100%;
    }
    th,td{
        padding: 0.25rem;
        border: 1px solid #ccc;
    }
    tbody tr:nth-child(odd){
        background: #eee;
    }
    .centro{
        padding: 0.5rem;
        background: #484848;
        color: white;
        text-align: center;
        font-size: 21px;
    }
    #cuadro{
        width: 90%;
        background: #F8F8F8;
        padding: 25px;
        margin: 5px auto;
        border: 3px solid #D8D8D8;
    }
    #titulo{
        width:100%;
        background: #282828;
        color: white;
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
    <center><h1>Clases</h1></center>
    </div>
    <table>
        <thead>
            <tr class="centro">
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Fecha</td>
                <td>Hora</td>
                <td>Profesor</td>
            </tr>
            <tbody>
                <?php while($row=$resultado->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['codigo']; ?></td>
                    <td><?php echo $row['Nombre']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['hora']; ?></td>
                    <td><?php echo $row['profesor']; ?></td>
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