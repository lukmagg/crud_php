<?php
    session_start();   
    include_once("../php/conn.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    // traer de la base de datos el registro que tenga $email
    
    // Realizar una consulta SQL
    $sql = "SELECT * FROM users WHERE email = '$email'";
    
    $result = $conn->query($sql);

    // Si no encuentra ningun registro ejecuta el siguiente if
    if ($result->num_rows === 0) {
        echo "Usuario no registrado.";
        exit;
    }

    $user = $result->fetch_assoc();

   
    // Compara las contraseñas ingresada en el form con la que tenemos en la bd

    // Contraseña de la base de datos
    $password_db = $user['password'];
    
    

    if($password_db != $password){
        echo 'Contraseña incorrecta';
    } else {
        
        $_SESSION["userLoged"] = true;
        $_SESSION["rol"] = $user['rol'];
        $_SESSION["id_user"] = $user['id'];
        
        if($_SESSION["rol"] == "admin"){
            header("Location: ../pages/admin/dashboard.php");
        } else {
            header("Location: ../pages/home.php");
        }

        
    }


   
?>

