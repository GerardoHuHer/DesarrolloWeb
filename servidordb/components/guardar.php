<?php
include "sql.php";


$query = "INSERT INTO productos (Nombre, Precio, Inventario)";
$query .= ' VALUES ("' . $_POST["nombre"] . '", ' . $_POST["precio"] . ', ' . $_POST["cantidad"] . ')';

$conn->query($query);

$conn->close();
/* 
    Ventas 
        ID_transaccion
        Producto
        Cantidad
        Precio Unit
        Precio Total
    Checkout-> Comprar -> Carrito -> Insert
*/
?>

<script>
    location.href = "../misProductos.php"
</script>