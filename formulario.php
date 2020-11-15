<html> 
	<body> 
		<div align="center">
	<form name="form_gastos" method="post">
<input type="hidden" name="enviado" value="1"/>
		<h1 align="center">Gastos</h1></br>
        <?php
		$fecha= date("Y-m-d H:i:s");
                $user_id = get_current_user_id();
?> 
<p> Transporte: </p>
	 	<select required="required" name="transporte">
	 		<option selected="true" disabled="disabled" value="">- Elige un medio de transporte -</option>
			<option>Coche</option>
			<option>Autobus</option>
			<option>Taxi</option>
			<option>Tren</option>
			<option>Metro</option>
			<option>Bicicleta</option>
			<option>A pie</option>  
		</select><br/>
		<input type="submit" name="btn_enviar" value="Seleccionar"/><br/>
		</form><br/>
		</div>
<?php
if (isset($_POST['enviar_coche'])) {
            $medio_transporte=$_POST['coche'];
            $fecha=$_POST['fecha'];
            $distancia=$_POST['distancia'];
            $peaje=$_POST['peaje'];
            $parking=$_POST['parking'];
			$codigo_departamento=$_POST['codigo_departamento'];
			$codigo_proyecto=$_POST['codigo_proyecto'];
            $otros_conceptos=$_POST['otros_conceptos'];
            $km= ($distancia * 3);
            $suma = $km+$peaje+$parking;
            $con=mysqli_connect("localhost","grupo3","grupo3","wordpress") or die("error");
            $result = mysqli_query($con, "insert into dietas (ID,gastos,fecha_inicio,medio_transporte,distancia,peaje,parking,otros_conceptos, codigo_departamento, codigo_proyecto) values ('$user_id', '$suma', '$fecha', '$medio_transporte', '$distancia', '$peaje', '$parking', '$otros_conceptos', '$codigo_departamento', '$codigo_proyecto')");
            if (!$result) {
                $error = mysqli_error($con);
                echo "ERROR: $error"; 
             } else {
                echo "Datos bien introducidos";
             } 
         
                } else if (isset($_POST['enviar_autobus'])) {
                    $medio_transporte=$_POST['autobus'];
                    $fecha=$_POST['fecha'];
                    $ticket=$_POST['ticket'];
			$codigo_departamento=$_POST['codigo_departamento'];
			$codigo_proyecto=$_POST['codigo_proyecto'];
                    $otros_conceptos=$_POST['otros_conceptos'];
                    $con=mysqli_connect("localhost","grupo3","grupo3","wordpress") or die("error");
                    $result = mysqli_query($con, "insert into dietas (ID,fecha_inicio,medio_transporte,ticket, otros_conceptos, codigo_departamento,codigo_proyecto) values ('$user_id','$fecha','$medio_transporte','$ticket','$otros_conceptos','$codigo_departamento','$codigo_proyecto')");
                    if (!$result) {
                        $error = mysqli_error($con);
                        echo "ERROR: $error"; 
                     } else {
                        echo "Datos bien introducidos";
                     } 
                 
                        } else if (isset($_POST['enviar_taxi'])) {
                            $medio_transporte=$_POST['taxi'];
                            $fecha=$_POST['fecha'];
                            $ticket=$_POST['ticket'];
							$codigo_departamento=$_POST['codigo_departamento'];
							$codigo_proyecto=$_POST['codigo_proyecto'];
                            $otros_conceptos=$_POST['otros_conceptos'];
                            $con=mysqli_connect("localhost","grupo3","grupo3","wordpress") or die("error");
                            $result = mysqli_query($con, "insert into dietas (ID,fecha_inicio,medio_transporte,ticket, otros_conceptos, codigo_departamento,codigo_proyecto) values ('$user_id','$fecha','$medio_transporte','$ticket','$otros_conceptos','$codigo_departamento','$codigo_proyecto')");
                            if (!$result) {
                                $error = mysqli_error($con);
                                echo "ERROR: $error"; 
                             } else {
                                echo "Datos bien introducidos";
                             } 
                         
                                } else if (isset($_POST['enviar_tren'])) {
                                    $medio_transporte=$_POST['tren'];
                                    $fecha=$_POST['fecha'];
                                    $ticket=$_POST['ticket'];
									$codigo_departamento=$_POST['codigo_departamento'];
									$codigo_proyecto=$_POST['codigo_proyecto'];
                                    $otros_conceptos=$_POST['otros_conceptos'];
                                    $con=mysqli_connect("localhost","root","","elefont") or die("error");
                                    $result = mysqli_query($con, "insert into dietas (ID, fecha_inicio,medio_transporte,ticket, otros_conceptos, codigo_departamento,codigo_proyecto) values ('$user_id','$fecha','$medio_transporte','$ticket','$otros_conceptos','$codigo_departamento','$codigo_proyecto')");
                                    if (!$result) {
                                        $error = mysqli_error($con);
                                        echo "ERROR: $error"; 
                                     } else {
                                        echo "Datos bien introducidos";
                                     } 
                                 
                                        } elseif (isset($_POST['enviar_metro'])) {
                                            $medio_transporte=$_POST['metro'];
                                            $fecha=$_POST['fecha'];
                                            $ticket=$_POST['ticket'];
											$codigo_departamento=$_POST['codigo_departamento'];
											$codigo_proyecto=$_POST['codigo_proyecto'];
                                             $otros_conceptos=$_POST['otros_conceptos'];
                                    $con=mysqli_connect("localhost","grupo3","grupo3","wordpress") or die("error");  
                                    $result1 = mysqli_query($con, "insert into dietas (ID,fecha_inicio,medio_transporte,ticket, otros_conceptos, codigo_departamento,codigo_proyecto) values ('$user_id','$fecha','$medio_transporte','$ticket','$otros_conceptos','$codigo_departamento','$codigo_proyecto')");
                                    if (!$result1) {
                                        $error = mysqli_error($con);
                                        echo "ERROR: $error"; 
                                     } else {
                                        echo "Datos bien introducidos";
                                     } 
                                 
                                        } else if(isset($_POST['btn_enviar'])) {

    if(!empty($_POST['transporte'])) {
        $selected = $_POST['transporte'];
 
 
 
		if($selected == 'Coche'){
?>
			<H1 align="center"> COCHE </H1>
			<form name="form_coche" method="post"
		action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="coche" value="Coche"/>
		<p>Fecha y hora</p><input type="datetime-local" id="fecha" name="fecha"  placeholder="yyyy/mm/dd"> <br/>
		<p>Distancia</p><input name="distancia" step="0.1" placeholder="KM" type="number"  min="1" max="1000000"/>
		<p>Precio del peaje</p><input name="peaje" step="0.01" placeholder="€" type="number"  min="0" max="1000000"/>
		<p>Precio del parking</p><input name="parking" step="0.01" placeholder="€" type="number"  min="0" max="1000000"/>
		<br/><input name="codigo_departamento" type="text" id="codigo_departamento" size="31" placeholder="Codigo de Departamento"/></p>
		<input name="codigo_proyecto" type="text" id="codigo_proyecto" size="31" placeholder="Codigo de Proyecto"/></p></br>
		<textarea cols="89" rows="10" name="otros_conceptos" placeholder="Otros conceptos..."></textarea></br>
		<p><input type="submit" name="enviar_coche" value="Enviar">
		</form>
<?php

		
		
		}else if($selected == 'Autobus'){
			?>
			<H1 align="center"> Autobus </H1>
			<form name="form_coche" method="post"
		action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="autobus" value="Autobus"/>
		<p>Fecha y hora</p><input type="datetime-local" id="fecha" name="fecha"  placeholder="yyyy/mm/dd"> <br/>
		<p>Precio de ticket</p><input name="ticket" step="0.1" placeholder="€" type="number"  min="0" max="1000000"/>
		<br/><br/><input name="codigo_departamento" type="number" placeholder="Codigo Departamento" /></p>
		<input name="codigo_proyecto" type="number" placeholder="Codigo de proyecto"/></p></br>
		<textarea cols="89" rows="10" name="otros_conceptos" placeholder="Otros conceptos..."></textarea></br>
		<p><input type="submit" name="enviar_autobus"value="Enviar">
		</form>
		<?php
				
		}else if($selected == 'Taxi'){
			?>
			<H1 align="center"> Taxi </H1>
			<form name="form_coche" method="post"
		action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<p>Fecha y hora</p><input type="datetime-local" id="fecha" name="fecha"  placeholder="yyyy/mm/dd"> <br/>
		<input type="hidden" name="taxi" value="Taxi"/>
		<p>Precio de la carrera:</p><input name="ticket" step="0.1" placeholder="€" type="number"  min="0" max="1000000"/>
		<br/><br/><input name="codigo_departamento" type="number" placeholder="Codigo Departamento" /></p>
		<input name="codigo_proyecto" type="number" placeholder="Codigo de proyecto"/></p></br>
		<textarea cols="89" rows="10" name="otros_conceptos" placeholder="Otros conceptos..."></textarea></br>
		<p><input type="submit" name="enviar_taxi" value="Enviar">
		</form>
		<?php




		}else if($selected == 'Tren'){
			?>
			<H1 align="center"> Tren </H1>
			<form name="form_coche" method="post"
		action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="tren" value="Tren"/>
		<p>Fecha y hora</p><input type="datetime-local" id="fecha" name="fecha"  placeholder="yyyy/mm/dd"> <br/>
		<p>Precio de ticket</p><input name="ticket" step="0.1" placeholder="€" type="number"  min="0" max="1000000"/>
		<br/><br/><input name="codigo_departamento" type="number" placeholder="Codigo Departamento" /></p>
		<input name="codigo_proyecto" type="number" placeholder="Codigo de proyecto"/></p></br>
		<textarea cols="89" rows="10" name="otros_conceptos" placeholder="Otros conceptos..."></textarea></br>
		<p><input type="submit" name="enviar_tren" value="Enviar">
		</form>
		<?php
		
		}else if($selected == 'Metro'){
			?>
			<H1 align="center"> Metro </H1>
			<form name="form_coche" method="post"
		action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="metro" value="Metro"/>
		<p>Fecha y hora</p><input required type="datetime-local" id="fecha" name="fecha"  placeholder="yyyy/mm/dd"> <br/>
		<p>Precio de ticket</p><input name="ticket" step="0.1" placeholder="€" type="number"  min="0" max="1000000"/>
		<br/><br/><input name="codigo_departamento" type="number" placeholder="Codigo Departamento" /></p>
		<input name="codigo_proyecto" type="number" placeholder="Codigo de proyecto"/></p></br>
		<textarea cols="89" rows="10" name="otros_conceptos" placeholder="Otros conceptos..."></textarea></br>
		<p><input type="submit" name="enviar_metro"value="Enviar">
		</form>
        <?php	
		
       }
    } else {
    
        echo 'Selecciona un valor por favor.';
    
    }
}
?>
</body>
</html>