<?php
    session_start();
    if($_SESSION["userLoged"]){
        header("Location: ../pages/home.php");
    } 
?>

<?php   
    include_once("header.php");
?>

<div class="container">
    <div class="abs-center">
        <form method="post" action="../php/check.php" class="color-form p-5">
            <div class="mb-3">
            <h4>Ingresa tus datos para entrar al sistema!</h4>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserte su correo" autofocus>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label> 
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Correo">
            </div>
            <button type="submit" class="btn btn-primary color-boton">Ingresar</button>
        </form>
    </div>
</div>



<?php   
    include_once("footer.php");
?>