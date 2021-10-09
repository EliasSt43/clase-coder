<?php
    $destino ="eliasjoaquinsteurer@gmail.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $país = $_POST["pais"];
    $calle = $_POST["dirección-de-calle"];
    $ciudad = $_POST["localidad"];
    $provincia = $_POST["provincia"];
    $postal = $_POST["codigo-postal"];
    $telefono = $_POST["telefono"];
    $producto = $_POST["especificaion-de-producto"];
    $contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nEmail: " . $email . "\nPaís: " . $país . "\nDirección de la calle: " . $calle . "\nLocalidad / Ciudad: " . $ciudad . "\nProvincia / Región: " . $provincia . "\nCódigo postal: " . $postal . "\nTeléfono: " . $telefono . "\nProducto en especifico: " . $producto;
    mail($destino, "Pedido", $contenido);
    header("Location: gracias.html");
?>