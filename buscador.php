<html>
<head>
<title>Buqueda</title>
</head>
<body>
<form name="form_buscar" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  <h1>Búsqueda por Fecha</h1>
    Fecha comienzo: <br/>
    <input type="date" id="start_date" name="start_date"  placeholder="yyyy/mm/dd"> <br/>
    Fecha final:<br/>
    <input type="date" id="end_date" name="end_date"  placeholder="yyyy/mm/dd"><br/>
    <input type="hidden" id="form_sent" name="form_sent" value="true">
    <h1>Gastos</h1>
     Importe 1: <br/>
    <input type="number" id="importe1" name="importe1"> <br/>
     Importe2:<br/>
    <input type="number" id="importe2" name="importe2"><br/>
    <input type="hidden" id="form_sent" name="form_sent" value="true">
    <input type="submit" name="buscador" value="Buscar" />
</form>
<?php
	if(!isset($_POST['buscador'])){
    $con = mysqli_connect("localhost","root","","elefont") 
    or die("No se ha podido conectar a la BD");
    $sql = "select * from dietas";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        $error = mysqli_error($con);
        echo "ERROR: $error";
    } else {
        ?>
<table border="1">
    <tr>
    	<th>Pais</th>
    	<th>Ciudad</th>
    	<th>Fecha_inicio</th>
    	<th>Fecha_fin</th>
        <th>Continente</th>
    	<th>Gastos</th>
    	<th>Medio de transporte</th>
    	<th>Peaje</th>
        <th>Parking</th>
    	<th>Ticket</th>
    	<th>Otros conceptos</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	<td><?php echo $pais; ?></td>
    	<td><?php echo $ciudad; ?></td> 
    	<td><?php echo $fecha_inicio; ?></td>
    	<td><?php echo $fecha_fin; ?></td>
        <td><?php echo $continente; ?></td>
    	<td><?php echo $gastos; ?></td>
        <td><?php echo $medio_transporte; ?></td>
    	<td><?php echo $peaje; ?></td>
        <td><?php echo $parking; ?></td>
        <td><?php echo $ticket; ?></td>
    	<td><?php echo $otros_conceptos; ?></td>
    </tr>
    <?php
    }
    ?>
</table>
    <?php 
    }}if(isset($_POST['buscador'])) {
		
		
        $fecha_inicio=$_POST['start_date'];
        $fecha_fin=$_POST['end_date'];
        $importe1=$_POST['importe1'];
        $importe2=$_POST['importe2'];
		//SI SE QUIERE BUSCAR MEDIANTE IMPORTE Y FECHA A LA VEZ
		
				if(!empty($importe1)&&(!empty($importe2))&&(!empty($fecha_fin))&&(!empty($fecha_inicio))){
					echo "sasasa";
				$con = mysqli_connect("localhost","root","","elefont") 
				or die("No se ha podido conectar a la BD");
				$sql = "select * from dietas where gastos between '$importe1' and '$importe2' AND fecha_inicio and fecha_fin between '$fecha_inicio' and '$fecha_fin'";
				$result1 = mysqli_query($con, $sql);
			if (!$result1) {
				$error = mysqli_error($con);
				echo "ERROR: $error";}


   
    ?>
    <table border="1">
    <tr>
    	<th>Pais</th>
    	<th>Ciudad</th>
    	<th>Fecha_inicio</th>
    	<th>Fecha_fin</th>
        <th>Continente</th>
    	<th>Gastos</th>
    	<th>Medio de transporte</th>
    	<th>Peaje</th>
        <th>Parking</th>
    	<th>Ticket</th>
    	<th>Otros conceptos</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result1)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	<td><?php echo $pais; ?></td>
    	<td><?php echo $ciudad; ?></td> 
    	<td><?php echo $fecha_inicio; ?></td>
    	<td><?php echo $fecha_fin; ?></td>
        <td><?php echo $continente; ?></td>
    	<td><?php echo $gastos; ?></td>
        <td><?php echo $medio_transporte; ?></td>
    	<td><?php echo $peaje; ?></td>
        <td><?php echo $parking; ?></td>
        <td><?php echo $ticket; ?></td>
    	<td><?php echo $otros_conceptos; ?></td>
    </tr>

<?php 
    } ?>
</table>
<?php
		//IMPORTE FORM
		
	}else if(!empty($importe1)&&(!empty($importe2))){
				$con = mysqli_connect("localhost","root","","elefont") 
				or die("No se ha podido conectar a la BD");
				$sql = "select * from dietas where gastos between '$importe1' and '$importe2' ";
				$result1 = mysqli_query($con, $sql);
			if (!$result1) {
				$error = mysqli_error($con);
				echo "ERROR: $error";}


   
    ?>
    <table border="1">
    <tr>
    	<th>Pais</th>
    	<th>Ciudad</th>
    	<th>Fecha_inicio</th>
    	<th>Fecha_fin</th>
        <th>Continente</th>
    	<th>Gastos</th>
    	<th>Medio de transporte</th>
    	<th>Peaje</th>
        <th>Parking</th>
    	<th>Ticket</th>
    	<th>Otros conceptos</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result1)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	<td><?php echo $pais; ?></td>
    	<td><?php echo $ciudad; ?></td> 
    	<td><?php echo $fecha_inicio; ?></td>
    	<td><?php echo $fecha_fin; ?></td>
        <td><?php echo $continente; ?></td>
    	<td><?php echo $gastos; ?></td>
        <td><?php echo $medio_transporte; ?></td>
    	<td><?php echo $peaje; ?></td>
        <td><?php echo $parking; ?></td>
        <td><?php echo $ticket; ?></td>
    	<td><?php echo $otros_conceptos; ?></td>
    </tr>

<?php 
    } ?>
</table>
<?php

// FECHA FORM

    }else if(!empty($fecha_inicio)&&(!empty($fecha_fin))){
				$con = mysqli_connect("localhost","root","","elefont") 
				or die("No se ha podido conectar a la BD");
				$sql = "select * from dietas where fecha_inicio and fecha_fin between '$fecha_inicio' and '$fecha_fin' ";
				$result1 = mysqli_query($con, $sql);
			if (!$result1) {
				$error = mysqli_error($con);
				echo "ERROR: $error";}


   
    ?>
    <table border="1">
    <tr>
    	<th>Pais</th>
    	<th>Ciudad</th>
    	<th>Fecha_inicio</th>
    	<th>Fecha_fin</th>
        <th>Continente</th>
    	<th>Gastos</th>
    	<th>Medio de transporte</th>
    	<th>Peaje</th>
        <th>Parking</th>
    	<th>Ticket</th>
    	<th>Otros conceptos</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result1)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	<td><?php echo $pais; ?></td>
    	<td><?php echo $ciudad; ?></td> 
    	<td><?php echo $fecha_inicio; ?></td>
    	<td><?php echo $fecha_fin; ?></td>
        <td><?php echo $continente; ?></td>
    	<td><?php echo $gastos; ?></td>
        <td><?php echo $medio_transporte; ?></td>
    	<td><?php echo $peaje; ?></td>
        <td><?php echo $parking; ?></td>
        <td><?php echo $ticket; ?></td>
    	<td><?php echo $otros_conceptos; ?></td>
    </tr>

<?php 
    } ?>
</table>
	<?php }}
    
	
?>                                                                      
</body>
</html>
