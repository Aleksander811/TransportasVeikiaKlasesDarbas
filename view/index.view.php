<?php

use TRANSPORT\Transport;
use TRANSPORT\Render;
use TRANSPORT\Car;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php



    $car = new Car('DFR', 'Kauno tiltai');
    $car->addEngine('V8');
    $car->addKw('360');
    Render::display($car->getAllInfo());
/*
    $bike = new Bike('Dviratis', 'ABCDEF');
    $bike->addCategory('kalnų');
    $bike->addRunners('18 bėgių');
    Render::display($car->getAllInfo());

    $motorcycle = new Motorcycle('Honda', 'ABCDEF');
    $motorcycle->addSpeed('240 km/h');
    $motorcycle->addWheels('2 ratai');
    $motorcycle->addKw('75 kw');
    $motorcycle->addPrice('14 000 eur');

    Render::display($motorcycle->getAllInfo()); */
    ?>


</body>

</html>