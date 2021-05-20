<?php
    session_start();
    if(!$_SESSION["userLoged"]){
        header("Location: ../login.php");
    }
    if(!$_SESSION["rol"] == "admin"){
        header("Location: ../home.php");
    }
?>




<?php   
    include_once("header.php");
    include_once("menu.php");
?>

<!-- Si el producto es creado muestra una alerta de exito! -->
<div class="container">
    <?php  if($_SESSION["success"]): ?>
        <div class="alert alert-success" role="alert">
            Producto agregado correctamente!
        </div>
    <?php endif; ?>
        <?php $_SESSION["success"] = null ?>
</div>


<?php   
    include_once("../footer.php");
?>