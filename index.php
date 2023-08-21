<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Crud</title>
</head>
<body>
    <?php
        include_once("Model/Usuario.php");
        //$bd = new ConDB();
        //var_dump($bd->con);
        $us = new Usuario();
        $datos=$us->queryUsers();
        
        foreach($datos as $d){?>
        <p><?php print($d['id']." ".$d['usuario']);?></p>
        <?php    
        }
    ?>
</body>
</html>
