<html>
<?php
$res = json_decode( file_get_contents('http://localhost:4000/infocards/user1/'), true );
$encrypted = $res;
$clave = 'KeyMustBe16ByteOR24ByteOR32Byte!';
$decrypted = @openssl_decrypt($encrypted, 'aes-256-ecb', $clave);
$res = json_decode($decrypted, true);
$lastactive_eur = $res['lastactive_eur'];
$lastactive_int = $res['lastactive_int'];
$card_europe = $res['card_europe'];
$card_international = $res['card_international'];
$current_card = $res['current_card'];
?>
<!-- <h1><?php //echo isset($_POST['cambiar']);?></h1>-->
    <form method="post" name="tarjetas" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Cambiar tarjeta:<input type="submit" name="cambiar" value="Activar"/>
    </form>
	</br>
    <table border="1">
    <tr>
    <th>Ultima vez activado</th>
	<?php
	if($current_card == 'INTERNATIONAL') {
		?>
    <td><?php echo $lastactive_int;?></td> 
	<?php }
	if($current_card == 'EUROPE') {
		?>
    <td><?php echo $lastactive_eur;?></td> <?php } ?>
    </tr>
    <tr>
    <th>Numero tarjeta</th>
    <?php
	if($current_card == 'INTERNATIONAL') {
		?>
    <td><?php echo $card_international;?></td> 
	<?php }
	if($current_card == 'EUROPE') {
		?>
    <td><?php echo $card_europe;?></td> <?php } ?>
    </tr>
    <tr>
    <th>Tarjeta actual</th>
    <td><?php echo $current_card;?></td> 
    </tr>
    </table>
<?php
if(isset($_POST['cambiar'])) {
    if($current_card == 'INTERNATIONAL') {
		$res = json_decode( file_get_contents('http://localhost:4000/enablecard/user1/EUROPE'), true );
		header("Refresh:0");
		}

    }
    if(isset($_POST['cambiar'])) {    
    if($current_card == 'EUROPE') {
        $res = json_decode ( file_get_contents ('http://localhost:4000/enablecard/user1/INTERNATIONAL'), true);
		header("Refresh:0");
		}
		}
?>
</html>
