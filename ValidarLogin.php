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
    <?php   
        include("conexionLogin.php");
        $Id=$_POST["cedula"];
        $Pass=$_POST["contraseña"];
        $SW=false;
        $C=conexion::Conectar();
        $Q="select * from usuarios";
        $R=mysql_query($Q,$C);
        while($fila=mysql_fetch_array($R)){
            if($Id==$fila["cedula"] && $Pass==$fila["pass"]){
                $SW=true;
            }
        }
        if($SW==true){
            echo "BIENVENIDO";
        }else{
            echo "Error en los datos";
        }   
    ?>
    <form action="login.php" method="post">         
        <a href='http://localhost/Gimnasio/login.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>
        </b></font>
        </div>
    </body>
</html>