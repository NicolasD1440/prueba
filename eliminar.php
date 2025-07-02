<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
   $conexion->query("DELETE FROM productos WHERE ID = $id");
}else{
    echo('algo salio mal');
}

header('Location: listar_productos.php');
?>