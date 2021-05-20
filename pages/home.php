<?php
    session_start();

    // Si el usuario no esta logueado es redirigido al formulario de login
    if(!$_SESSION["userLoged"]){
        header("Location: ../pages/login.php");
    }

    // Si el usuario ya se logueo pero tiene rol de administrador
    // es redirigido a el dashboard
    // si su rol es 'user' entonces se muestra el home
    if($_SESSION["rol"] == "admin"){
        header("Location: ../pages/admin/dashboard.php");
    }
   
?>

<?php include_once("menu.php"); ?>


<div class="container">

</div>


<?php include_once("footer.php"); ?>