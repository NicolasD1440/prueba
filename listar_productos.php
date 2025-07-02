<?php
error_reporting(0);
include 'db.php';
$query = $conexion->query('SELECT * FROM PRODUCTOS');
?>

<h2>Lista de productos </h2>
<a href='insertar.php'>Crear nuevo producto</a>
<LInk rel="Stylesheet" href="styles.css"></LInk>


<table border="1">
    
    <tr>
        <th>ID</th>
            <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                    <th>PRECIO</th>
                        <th>CANTIDAD</th>
                          <th>ACCIONES</th>

    </tr>
    <?php while ($producto = $query->fetch_assoc()) {
    ?>
  <tr>
   <td><?php echo($producto['id'])?></td>
    <td><?php  echo($producto['nombre'])   ?></td>
     <td><?php   echo($producto['descripcion'])  ?></td>
      <td><?php    echo($producto['precio']) ?></td>
       <td><?php    echo($producto['cantidad']) ?></td>
        <td> <a href="editar.php?id=<?=$producto['id']?>"> Editar registro </a> |  
                <a href="eliminar.php?id=<?=$producto['id']?>" onclick="return confirm ('desea eliminar el registro')"> Eliminar registro </a> 
        </td>
 
    </tr>
    

    <?php   }   ?>
</table>

<form method="GET">
  <input type="text" class="input-group-text" name="busqueda">
  <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<?php 
 $res = $_GET['busqueda'];
$busqueda = $conexion->query("SELECT * FROM PRODUCTOS WHERE NOMBRE LIKE '%$res%'");

?>

<table border="1">
    
    <tr>
        <th>ID</th>
            <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                    <th>PRECIO</th>
                        <th>CANTIDAD</th>
                          <th>ACCIONES</th>

    </tr>
    <?php while ($producto = $busqueda->fetch_assoc()) {
    ?>
  <tr>
   <td><?php echo($producto['id'])?></td>
    <td><?php  echo($producto['nombre'])   ?></td>
     <td><?php   echo($producto['descripcion'])  ?></td>
      <td><?php    echo($producto['precio']) ?></td>
       <td><?php    echo($producto['cantidad']) ?></td>
        <td> <a href="editar.php?id=<?=$producto['id']?>"> Editar registro </a> |  
                <a href="eliminar.php?id=<?=$producto['id']?>" onclick="return confirm ('desea eliminar el registro')"> Eliminar registro </a> 
        </td>
 
    </tr>
    

    <?php   }   ?>
</table>

