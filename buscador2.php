<html>
<head>
<title>Buqueda</title>
</head>
<body>
<?php
$user_id = get_current_user_id();
?>
<form name="form_buscar" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <input type="hidden" id="form_sent" name="form_sent" value="true">
  <h1>Búsqueda de horas en cada proyecto</h1></br>
    <label>Fecha comienzo: <br/>
    <input type="date" id="start_date" name="start_date"  placeholder="yyyy/mm/dd"> </label><br/>
    <label>Fecha final:<br/>
    <input type="date" id="end_date" name="end_date"  placeholder="yyyy/mm/dd"></label></br><br/>
   <label> <input type="text" placeholder="Nombre del proyecto" name="nombre_proyecto"> </label><br/><br/>

</p>
    <input type="submit" name="buscador" value="Buscar" />
<br/><br/>
</form>
<?php
	if(!isset($_POST['buscador'])){
    $con = mysqli_connect("localhost","grupo3","grupo3","wordpress") 
    or die("No se ha podido conectar a la BD");
	if ($user_id == 1){
            $sql = "select * from gestion ";
        }else{
            $sql = "select * from gestion where ID like '$user_id'";
        };
    $result = mysqli_query($con, $sql);
    if (!$result) {
        $error = mysqli_error($con);
        echo "ERROR: $error";
    } else {
        ?>
<table border="1">
    <tr><th>Nombre del proyecto</th>
    	<th>Horas</th>
    	<th>Codigo de departamento</th>
		<th>Codigo de proyecto</th>
		<th>Fecha</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
	<td><?php echo $nombre_proyecto; ?></td> 
    	<td><?php echo $horas; ?></td>
    	<td><?php echo $codigo_departamento; ?></td> 
		<td><?php echo $codigo_proyecto; ?></td> 
		<td><?php echo $fecha; ?></td> 
		</tr>
    <?php
    }
    ?>
</table>
    <?php 
    }}if(isset($_POST['buscador'])) {

		
        $fecha_inicio=$_POST['start_date'];
        $fecha_fin=$_POST['end_date'];
        $nombre_proyecto=$_POST['nombre_proyecto'];
	
		//SI SE QUIERE BUSCAR MEDIANTE IMPORTE Y FECHA A LA VEZ
		
				if(!empty($nombre_proyecto)&&(!empty($fecha_fin))&&(!empty($fecha_inicio))){
				$con = mysqli_connect("localhost","grupo3","grupo3","wordpress") 
				or die("No se ha podido conectar a la BD");
				if ($user_id == 1){
            $sql = "select * from gestion where nombre_proyecto like '$nombre_proyecto' AND fecha between '$fecha_inicio' and '$fecha_fin' order by fecha desc";
        }else{
            $sql = "select * from gestion where nombre_proyecto like '$nombre_proyecto' AND fecha between '$fecha_inicio' and '$fecha_fin' and ID like '$user_id' order by fecha desc";
        };
				$result1 = mysqli_query($con, $sql);
			if (!$result1) {
				$error = mysqli_error($con);
				echo "ERROR: $error";}


    ?>
<table border="1">
    <tr><th>Nombre del proyecto</th>
    	<th>Horas</th>
    	<th>Codigo de departamento</th>
		<th>Codigo de proyecto</th>
		<th>Fecha</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result1)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
	<td><?php echo $nombre_proyecto; ?></td> 
    	<td><?php echo $horas; ?></td>
    	<td><?php echo $codigo_departamento; ?></td> 
		<td><?php echo $codigo_proyecto; ?></td> 
		<td><?php echo $fecha; ?></td> 
		</tr>
    <?php
    }
    ?>
</table>
<?php
		//IMPORTE FORM
		
	}else if(!empty($nombre_proyecto)){
				$con = mysqli_connect("localhost","grupo3","grupo3","wordpress") 
				or die("No se ha podido conectar a la BD");
				if ($user_id == 1){
            $sql = "select * from gestion where nombre_proyecto like '$nombre_proyecto' order by fecha desc";
        }else{
            $sql = "select * from gestion where nombre_proyecto like '$nombre_proyecto' order by fecha desc";
        };
				$result1 = mysqli_query($con, $sql);
			if (!$result1) {
				$error = mysqli_error($con);
				echo "ERROR: $error";}


   
    ?>
<table border="1">
    <tr><th>Nombre del proyecto</th>
    	<th>Horas</th>
    	<th>Codigo de departamento</th>
		<th>Codigo de proyecto</th>
		<th>Fecha</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result1)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
	<td><?php echo $nombre_proyecto; ?></td> 
    	<td><?php echo $horas; ?></td>
    	<td><?php echo $codigo_departamento; ?></td> 
		<td><?php echo $codigo_proyecto; ?></td> 
		<td><?php echo $fecha; ?></td> 
		</tr>
    <?php
    }
    ?>
</table>
<?php

// FECHA FORM

    }else if(!empty($fecha_inicio)&&(!empty($fecha_fin))){
				$con = mysqli_connect("localhost","grupo3","grupo3","wordpress") 
				or die("No se ha podido conectar a la BD");
				if ($user_id == 1){
            $sql = "select * from gestion where fecha between '$fecha_inicio' and '$fecha_fin' order by fecha desc ";
        }else{
            $sql = "select * from gestion where fecha between '$fecha_inicio' and '$fecha_fin' and ID like '$user_id' order by fecha desc ";
        };
				$result1 = mysqli_query($con, $sql);
			if (!$result1) {
				$error = mysqli_error($con);
				echo "ERROR: $error";}


   
    ?>
<table border="1">
    <tr><th>Nombre del proyecto</th>
    	<th>Horas</th>
    	<th>Codigo de departamento</th>
		<th>Codigo de proyecto</th>
		<th>Fecha</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result1)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
	<td><?php echo $nombre_proyecto; ?></td> 
    	<td><?php echo $horas; ?></td>
    	<td><?php echo $codigo_departamento; ?></td> 
		<td><?php echo $codigo_proyecto; ?></td> 
		<td><?php echo $fecha; ?></td> 
		</tr>
    <?php
    }
    ?>
</table>
	<?php }}
    
	
?>                                                                      
</body>
</html>