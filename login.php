<?php 
    session_start(); 
?>
<html>
<title> SPORTGYM</title>

<script type="text/javascript">
    

//validar los campos del formulario

function Validar() {

    var Cedula=document.getElementById("Cedula").value;
    var Nombre=document.getElementById("Nombre").value;


    if (Cedula==0) {
        alert("Se Neceita Llenar El Campo De Cedula");
        document.getElementById("Cedula").focus();
        return false;
    };

    if (Nombre==0) {
        alert("Se Neceita Llenar El Campo De Nombre");
        document.getElementById("Nombre").focus();
        return false;
    };
    form.submit();
}

</script>

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
    </div>
    <form action="ValidarLogin.php" method="post" id="form">
    <div align="center">
    <table>
    <h2>BIENVENIDO USUARIO</h2> 
    <tr>
    <td><label ><font size="4" face="Arial"><b>Cedula</b></font></label></td>
    <td><input type="text" name="cedula" id="Cedula" size="25" placeholder="Cedula"/></td> 
    </tr>
    <tr>
    <td><label ><font size="4" face="Arial"><b>Nombre</b></font></label> </td>
    <td><input type="text" name="Nombre" id="Nombre" size="25" placeholder="Nombre"/> </td>
    </tr>
    </table>
    <br>
    <input type="button" value="Ingresar" onclick="Validar()"><br>
    <br>
    <input type="reset" value="Nuevo Ingreso" name="B1"> <br>
    <br>
    <form action="inicio.php" method="post">         
    <a href='http://localhost/Gimnasio/inicio.php' type="submit"> 
    <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
    </form>
    </div>
</html>   