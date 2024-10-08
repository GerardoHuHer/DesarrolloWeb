<?php
    include "components/sql.php";
    // Query
    $query = "SELECT * FROM productos;";
    // Información del query que trajimos
    $result = $conn->query($query);
    // Creamos arreglo vacío
    $productos = [];
    // Validamos que tenga al menos un registro
    if($result->num_rows > 0){
        // Extraemos y almacenamos en el arreglo products
        while($row = $result->fetch_assoc()){
            array_push($productos, $row);
        }
    }
    // Cerramos conexión con la base de datos.
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container { height: 100vh; }
        .table-container { 
            border: 0.5px solid black; 
            border-radius: 5px;
        }
    </style>
</head>

<body>
<?php include './components/navbar.php' ?>
    <div class="container d-flex">
    <div class="row m-auto">
        <div class="col d-flex">
            <div class="m-auto table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for ($i = 0; $i < count($productos); $i++) {
                                echo "<tr>";
                                echo "<td>".$productos[$i]["Nombre"]. "</td>";
                                echo "<td>".$productos[$i]["Precio"]. "</td>";
                                echo "<td>".$productos[$i]["Inventario"]. "</td>";
                                echo "<td><button class='btn btn-sm btn-primary' type='button' onclick='agregar(".$i.")'>+</button></td>";
                                echo "</tr>";
                            }


                        ?>
                    </tbody>
                </table>
                <div class="d-flex p-3">
                    <a class="btn-primary btn m-auto" type="submit" href="nuevoProducto.php">Nuevo</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/addCart.js"></script>

</body>
</html>