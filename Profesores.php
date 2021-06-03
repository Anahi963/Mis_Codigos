<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edicciones f</title>
<link href="estilos.css" rel="stylesheet" type="text/css">

	
</head>
<body>
<header class="Cabecera">
     <h1>Edicciones Fares</h1>
	
</header>
<section class="secformulario">
<center><h2>Ingresar Profesores</h2></center>
<form action="agregarprofesores.php" method="post" id="agregarprofesores.php" accept-charset="UTF-8">
<fieldset><legend>Datos Personales</legend>
<label for="Identidad">Identidad:<span class="required">*</span></label>
<input type="number" id="Identidad" name ="Identidad" value="" placeholder="Identidad" required="required"/><br/>
<label for="Nombre">Nombre:<span class="required">*</span></label>
<input name ="Nombre" type="text" required="required"  id="Nombre" placeholder="Ingresar nombre" value="" size="26"/><br/>
<label for="Direccion">Direccion:</label>
<input name="Direccion" cols="25" rows="3" id="Direccion" placeholder="Direccion" ></input><br/>
<label for="Telefono">Telefono:</label>
<input name="Telefono" type="text" id="Telefono" placeholder="Ingresar Telefono" value="" size="26"><br/>
<fieldset><legend>Sexo</legend>
<center>
<label><input name="Sexo" type="Radio" id="Sexo_0" value="H"
checked="checked">Hombre</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label><input type="Radio" name="Sexo" value="M" id="Sexo_1">Mujer</label></center>
	</fieldset>
	
	<fielset><legend>Otros Datos</legend> 
	<label for="Estado">Estado:<span  class="required">*</span></label>
	<select name="Estado" required id="Estado">
	<option value"1">Activo</option>
     <option value="0">Inactivo</option>	
		</select>	
	<br/><label for="Observaciones">Observaciones:</label>	
	<input name="Observaciones" cols="22" rows="3" id="Observaciones"></input>
			  
</fielset>
<center><input type="submit" value="Guardar Datos" id="submit"/></center>
</form>
</section>
	
</body>
</html>