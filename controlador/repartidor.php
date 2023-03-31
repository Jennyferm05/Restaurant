<?php
include_once("../modelo/conedit.php");
$Id = $_POST['id'];
$Id_Repartidor = $_POST['Id_Repartidor'];



$sentencia = $bd->prepare("UPDATE domicilios SET Id_Repartidor= ? WHERE Id= ?;");
$resultado = $sentencia->execute([$Id_Repartidor,$Id]);
    
if($resultado){
echo "<script> alert('Edicion Exitoso')
    location.href = '../vista/pedidos.php';</script>";
}
else{
    return "Error";
}
?>

