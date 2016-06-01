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
    <div align="center">
    <font size="6" face="Arial"><b> GIMNASIO SPORTGYM </b> <hr/> </font>
    </br>
    <div align="center">
    <form action="recibo.php" method="post">
    <br>
        <font size="4" face="Arial"><b> Ingrese la cedula para hacer la impresión del recibo: </b> </font>
        <br><br>
        <input type="text" name="cedula" id="cedula" placeholder="Cedula">
        <br><br>
        <input type="submit" value="Imprimir">
    </form>
    <form action="MenuUsuario.php" method="post">         
        <a href='http://localhost/Gimnasio/MenuUsuario.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>  
    </div>
    </div> 
    </body>
</html>