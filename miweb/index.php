<?php
	$mysqli = new mysqli('mysql', 'admin', 'admin', 'sa');
	$mysqli->set_charset("utf8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Muestra de Datos</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
        </tr>
        <?php
        $res = $mysqli->query("SELECT * FROM clientes");
        while($f=$res->fetch_object()){
        ?>
        <tr>
            <th><?php echo $f->nif ?></th>
            <th><?php echo $f->nombre ?></th>
            <th><?php echo $f->apellidos ?></th>
            <th><?php echo $f->telefono ?></th>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
