<html>
<head>
<title>Buqueda</title>
</head>
<body>
<?php
$user_id = get_current_user_id();
?>
<form name="form_buscar" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  <h1>Búsqueda por Fecha</h1>
    <label>Fecha comienzo: <br/>
    <input type="date" id="start_date" name="start_date"  placeholder="yyyy/mm/dd"></label> <br/>
    <label>Fecha final:<br/>
    <input type="date" id="end_date" name="end_date"  placeholder="yyyy/mm/dd"></label><br/>
    <input type="hidden" id="form_sent" name="form_sent" value="true">
     <label>Importe 1:<br/>
    <input type="number" id="importe1" name="importe1"> <br/></label>
    <label> Importe 2:<br/>
    <input type="number" id="importe2" name="importe2"><br/></label>
    <input type="hidden" id="form_sent" name="form_sent" value="true"></br>
    <input type="submit" name="buscador" value="Buscar" />
</form>
</br>
<?php
	if(!isset($_POST['buscador'])){
    $con = mysqli_connect("localhost","grupo3","grupo3","wordpress") 
    or die("No se ha podido conectar a la BD");
if ($user_id == 1){
$sql = "select * from dietas";
     } else {
    $sql = "select * from dietas where ID like '$user_id'";
    };
$result = mysqli_query($con, $sql);
    if (!$result) {
        $error = mysqli_error($con);
        echo "ERROR: $error";
    } else {
        ?>
<table border="1">
    <tr>
    	<th>Ciudad</th>
    	<th>Fecha_inicio</th>
    	<th>Fecha_fin</th>
    	<th>Gastos</th>
    	<th>Medio de transporte</th>
    	<th>Peaje</th>
        <th>Parking</th>
    	<th>Ticket</th>
		<th>Depto.</th>
		<th>Proyecto</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	<td><?php echo $ciudad; ?></td> 
    	<td><?php echo $fecha_inicio; ?></td>
    	<td><?php echo $fecha_fin; ?></td>
    	<td><?php echo $gastos; ?></td>
        <td><?php echo $medio_transporte; ?></td>
    	<td><?php echo $peaje; ?></td>
        <td><?php echo $parking; ?></td>
        <td><?php echo $ticket; ?></td>
		<td><?php echo $codigo_departamento; ?></td>
		<td><?php echo $codigo_proyecto; ?></td>
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
				$con = mysqli_connect("localhost","grupo3","grupo3","wordpress") 
				or die("No se ha podido conectar a la BD");
                                if ($user_id  == 1) {
			        $sql = "select * from dietas where gastos between '$importe1' and '$importe2' AND fecha_inicio and fecha_fin between '$fecha_inicio' and '$fecha_fin' order by fecha_inicio desc";
                                } else {
                                $sql = "select * from dietas where gastos between '$importe1' and '$importe2' AND fecha_inicio and fecha_fin between '$fecha_inicio' and '$fecha_fin' and ID like '$user_id' order by fecha_inicio desc";
};
				$result1 = mysqli_query($con, $sql);
			if (!$result1) {
				$error = mysqli_error($con);
				echo "ERROR: $error";}


    ?>
    <table border="1">
    <tr>
    	  	<th>Ciudad</th>
    	<th>Fecha_inicio</th>
    	<th>Fecha_fin</th>
    	<th>Gastos</th>
    	<th>Medio de transporte</th>
    	<th>Peaje</th>
        <th>Parking</th>
    	<th>Ticket</th>
		<th>Depto.</th>
		<th>Proyecto</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result1)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	    	<td><?php echo $ciudad; ?></td> 
    	<td><?php echo $fecha_inicio; ?></td>
    	<td><?php echo $fecha_fin; ?></td>
    	<td><?php echo $gastos; ?></td>
        <td><?php echo $medio_transporte; ?></td>
    	<td><?php echo $peaje; ?></td>
        <td><?php echo $parking; ?></td>
        <td><?php echo $ticket; ?></td>
		<td><?php echo $codigo_departamento; ?></td>
		<td><?php echo $codigo_proyecto; ?></td>
    </tr>

<?php 
    } ?>
</table>
<?php
		//IMPORTE FORM
		
	}else if(!empty($importe1)&&(!empty($importe2))){
				$con = mysqli_connect("localhost","grupo3","grupo3","wordpress") 
				or die("No se ha podido conectar a la BD");
                                 if ($user_id  == 1) {
                                 $sql = "select * from dietas where gastos between '$importe1' and '$importe2' order by fecha_inicio desc";
                                 } else {
				$sql = "select * from dietas where gastos between '$importe1' and '$importe2' and ID like '$user_id' order by fecha_inicio desc";
                               };
				$result1 = mysqli_query($con, $sql);
			if (!$result1) {
				$error = mysqli_error($con);
				echo "ERROR: $error";}


   
    ?>
    <table border="1">
    <tr>
    	  	<th>Ciudad</th>
    	<th>Fecha_inicio</th>
    	<th>Fecha_fin</th>
    	<th>Gastos</th>
    	<th>Medio de transporte</th>
    	<th>Peaje</th>
        <th>Parking</th>
    	<th>Ticket</th>
		<th>Depto.</th>
		<th>Proyecto</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result1)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	    	<td><?php echo $ciudad; ?></td> 
    	<td><?php echo $fecha_inicio; ?></td>
    	<td><?php echo $fecha_fin; ?></td>
    	<td><?php echo $gastos; ?></td>
        <td><?php echo $medio_transporte; ?></td>
    	<td><?php echo $peaje; ?></td>
        <td><?php echo $parking; ?></td>
        <td><?php echo $ticket; ?></td>
		<td><?php echo $codigo_departamento; ?></td>
		<td><?php echo $codigo_proyecto; ?></td>
    </tr>

<?php 
    } ?>
</table>
<?php

// FECHA FORM

    }else if(!empty($fecha_inicio)&&(!empty($fecha_fin))){
				$con = mysqli_connect("localhost","root","","elefont") 
				or die("No se ha podido conectar a la BD");
                           if ($user_id  == 1) {
$sql = "select * from dietas where fecha_inicio and fecha_fin between '$fecha_inicio' and '$fecha_fin' order by fecha_inicio desc ";
                           } else {
				$sql = "select * from dietas where fecha_inicio and fecha_fin between '$fecha_inicio' and '$fecha_fin' and ID like '$user_id' order by fecha_inicio desc ";
                            };
				$result1 = mysqli_query($con, $sql);
			if (!$result1) {
				$error = mysqli_error($con);
				echo "ERROR: $error";}


   
    ?>
    <table border="1">
    <tr>
    	  	<th>Ciudad</th>
    	<th>Fecha_inicio</th>
    	<th>Fecha_fin</th>
    	<th>Gastos</th>
    	<th>Medio de transporte</th>
    	<th>Peaje</th>
        <th>Parking</th>
    	<th>Ticket</th>
		<th>Depto.</th>
		<th>Proyecto</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result1)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	    	<td><?php echo $ciudad; ?></td> 
    	<td><?php echo $fecha_inicio; ?></td>
    	<td><?php echo $fecha_fin; ?></td>
    	<td><?php echo $gastos; ?></td>
        <td><?php echo $medio_transporte; ?></td>
    	<td><?php echo $peaje; ?></td>
        <td><?php echo $parking; ?></td>
        <td><?php echo $ticket; ?></td>
		<td><?php echo $codigo_departamento; ?></td>
		<td><?php echo $codigo_proyecto; ?></td>
    </tr>

<?php 
    } ?>
</table>
	<?php }}
    
	
?>                                                                      
</body>
</html>
