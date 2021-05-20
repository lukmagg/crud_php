<?php
    session_start();   
    include_once("../conn.php");

  
    // Recibimos los datos de los inputs
    $code = $_POST['code'];
    $title = $_POST['title'];
    $price = $_POST['price'];

    // Recibimos los datos de la imagen
    $img_name = $_FILES['image']['name']; // return ej.: autocarrera.jpg

    $img_type = $_FILES['image']['type']; // return ej.: image/jpg

    $img_size = $_FILES['image']['size']; // Tamaño de la imagen

    $img_slug = $_FILES['image']['name']; // Salug de la imagen
    
    // Quito los espacios al slug
    //$img_slug = str_replace(' ', '', $img_slug);

    $temp = $_FILES['image']['tmp_name'];

    


    // $_SERVER['DOCUMENT_ROOT'] --->>> /var/www/html
    // Esta es la direccion de mi carpeta local donde almaceno las imagenes
    $target = $_SERVER['DOCUMENT_ROOT'] . "/proyecto_nuevo/images/" . basename( $_FILES['image']['name']); 
    
    // Muevo el archivo temporal a la carpeta destino
    move_uploaded_file($temp,$target);

    

    // Inserto en la base de datos en la tabla products lo siguiente...
    $sql = "INSERT INTO products (code, title, price, slug) VALUES ('$code', '$title', '$price', '$img_slug')";
    
 
    if (mysqli_query($conn, $sql)) {
        $_SESSION["success"] = 'success';
        header("Location: ../../pages/admin/dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

?>