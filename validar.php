<?php
$user = $_POST['user'];
$pass = $_POST['pass'];



require_once('conection.php');

$consulta="SELECT * FROM users where email = '$user' and password = '$pass'";
$resultado = mysqli_query($db, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:products.php");
	session_start();
	$_SESSION['user'] = $user;
}else{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad">ERROR AT LOGIN</h1>

  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>