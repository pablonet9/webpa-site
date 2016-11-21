<?php  include("incluidos/conexion.php");?>
 <html>
	<head>
	<title>Formulario Usuario</title>
	</head>
	<body>
	<br><br><br>
	<FORM align="center"  method="GET" action="guardarusua.php"  enctype="multipart/form-data"> 
Registro de un Usuario
<br>
<table BORDER="1" align="center">   
<tr>
	    <td>Nombre:</td>
	    <td>
	    <input type=text name="nombre">
	    </td>
</tr>
<tr>
	    <td>Documento de Identidad:</td>
	    <td>
	    <input type=text name="documento">
	    </td>
</tr>  
<tr>	
	    <br><br>
        <td>Edad:</td>
	    <br><br>
        <td>
	    <input type="text" name="edad" size="20">
	    </td>

</tr>
<tr>
	    <td>Titulo Profesional:</td>
	    <td>
	    <input type=text name="titulo">
	    </td>
</tr>
	 
</tr>
<tr>
	    <td>Cargo el usuario:</td>
	    <td>
	    <select name="cargo">
		<OPTION VALUE="comercial">Comercial</OPTION>
		<OPTION VALUE="programador">Programador</OPTION>
		<OPTION VALUE="diseñador">Diseñador</OPTION>
		<OPTION VALUE="admin">Adminnitrador</OPTION>
	</select>
	    </td> 
</tr> 
<tr>
	    <td>Años de Experiencia:</td>
	    <td>
	    <input type=text name="anos">
	    </td> 
</tr> 
<tr>
	    <td>Ciudad de Residencia:</td>
	    <td>
	    <input type=text name="ciudad">
	    </td> 
</tr> 
<tr>
	    <td>Numero Telefonico:</td>
	    <td>
	    <input type=text name="telefono">
	    </td> 
</tr> 
<tr>
	    <td>Numero Celular:</td>
	    <td>
	    <input type=text name="celular">
	    </td> 
</tr> 
<tr>
	    <td>Correo:</td>
	    <td>
	    <input type=text name="correo">
	    </td> 
</tr> 
<tr>
	    <td>Descarga la hoja de vida en formato PDF, DOC o DOCX:</td>
	    <td>
	     <input type="file" name="archivo" id="descargar">      
	    </td> 
</tr> 
<tr>
   </td>
	   <TD COLSPAN=2 align="center">
	<INPUT type="submit" value="Grabar">
	</TD>

</tr>
</table>
</FORM>
<br>
<div align="center">
<a href="admin.php">Panel administrador</a>
</div>
	</body>
</html>