<html>
</head>

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
    <form action="prueba3.php" method="post" >
        <table>
            <br>
            <font size="4" face="Arial"><b> Ingrese El Nombre De La Clase: </b> </font><br>
            <input type="text" name="nombre" id="nombre"><br>
            <br>
            <font size="4" face="Arial"><b> Ingrese La Fecha De La Clase: </b> </font><br>
            <input type="date" name="fecha" id="fecha"><br>
            <br>
            <font size="4" face="Arial"><b> Ingrese La Hora De La Clase: </b> </font><br>
            <input type="time" name="hora" id="hora"><br>
            <br>
            <font size="4" face="Arial"><b> Ingrese La Cedula Del Profesor: </b> </font><br>
            <input type="text" name="cedula" id="cedula"><br>    
            <br>
            <input type="submit" value="Crear Clase" >
        </table>
      </form>  
    <form action="Menu.php" method="post">         
        <a href='http://localhost/Gimnasio/Menu.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>  
</div> 
</html>