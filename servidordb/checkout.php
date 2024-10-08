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
                            <th>Cantidad</th>
                            <th>Precio unit.</th>
                            <th>Precio total</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                    </tbody>
                </table>
                <div class="d-flex p-3">
                    <a class="btn-primary btn m-auto" type="submit">Pagar</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<script>
    let c = localStorage.getItem('carrito');
    let carrito = c ? JSON.parse(c) : [];

    carrito.forEach(p => {
        let item = "<tr>";
        item += "<td>"+p.nombre+"</td>";
        item += "<td>"+p.item+"</td>";
        item += "<td>"+p.precio+"</td>";
        item += "<td>"+(Number(p.item)*Number(p.precio))+"</td>";
        item += "</tr>"
        document.getElementById('tbody').innerHTML += item;
    });
</script>