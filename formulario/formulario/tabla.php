<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .container { height: 100vh; }
      table {
        border: 1px solid black;

      }
    </style>
</head>

<body>
    <div class="container d-flex">
        <div class="row m-auto">
            <div class="col d-flex">
                <div class="m-auto">
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
                          <tr>
                            <td class="d-flex" rowspan="4">
                              <button class="m-auto btn-primary btn" type="submit">Nuevo</button>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>