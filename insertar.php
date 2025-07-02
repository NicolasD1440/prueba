<?php
 include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $conexion->query("
        INSERT INTO PRODUCTOS (nombre, descripcion, precio, cantidad) 
        values ('$nombre','$descripcion','$precio','$cantidad')
        ");

        header("Location: listar_productos.php");
}
?>

<form method="POST">
 NOMBRE: <input type="text" name="nombre" required><br>
 DESCRIPCION: <input type="text" name="descripcion" required><br>
 PRECIO: <input type="text" name="precio" required><br>
 CANTIDAD: <input type="text" name="cantidad" required><br>
 <button type="submit">Insertar</button><br>
</form>