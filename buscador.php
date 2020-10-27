<html>
<head>
<title>Buqueda</title>
</head>
<body>
<form name="form_buscar" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  <h1>Búsqueda por Fecha</h1>
     Fecha comienzo: <br/>
    <input type="datetime-local" id="start_date" name="start_date"  placeholder="yyyy/mm/dd"> <br/>
     Fecha final:<br/>
    <input type="datetime-local" id="end_date" name="end_date"  placeholder="yyyy/mm/dd"><br/>
    <input type="hidden" id="form_sent" name="form_sent" value="true">
    <input type="submit" name="buscador" value="Buscar" />
    <h1>Gastos</h1>
     Fecha comienzo: <br/>
    <input type="text" id="start_date" name="start_date"  placeholder="yyyy/mm/dd"> <br/>
     Fecha final:<br/>
    <input type="text" id="end_date" name="end_date"  placeholder="yyyy/mm/dd"><br/>
    <input type="hidden" id="form_sent" name="form_sent" value="true">
    <input type="submit" name="buscador" value="Buscar" />

</form>
<?php
    if(!isset($_POST['buscador'])) {
    $con = mysqli_connect("localhost","grupo3","grupo3","elefont") 
    or die("No se ha podido conectar a la BD");
    $sql = "select * from gasto";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        $error = mysqli_error($con);
        echo "ERROR: $error";
    } else {
        ?>
<table border="1">
    <tr>
    	<th>Nombre</th>
    	<th>Apellido</th>
    	<th>Fecha</th>
    	<th>Gasto</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	<td><?php echo $nombre; ?></td>
    	<td><?php echo $apellido; ?></td> 
    	<td><?php echo $fecha; ?></td>
    	<td><?php echo $gasto; ?></td>
    </tr>
<?php
}?>
</table>
<?php 
}
    }
?>
<?php
if(isset($_POST['buscador'])) {
    $con = mysqli_connect("localhost","grupo3","grupo3","elefont") 
        or die("No se ha podido conectar a la BD");
    $fecha_inicio = $_POST['start_date'];
    $fecha_fin = $_POST['end_date'];
    $sql = "select * from gasto where fecha between '$fecha_inicio' and '$fecha_fin'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        $error = mysqli_error($con);
        echo "ERROR: $error";
    } else  {
        ?>
<table border="1">
    <tr>
    	<th>Nombre</th>
    	<th>Apellido</th>
    	<th>Fecha</th>
    	<th>Gasto</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result)) { //mientras haya datos...
    extract($row);
?>  
    <tr>
    	<td><?php echo $nombre; ?></td>
    	<td><?php echo $apellido; ?></td> 
    	<td><?php echo $fecha; ?></td>
    	<td><?php echo $gasto; ?></td>
    </tr>

<?php 
    } ?>
</table>
<?php }
} ?>
</body>
</html>