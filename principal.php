<html>
<head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script type="text/javascript">
    

//validar los campos del formulario

function Validar() {

    var Cedula=document.getElementById("Cedula").value;
    var Nombre=document.getElementById("Nombre").value;
    var Apellido=document.getElementById("Apellidos").value;
    var Fecha=document.getElementById("fecha_nac").value;
    var Direccion=document.getElementById("Direccion").value;
    var Telefono=document.getElementById("Telefono").value;


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

    if (Apellido==0) {
        alert("Se Neceita Llenar El Campo De Apellidos");
        document.getElementById("Apellidos").focus();
        return false;
    };

    if (Fecha==0) {
        alert("Se Neceita Llenar El Campo De fecha_nac");
        document.getElementById("fecha_nac").focus();
        return false;
    };

    if (Direccion==0) {
        alert("Se Neceita Llenar El Campo De Direccion");
        document.getElementById("Direccion").focus();
        return false;
    };

    if (Telefono==0) {
        alert("Se Neceita Llenar El Campo De Telefono");
        document.getElementById("Telefono").focus();
        return false;
    };

    alert("Datos Validos");
    form.submit();
   
}

//pagina html

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
<form action="prueba.php" method="post" id="form">
<div align="center">
<table>
 <h2>FORMULARIO DE INSCRIPCI&OacuteN</h2> 
 <tr>
 <td><label ><font size="4" face="Arial"><b>Cedula</b></font></label></td>
 <td><input type="text" name="cedula" id="Cedula" size="25" placeholder="Cedula"/></td> 
 </tr>
 <tr>
<td><label ><font size="4" face="Arial"><b>Nombre</b></font></label> </td>
<td><input type="text" name="Nombre" id="Nombre" size="25" placeholder="Nombre"/> </td>
</tr>
<tr>
<td><label ><font size="4" face="Arial"><b>Apellido</b></font></label> </td>
<td><input type="text" name="Apellidos" id="Apellidos" size="25" placeholder="Apellidos"/></td>
</tr>
<tr>
<td><label ><font size="4" face="Arial"><b>Fecha De Nacimiento</b></font></label></td>
<td><input type="date" name="fecha_nac" id="fecha_nac" size="25" placeholder="fecha_nac"/></td>
</tr>
<tr>
<td><label ><font size="4" face="Arial"><b>Direccion </b></label></font></td>
<td><input type="text" name="Direccion" id="Direccion" size="25" placeholder="Direccion"/></td>
</tr>
<tr>
<td><label ><font size="4" face="Arial"><b>Telefono </b></font></label></td>
<td><input type="text" name="Telefono" id="Telefono" size="25" placeholder="Telefono"/></td>
</tr>
<input type="button" value="Registrar" onclick="Validar()"><br>
<br>
<input type="reset" value="Nueva Inscripción" name="B1"> <br>
<br>
</table>
<br>
<form action="inicio.php" method="post">         
        <a href='http://localhost/Gimnasio/inicio.php' type="submit"> 
        <img src='http://localhost/Gimnasio/atras.png' hspace='20' width='100' height='100' border='0'></a>
        </form>
</div>
</form>
</body>
</html>

