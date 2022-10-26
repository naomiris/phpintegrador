<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    include("nav.php")
    ?>
    <h2 class="d-flex justify-content-center text-light">Dejanos tu mensaje!</h2>
    <form action="/controller/formulario.controller.php" method="POST">
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center mt-5" >
            <label for="exampleFormControlInput1" class="form-label text-light">Name</label>
            <input type="text" name="name" class="form-control w-50" id="exampleFormControlInput1" required>
            <label for="exampleFormControlInput1" class="form-label text-light">Subject</label>
            <input type="text" name="subject" class="form-control w-50" id="exampleFormControlInput1" required>
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleFormControlTextarea1" class="form-label text-light">Message</label>
            <textarea class="form-control w-50" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
            <input type="submit" value="Enviar" class="w-50" required>
        </div>
    </form>

    <?php
    if (isset($_GET['e'])) {
        echo "<h3> Mensaje enviado correctamente </h3>";
    }
    ?>
</body>

</html>