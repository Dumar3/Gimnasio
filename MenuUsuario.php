<html>
<title> SPORTGYM</title>
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
    <form action="reservarClase.php" method="post">       
        <input type="submit" value="Reservar Clase">            
    </form>

    <form action="imprimir.php" method="post">       
        <input type="submit" value="Imprimir Recibo">            
    </form>

    <form action="inicio.php" method="post">         
        <a href='http://localhost/Gimnasio/inicio.php' type="submit"> 
        <img src='http://localhost/Gimnasio/salir.png' hspace='20' width='200' height='80' border='0'></a>
    </form>  
    </div> 
</html>
      