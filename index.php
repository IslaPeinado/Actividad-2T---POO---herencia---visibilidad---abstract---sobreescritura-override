<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>2T - POO - herencia - visibilidad - abstract - sobreescritura / override</h3>

    <?php
    require_once('animal.php');
    require_once('gato.php');
    require_once('perro.php');

    $animal=new animal();
    $animal->comer();
    /*$animal->dormir(); */
    
    $perro=new perro();
    $perro->comer();
    /*$perro->dormir(); */

    $gato=new gato();
    $gato->comer();
    /*$gato->dormir(); */

    ?>
</body>
</html>