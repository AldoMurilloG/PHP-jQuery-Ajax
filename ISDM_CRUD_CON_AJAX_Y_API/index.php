<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD con AJAX consumiendo una API en PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>CRUD de Productos</h1>
        </div>

        <div class="col-12 col-md-4">
            <h2>Agregar Productos</h2>

        <!-- Formulario para crear/actualizar un producto -->
        <form id="form" method="POST">
            <input type="hidden" name="_method" value="POST">

            <div class="mb-3">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label for="price">Precio:</label>
                <input type="number" step="0.01" id="form-control" id="price" required>
            </div>

            <div class="mb-3">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" id="stock" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-sucess me-1">Crear Producto</button>
            </div>
        </form>
        </div>

        <div class="col-12 col-md-8">
        <!-- Lista de productos --> 
            <h2>Lista de Productos</h2>
            
            <table id="product-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider"></tbody>
            </table>
        </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="./assets/js/main.js"></script>
</body>

</html>