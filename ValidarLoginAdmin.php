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
        <form action="loginAdmin.php" method="post">         
        <a href='http://localhost/Gimnasio/loginAdmin.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='150' height='150' border='0'></a>
        </form>
         <font size="4" face="Arial"><b>   
    <?php     
        include("conexionLogin.php");
        $Ced=$_POST["cedula"];
        $Nom=$_POST["contraseña"];
        $aux=false;
        $Co=conexion::Conectar();
        $Que="select * from administrador";
        $Res=mysql_query($Que,$Co);
        while($fil=mysql_fetch_array($Res)){
            if($Ced==$fil["cedula"] && $Nom==$fil["pass"]){
                $aux=true;
            }
        }
        if($aux==true){
            echo "<script>
                window.location.href='http://localhost/Gimnasio/Menu.php'
                </script>";  
        }else{
            echo "Error en los datos";
        }
    ?>  
        </b></font>
        </div>
    </body>
</html>
