<?php
    session_start();
    // Cierre de sesion
    session_destroy();
    include_once("conn.php");

   
    // Cuando el usuario se desloguea se borra el contenido de la tabla shop
    // para que asi el carro quede vacio.
    $query = "DELETE FROM shop";
    $result = $conn->query($query);

    header("Location: ../pages/home.php");
    
?>