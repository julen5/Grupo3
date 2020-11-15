<html>
<body>
<?php
$user_id = get_current_user_id();
?>
<form method="post" name="gestion" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border="1">
<tr>
	<th>
	Nombre del proyecto
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
	<td> <input name="nombre_proyecto1" type="text" placeholder=""/> </td>
	<td> <input name="lunes1" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="martes1" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="miercoles1" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="jueves1" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="viernes1" type="number" min="0" max="24" value="0"/> </td>
</tr>
<tr>
	<td> <input name="nombre_proyecto2" type="text" placeholder=""/> </td>
	<td> <input name="lunes2" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="martes2" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="miercoles2" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="jueves2" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="viernes2" type="number" min="0" max="24" value="0"/> </td>
</tr>
<tr>
	<td> <input name="nombre_proyecto3" type="text" placeholder=""/> </td>
	<td> <input name="lunes3" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="martes3" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="miercoles3" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="jueves3" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="viernes3" type="number" min="0" max="24" value="0"/> </td>
</tr>
<tr>
	<td> <input name="nombre_proyecto4" type="text" placeholder=""/> </td>
	<td> <input name="lunes4" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="martes4" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="miercoles4" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="jueves4" type="number" min="0" max="24" value="0"/> </td>
	<td> <input name="viernes4" type="number" min="0" max="24" value="0"/> </td>
	
</tr>

</table>
       <label>
	<input name="codigo_proyecto1" placeholder="Codigo de proyecto" type="text"/>      </label>   
	 <label>
	<input  name="codigo_departamento1"  placeholder="Codigo de departamento" type="text"/>  </label></br>
        <label><p>Introduce la fecha de ingreso</p>
	<input required="required" name="fecha1" type="date"/>  </label>
<input type="submit" value="Guardar" name="guardar" />
</form>
</body>
<?php
if(isset($_POST['guardar'])){
	$codigo_proyecto1=$_POST['codigo_proyecto1'];
	$codigo_departamento1=$_POST['codigo_departamento1'];
	$nombre_proyecto1=$_POST['nombre_proyecto1'];
	$lunes1=$_POST['lunes1'];
	$martes1=$_POST['martes1'];
	$miercoles1=$_POST['miercoles1'];
	$jueves1=$_POST['jueves1'];
	$viernes1=$_POST['viernes1'];

	$fecha1=$_POST['fecha1'];
	
	$nombre_proyecto2=$_POST['nombre_proyecto2'];
	$lunes2=$_POST['lunes2'];
	$martes2=$_POST['martes2'];
	$miercoles2=$_POST['miercoles2'];
	$jueves2=$_POST['jueves2'];
	$viernes2=$_POST['viernes2'];
	
	$nombre_proyecto3=$_POST['nombre_proyecto3'];
	$lunes3=$_POST['lunes3'];
	$martes3=$_POST['martes3'];
	$miercoles3=$_POST['miercoles3'];
	$jueves3=$_POST['jueves3'];
	$viernes3=$_POST['viernes3'];
	
	$nombre_proyecto4=$_POST['nombre_proyecto4'];
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
		$result=mysqli_query($con,"insert into gestion (ID,horas, codigo_departamento, codigo_proyecto, fecha, nombre_proyecto) values ('$user_id', '$suma1', '$codigo_departamento1', '$codigo_proyecto1','$fecha1','$nombre_proyecto1') ");
if(!$result){
	$error=mysqli_error($con);
	echo "$error";
} 
	}
	
	if($suma2>0){
		$con=mysqli_connect("localhost","grupo3","grupo3","wordpress")or die("no se ha conectado a la base de datos");
		$result=mysqli_query($con,"insert into gestion (ID, horas, codigo_departamento, codigo_proyecto, fecha, nombre_proyecto) values ('$user_id','$suma2', '$codigo_departamento1', '$codigo_proyecto1','$fecha1','$nombre_proyecto2') ");
if(!$result){
	$error=mysqli_error($con);
	echo "$error";
} 
	}
	
	if($suma3>0){
		$con=mysqli_connect("localhost","grupo3","grupo3","wordpress")or die("no se ha conectado a la base de datos");
		$result=mysqli_query($con,"insert into gestion (ID, horas, codigo_departamento, codigo_proyecto, fecha, nombre_proyecto) values ('$user_id', '$suma3', '$codigo_departamento1', '$codigo_proyecto1','$fecha1','$nombre_proyecto3') ");
if(!$result){
	$error=mysqli_error($con);
	echo "$error";
} 
	}
	
	if($suma4>0){
		$con=mysqli_connect("localhost","grupo3","grupo3","wordpress")or die("no se ha conectado a la base de datos");
		$result=mysqli_query($con,"insert into gestion (ID, horas, codigo_departamento, codigo_proyecto, fecha, nombre_proyecto) values ('$user_id', '$suma4', '$codigo_departamento1', '$codigo_proyecto1','$fecha1','$nombre_proyecto4') ");
if(!$result){
	$error=mysqli_error($con);
	echo "$error";
} else{
echo "Datos bien introducidos";
}
	}
	

	

}

?>
</html>