<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>producto</title>
</head>
<body>
  <?php
    include('nav.php')
    ?>

<?php
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
        case '4quesos': 
            $img = "./assets/pizza_4quesos.jpg";
            $name = 'Cuatro Quesos';
            $detalle = 'La pizza de cuatro quesos es un clásico que se encuentra en todas las pizzerías de Italia. Cada uno lo ofrece con diferentes tipos de queso, según la disponibilidad y la zona en la que se prepare. Sin embargo, el queso que nunca falta es el gorgonzola, dulce o picante.';
            $precio = '$1600';
            break;
        case 'depollo': 
            $img = "./assets/pizza_depollo.jpg";
            $name = 'Pizza De Pollo';
            $detalle = 'Esta pizza es una especie de pizza carbonara, pero con pollo, y el resultado es fantástico. Así que si te gusta la salsa carbonara, y te gusta el pollo, esta es tu pizza. La masa es esponjosa estilo pan, y la salsa es una bechamel ligera con queso que es una delicia.';
            $precio = '$1200';
            break;
        case 'hawaiana': 
            $img = "./assets/pizza_hawaiana.jpg";
            $name = 'Hawaiana';
            $detalle = 'La pizza hawaiana es una pizza que contiene una base de salsa pomodoro, queso mozzarella fundido y como toppings jamón y piña. Algunas versiones de esta pizza incluyen tocino, camarones, cerezas, cebollas y hasta chile serrano o jalapeño. Como sea la piña está siempre presente';
            $precio = '$1500';
            break;
        case 'italiana': 
            $img = "./assets/pizza_italiana.jpg";
            $name = 'Italiana';
            $detalle = 'Una de las características de la pizza italiana es que la masa es delgada, ya que su origen viene desde antes de Jesucristo, cuando los griegos acostumbraban comer panes planos decorados con hierbas, especias, ajo y cebolla.';
            $precio = '$1800';
            break;
        case 'margarita': 
            $img = "./assets/pizza_margarita.jpg";
            $name = 'Margarita';
            $detalle = 'La pizza margarita (en italiano pizza Margherita) es una típica pizza napolitana elaborada con tomate, mozzarella (tradicionalmente se usa el Fior di latte), albahaca fresca, sal y aceite. Se trata de la pizza napolitana más popular, junto con la marinera.';
            $precio = '$1900';
            break;
            default: 'select a product';
    }
    ?>
    <div class="container d-flex justify-content-center align-items-center">
    <div class="card bg-dark" style="width: 50%;">
        <img src=<?php echo $img;?> class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-light"><?php echo $name; ?></h5>
            <p class="card-text text-light"><?php echo $detalle; ?></p>
            <p class="text-light"><?php echo $precio;?></p>
        </div>
    </div>
    </div>
    <?php
}
?>
</body>
</html>