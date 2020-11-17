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
            <h1 class="display-4 mid">Transportes</h1>
            <div class="form-group">
                <label for="nombre">Empresa:</label><br>
                <input type="radio" id="IVOVIC" name="empresa" value="IVOVIC">
                <label for="IVOVIC">IVOVIC</label><br>
                <input type="radio" id="Leonidas" name="empresa" value="Leonidas">
                <label for="Leonidas">Leonidas</label><br>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del Destinatario:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="tipo_aportacion">Destino:</label>
                <select class="form-control" name="destino" id="destino">
                    <option value="">Seleccione el destino</option>
                    <option value="Arequipa">Arequipa</option>
                    <option value="Ilo">Ilo</option>
                    <option value="Tacna">Tacna</option>
                    <option value="Piura">Piura</option>
                    <option value="Puno">Puno</option>
                    <option value="Tumbes">Tumbes</option>
                    <option value="Cajamarca">Cajamarca</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Cantidad_TM">Cantidad de TM:</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control">
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

    <?php
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $destino = $_POST['destino'];
    $cantidad = $_POST['cantidad'];
    $empresa = $_POST['empresa'];
    include 'transporte.php';
    if($empresa=="IVOVIC"){
    $reg = new IVOVIC($nombre,$destino,$cantidad);
    $reg->imprimir();
    }else {
        $reg = new LEONIDAS($nombre,$destino,$cantidad);
        $reg->tarifario();
        $reg->imprimir();
    }
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