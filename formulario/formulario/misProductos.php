<?php
    $path = "db/productos.json";
    $productos = json_decode(file_get_contents($path), TRUE);


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
                                echo "<td>".$productos[$i]["nombre"]. "</td>";
                                echo "<td>".$productos[$i]["precio"]. "</td>";
                                echo "<td>".$productos[$i]["cantidad"]. "</td>";
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