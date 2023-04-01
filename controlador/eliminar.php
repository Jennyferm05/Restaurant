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


$sentencia = $bd->prepare("DELETE FROM domicilios WHERE Id=:id;");
$sentencia->bindParam(':id',$Id);

if($sentencia->execute()){
    echo"<script> alert('Edicion Exitoso')
    location.href = '../vista/pedidos.php';</script>";

}
else{
    return"Error";
}
?>