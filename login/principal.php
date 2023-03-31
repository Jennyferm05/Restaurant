<link rel="stylesheet" href="login.css">
<div class="cajafuera">
<div class="pagprincipal">
	
<?php
include('conexion.php');
session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<h1>Bienvenido: $usuarioingresado </h1>";
}
else
{
	header('location: index.html');
}
?>
<form method="POST">
<tr><td colspan='2' align="center"><input type="submit" value="Cerrar sesión" name="btncerrar" /></td></tr>
</form>

<?php 

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.html');
}
	
?>

</div>

</div>