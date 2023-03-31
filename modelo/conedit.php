<?php
$usuario = "root";
$clave = "";
$nombrebd = "restaurante";
try{
    $bd = new PDO('mysql:host=localhost;dbname='.$nombrebd,$usuario,$clave);

}catch(Exception $e){

    echo"<script> alert('Todos los campos son obligatorios')</script>".$e->getMessage();

}
?>