<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Registro de Hijos</legend>
            Apellidos : <br>
            <input type="text" name="txtapellido"><br>
            Nombres : <br>
            <input type="text" name="txtnombre"><br>
            Edad : <br>
            <input type="number" name="txtedad"><br>
            Monto : <br>
            <input type="text" name="txtmonto"><br>
            <button type="submit" name="enviar">Enviar</button>
        </fieldset>    
    </form>
    <?php

        if(isset($_POST['enviar'])){
            //obteniendo los valores de los input
            $apellido=$_POST['txtapellido'];
            $nombre=$_POST['txtnombre'];
            $edad=$_POST['txtedad'];
            $monto=$_POST['txtmonto'];
            //Utilizando la clase hijp
            include 'Hijo.php';
            //Instanciando un objeto
            $hijo = new HijoP();
            $hijo->setApellido($apellido);
            $hijo->setNombre($nombre);
            $hijo->setEdad($edad);
            $hijo->setMonto($monto);
            $hijo->imprimirDatos();

        }
    ?>
    
</body>
</html>