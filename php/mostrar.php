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
			<div class="m-4 bg-light" style="font-family: 'Roboto', sans-serif;">
				<h2><?php echo $nombre; ?> </h2>
				<div>
					<p class="fs-4">
						<?php echo $feedback ?>
					</p>
				</div>
			</div>
			<?php
		}
	}
}
?>