
<!--Título-->
<p><H2>Gestión de gastos</H2></p>
<!--Formulario-->
<FORM id="contacto" name="contacto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<p>
<label>Continente
</label>

<select name="continente" size=1 "> 
            <option selected="true" disabled="disabled" value="">Seleccione Continente
			<option value="Europa">Europa
			<option value="Asia">Asia
			<option value="Africa">Africa
			<option value="America_del_norte">America del norte
			<option value="America_del_sur">America del sur
			<option value="Oceania">Oceania
			</select>
			

<p>
<label>Ciudad
<input name="ciudad" type="text" id="ciudad" size="31"/></label></p>
<p>
<label>Pais
<input name="pais" type="text" id="pais" size="31"/></label></p>
<p>
<label>Fecha inicio</label>
<input type="datetime-local" name="fechainicio">
</p>
<p>
<label>Fecha fin</label>
<input type="datetime-local" name="fechafin">
</p>
<p><input type="submit" name="enviar" value="Enviar"/></p>
</FORM>

<?php
if(isset($_POST['enviar'])){
    $continente=$_POST['continente'];
    $pais=$_POST['pais'];
    $ciudad=$_POST['ciudad'];
    $fecha_inicio=$_POST['fechainicio'];
    $fecha_fin=$_POST['fechafin'];



if ( $fecha_inicio > $fecha_fin) die ("El valor no es correcto");{
        $diff = abs(strtotime($fecha_fin) - strtotime($fecha_inicio));
//Estas variables son necesarias para calcular los dias
            $anos = floor(($diff / (365*60*60*24)));
            $meses = floor(($diff - $anos * 365*60*60*24) / (30*60*60*24));
            $dias = floor(($diff - $anos * 365*60*60*24 - $meses*30*60*60*24)/ (60*60*24));
if( $dias < 4 )  die ("Introduce una fecha mayor a 4 dias");{
    if( $continente == 'Europa' ) 
{$con_dieta = 60*($dias);
    } 
elseif ($con_dieta = 100*($dias)) 
{ }

$con=mysqli_connect("localhost","root","","elefont")or die("no se ha conectado a la base de datos");
$sql="INSERT INTO dietas(pais, ciudad, fecha_inicio, fecha_fin, continente, gastos) values ('$pais', '$ciudad', '$fecha_inicio', '$fecha_fin', '$continente', '$con_dieta')";
$result=mysqli_query($con,$sql);
if(!$result){
    $error=mysqli_error($con);
    echo "$error";
} else{
    echo "se han introducido correctamente los datos";
}

}
}
}
?>