<?php
include_once("../modelo/conedit.php");
$Id = $_POST['id'];

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