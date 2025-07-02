<?php
$host = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_datos = 'inventario'; //pendiente a crear


$conexion = new mysqli($host,$usuario,$contraseña,$base_datos);

if ($conexion) {
    echo('conexion exitosa!');
}else{
    echo('fallo en la conexion!');
}
?>