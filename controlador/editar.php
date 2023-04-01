<?php
include_once("../modelo/conedit.php");
$Id = $_POST['id'];
$Nombres = $_POST['nombre'];
$Apellidos = $_POST['apellidos'];
$Telefono = $_POST['telefono'];
$Correo = $_POST['correo'];
$Direccion = $_POST['direccion'];
$Id_Metodo_Pagos = $_POST['pagos'];
$Id_Platos_Populares = $_POST['platos'];
$Id_Postres = $_POST['postres'];
$Id_Bebidas = $_POST['bebidas'];
$Id_Repartidor = $_POST['repartidor'];



$sentencia = $bd->prepare("UPDATE domicilios SET Nombres= ?,Apellidos= ?,Telefono= ?,Correo= ?,Direccion= ?,Id_Metodo_Pagos= ?,Id_Platos_Populares= ?,Id_Postres= ?,Id_Bebidas= ?,Id_Repartidor= ? WHERE Id= ?;");
$resultado = $sentencia->execute([$Nombres,$Apellidos,$Telefono,$Correo,$Direccion,$Id_Metodo_Pagos,$Id_Platos_Populares,$Id_Postres,$Id_Bebidas,$Id_Repartidor,$Id]);
    
if($resultado){
echo "<script> alert('Edicion Exitoso')
    location.href = '../vista/pedidos.php';</script>";
}
else{
    return "Error";
}
?>

