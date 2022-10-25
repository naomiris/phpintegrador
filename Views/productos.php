<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Productos</title>
</head>

<body>
    <?php
    include("nav.php")
    ?>
    <div class="container mb-5">
        <h1 class="porductos_title text-center">Estas son nuestras Pizzas Rappi</h1>
    </div>
    <!-- <?php

$name = "";
$img = "";
$detalle = "";
$precio = "";

if(isset($_GET['producto'])){
    switch($_GET['producto']){
        case 'peperoni': 
            $img = "./assets/pizza_peperoni.webp";
            $name = 'Peperoni';
            $detalle = 'El pepperoni es un embutido similar al salami muy sabroso y con un toque picantón. Aunque parezca una palabra italiana no lo es, dado que en Italia este ingrediente se denomina salsiccia napoletana piccante y en varios países de Latino américa es conocido como longaniza. Si te gusta, no puedes perderte esta pizza casera con pepperoni al estilo Domino’s.';
            $precio = '$1500';
            break;
            default: 'select a product';
    }
}

?>
<div class="card bg-dark" style="width: 18rem;">
    <img src=<?php echo $img;?> class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $name; ?></h5>
        <p class="card-text"><?php echo $detalle; ?></p>
        <p><?php echo $precio;?></p>
    </div>
</div> -->
    <div class=" mt-5 d-flex flex-wrap gap-5 justify-content-center align-items-center mb-5">
        <div class="card bg-dark" style="width: 18rem;">
            <img src="/Views/assets/pizza_peperoni.webp" class="card-img-top" alt="...">
            <form action="producto.php" method="get">
                <div class="card-body">
                    <h5 class="card-title">Peperoni</h5>
                    <a href="producto.php?producto=peperoni" class="btn btn-dark">Detalle</a>
                </div>
            </form>
        </div>
        <div class="card bg-dark" style="width: 18rem;">
            <img src="/Views/assets/pizza_4quesos.jpg" class="card-img-top" alt="...">
            <form action="producto.php" method="get">
                <div class="card-body">
                    <h5 class="card-title">Peperoni</h5>
                    <a href="producto.php?producto=4quesos" class="btn btn-dark">Detalle</a>
                </div>
            </form>
        </div>
        <div class="card bg-dark" style="width: 18rem;">
            <img src="/Views/assets/pizza_depollo.jpg" class="card-img-top" alt="...">
            <form action="producto.php" method="get">
                <div class="card-body">
                    <h5 class="card-title">Peperoni</h5>
                    <a href="producto.php?producto=depollo" class="btn btn-dark">Detalle</a>
                </div>
            </form>
        </div>
        <div class="card bg-dark" style="width: 18rem;">
            <img src="/Views/assets/pizza_hawaiana.jpg" class="card-img-top" alt="...">
            <form action="producto.php" method="get">
                <div class="card-body">
                    <h5 class="card-title">Peperoni</h5>
                    <a href="producto.php?producto=hawaiana" class="btn btn-dark">Detalle</a>
                </div>
            </form>
        </div>
        <div class="card bg-dark" style="width: 18rem;">
            <img src="/Views/assets/pizza_italiana.jpg" class="card-img-top" alt="...">
            <form action="producto.php" method="get">
                <div class="card-body">
                    <h5 class="card-title">Peperoni</h5>
                    <a href="producto.php?producto=italiana" class="btn btn-dark">Detalle</a>
                </div>
            </form>
        </div>
        <div class="card bg-dark" style="width: 18rem;">
            <img src="/Views/assets/pizza_margarita.jpg" class="card-img-top" alt="...">
            <form action="producto.php" method="get">
                <div class="card-body">
                    <h5 class="card-title">Peperoni</h5>
                    <a href="producto.php?producto=margarita" class="btn btn-dark">Detalle</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>