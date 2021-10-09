<?php
    $destino ="eliasjoaquinsteurer@gmail.com";
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["Email"];
    $país = $_POST["País"];
    $calle = $_POST["Dirección de calle"];
    $ciudad = $_POST["Localidad"];
    $provincia = $_POST["Provincia"];
    $postal = $_POST["Código postal"];
    $telefono = $_POST["Teléfono"];
    $producto = $_POST["Especificaion de producto"];
    $contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nEmail: " . $email . "\nPaís: " . $país . "\nDirección de la calle: " . $calle . "\nLocalidad / Ciudad: " . $ciudad . "\nProvincia / Región: " . $provincia . "\nCódigo postal: " . $postal . "\nTeléfono: " . $telefono . "\nProducto en especifico: " . $producto;
    mail($destino, "Pedido", $contenido);
    header("Location: gracias.html");
?>