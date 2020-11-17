<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="abs-center">
            <form action="" method="post" class="border p-3 form">
                <h1 class="display-4 mid">Registro de Pago de Haberes</h1>
                <div class="form-group">
                    <label for="nombre">Nombre del Empleado:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <input type="text" name="categoria" id="categoria" class="form-control">
                </div>
                <div class="form-group">
                    <label for="basico">Básico</label>
                    <input type="number" name="basico" id="basico" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bonificacion">Bonificación</label>
                    <input type="number" name="bonificacion" id="bonificacion" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tipo_aportacion">Tipo de Aportación:</label>
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="AFP">AFP</option>
                        <option value="ONP">ONP</option>
                    </select>
                </div>
                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['enviar'])){
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $basico = $_POST['basico'];
            $bonificacion = $_POST['bonificacion'];
            $tipo = $_POST['tipo'];

            include 'empleados.php';
            $reg = new registrar($nombre,$categoria,$basico,$bonificacion,$tipo);

            $reg->imprimir();
        }
        ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>