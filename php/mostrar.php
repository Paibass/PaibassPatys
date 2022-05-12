<?php
$inc = include("con_db.php");

if ($inc) {
	$consulta = "SELECT * FROM opiniones";
	$resultado = mysqli_query($mysqli,$consulta);
	if($resultado){
		while ($row = $resultado->fetch_array()) {
			$nombre = $row['nombre'];
			$email = $row['email'];
			$feedback = $row['feedback'];
			$fechareg = $row['fecha_reg'];
			?>
			<div style="background-color: #fff;" >
				<h2>hi <?php echo $nombre; ?> </h2>
				<div>
					<p>
						<?php echo $feedback ?>
					</p>
				</div>
			</div>
			<?php
		}
	}
}
?>