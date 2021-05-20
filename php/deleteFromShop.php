<?php
    session_start();
    include_once("conn.php");

    
    // id de session del usuario logueado
    $id_session = $_SESSION["id_user"];


    // este parametro viene desde ajax
    // es el id que tiene el producto en la tabla products
    $id_product = $_POST['id_product'];



    // Inserto en la tabla products lo siguiente...
    //$sql = "INSERT INTO shop (id_session, id_product) VALUES ('$id_session', '$id_product')";
    $sql = "DELETE FROM shop WHERE id_product = $id_product";
 
    if (mysqli_query($conn, $sql)) {
        $_SESSION['prod'.$id_product] = null;
        $response = 'success';
    } else {
        $response = 'error';
    }
    mysqli_close($conn);

    echo $response;

?>