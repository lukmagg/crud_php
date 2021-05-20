<?php   
    include_once("header.php");
?>

<div class="container">
    
    <div class="abs-center">
        <form class="color-form p-5">
            <div class="mb-3">
                <h4>Regístrate como nuevo usuario!</h4>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Inserte su nombre" autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input type="email" class="form-control" id="email" placeholder="Inserte su correo">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label> 
                <input type="password" class="form-control" id="password" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-primary color-boton">Registrarse</button>
        </form>
    </div>
</div>










<?php   
    include_once("footer.php");
?>