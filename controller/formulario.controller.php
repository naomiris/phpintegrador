<?php
if(isset($_POST)){
    $name_formulario = $_POST['name'];
    $asunto_formulario = $_POST['subject'];
    $mensaje_formulario = $_POST['message'];   
}
$cuerpo_mail = "Nombre:".$name_formulario."\r\n"."Asunto:".$asunto_formulario."\r\n"."Mensaje:".$mensaje_formulario."\r\n";

mail("naomiirisd@gmail.com", "Mensaje de Pizza Rappi", $cuerpo_mail);

header("Location :Views/contacto.php?e=ok");
