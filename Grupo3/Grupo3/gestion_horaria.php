<html>
<body>
<form method="post" name="gestion" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border="1">
<tr>
	<th>
		Nombre de proyecto
	</th>
	<th>
		Codigo de departamento
	</th>
	<th>
		Lunes
	</th>
	<th>
		Martes
	</th>
	<th>
		Miercoles
	</th>
	<th>
		Jueves
	</th>
	<th>
		Viernes
	</th>
</tr>
<tr>
	<td> <input name="nombre1" type="text" placeholder="Nombre"/> </td>
	<td> <input name="codigo1" type="text" placeholder="Codigo"/> </td>
	<td> <input name="lunes1" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="martes1" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="miercoles1" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="jueves1" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="viernes1" type="number" min="0" max="24" value="0"/> </td>
</tr>
<tr>
	<td> <input name="nombre2" type="text" placeholder="Nombre"/> </td>
	<td> <input name="codigo2" type="text" placeholder="Codigo"/> </td>
	<td> <input name="lunes2" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="martes2" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="miercoles2" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="jueves2" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="viernes2" type="number" min="0" max="24" value="0"/> </td>
</tr>
<tr>
	<td> <input name="nombre3" type="text" placeholder="Nombre"/> </td>
	<td> <input name="codigo3" type="text" placeholder="Codigo"/> </td>
	<td> <input name="lunes3" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="martes3" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="miercoles3" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="jueves3" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="viernes3" type="number" min="0" max="24" value="0"/> </td>
</tr>
<tr>
	<td> <input name="nombre4" type="text" placeholder="Nombre"/> </td>
	<td> <input name="codigo4" type="text" placeholder="Codigo"/> </td>
	<td> <input name="lunes4" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="martes4" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="miercoles4" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="jueves4" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="viernes4" type="number" min="0" max="24" value="0"/> </td>
	
</tr>




</table>
	<input required="required" name="fecha1" type="date"/> 
<input type="submit" value="Guardar" name="guardar" />
</form>
</body>
<?php
if(isset($_POST['guardar'])){
	$nombre1=$_POST['nombre1'];
	$codigo1=$_POST['codigo1'];
	$lunes1=$_POST['lunes1'];
	$martes1=$_POST['martes1'];
	$miercoles1=$_POST['miercoles1'];
	$jueves1=$_POST['jueves1'];
	$viernes1=$_POST['viernes1'];
	$fecha1=$_POST['fecha1'];
	
	$nombre2=$_POST['nombre2'];
	$codigo2=$_POST['codigo2'];
	$lunes2=$_POST['lunes2'];
	$martes2=$_POST['martes2'];
	$miercoles2=$_POST['miercoles2'];
	$jueves2=$_POST['jueves2'];
	$viernes2=$_POST['viernes2'];
	
	$nombre3=$_POST['nombre3'];
	$codigo3=$_POST['codigo3'];
	$lunes3=$_POST['lunes3'];
	$martes3=$_POST['martes3'];
	$miercoles3=$_POST['miercoles3'];
	$jueves3=$_POST['jueves3'];
	$viernes3=$_POST['viernes3'];
	
	$nombre4=$_POST['nombre4'];
	$codigo4=$_POST['codigo4'];
	$lunes4=$_POST['lunes4'];
	$martes4=$_POST['martes4'];
	$miercoles4=$_POST['miercoles4'];
	$jueves4=$_POST['jueves4'];
	$viernes4=$_POST['viernes4'];

	

	$suma1=$lunes1+$martes1+$miercoles1+$jueves1+$viernes1;
	$suma2=$lunes2+$martes2+$miercoles2+$jueves2+$viernes2;
	$suma3=$lunes3+$martes3+$miercoles3+$jueves3+$viernes3;
	$suma4=$lunes4+$martes4+$miercoles4+$jueves4+$viernes4;
	
	if($suma1>0){
		$con=mysqli_connect("localhost","grupo3","grupo3","wordpress")or die("no se ha conectado a la base de datos");
		$sql="insert into gestion (horas, nombre_proyecto, codigo_proyecto, fecha) values ('$suma1', '$nombre1', '$codigo1','$fecha1') ";
		$result=mysqli_query($con,$sql);
if(!$result){
	$error=mysqli_error($con);
	echo "$error";
} 
	}
	
	if($suma2>0){
		$con=mysqli_connect("localhost","grupo3","grupo3","wordpress")or die("no se ha conectado a la base de datos");
		$sql="insert into gestion (horas, nombre_proyecto, codigo_proyecto, fecha) values ('$suma2', '$nombre2', '$codigo2','$fecha1') ";
		$result=mysqli_query($con,$sql);
if(!$result){
	$error=mysqli_error($con);
	echo "$error";
} 
	}
	
	if($suma3>0){
		$con=mysqli_connect("localhost","grupo3","grupo3","wordpress")or die("no se ha conectado a la base de datos");
		$sql="insert into gestion (horas, nombre_proyecto, codigo_proyecto, fecha) values ('$suma3', '$nombre2', '$codigo3','$fecha1') ";
		$result=mysqli_query($con,$sql);
if(!$result){
	$error=mysqli_error($con);
	echo "$error";
} 
	}
	
	if($suma4>0){
		$con=mysqli_connect("localhost","grupo3","grupo3","wordpress")or die("no se ha conectado a la base de datos");
		$sql="insert into gestion (horas, nombre_proyecto, codigo_proyecto, fecha) values ('$suma4', '$nombre4', '$codigo4','$fecha1') ";
		$result=mysqli_query($con,$sql);
if(!$result){
	$error=mysqli_error($con);
	echo "$error";
} 
	}
	
	if (($suma1>0 && !$nombre1=="")||($suma2>0 && !$nombre2=="")||($suma3>0 && !$nombre3=="")||($suma4>0 && !$nombre4=="")){
		
		echo "Los datos se han introducido correctamente";
		
	}
	

}

?>
</html>
