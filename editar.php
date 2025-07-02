<?php
include 'db.php';

$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM PRODUCTOS WHERE ID = $id");
$producto = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $conexion->query("
     UPDATE PRODUCTOS SET
     NOMBRE =  '$nombre',
     DESCRIPCION =  '$descripcion',
     PRECIO = '$precio',
     CANTIDAD =  '$cantidad'
     WHERE ID = '$id'");

     header("Location: listar_productos.php");
}

?>

<form method="POST">
 Nombre:<input type="text" name="nombre"  value="<?=$producto['nombre']?>" required><br>
 Descripcion:<input type="text" name="descripcion"  value="<?=$producto['descripcion']?>" required><br>
 Precio:<input type="text" name="precio"  value="<?=$producto['precio']?>" required><br>
 Cantidad:<input type="text" name="cantidad"  value="<?=$producto['cantidad']?>" required><br>
 <button type="submit">Enviar cambios</button><br>
</form>