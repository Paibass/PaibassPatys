<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['feedback'])) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $feedback = trim($_POST['feedback']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO opiniones(nombre, email, feedback, fecha_reg) VALUES ('$name','$email','$feedback','$fechareg')";
	    $resultado = mysqli_query($mysqli,$consulta);

}
}

?>