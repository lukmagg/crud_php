<?php   
    include_once("header.php");
    include_once("menu.php");
?>

<div class="container">
    
    <div class="abs-center">
        <form method="post" action="../../php/admin/insert_product.php" enctype="multipart/form-data" class="color-form p-5">
            <div class="mb-3">
            <h4>Ingresa un nuevo producto</h4>
            </div>
            <div class="mb-3">
                <label class="form-label">Codigo</label>
                <input name="code" type="text" class="form-control"  placeholder="Inserte el codigo" autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label">Titulo</label> 
                <input name="title" type="text" class="form-control" placeholder="Titulo del producto">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input name="price" type="text" class="form-control" placeholder="Inserte el precio" >
            </div>
            <!-- Carga de la imagen -->
            <h4 class="text-center">Seleccione imagen a cargar</h4>
            <div class="form-group">
                <label class="col-sm-2 control-label">Archivos</label>
                <div class="col-sm-8">
                    <input type="file" accept="image/*" class="form-control" id="image" name="image" multiple>
                </div>
            </div>
            <input type="submit" class="btn btn-primary color-boton"></input>
        </form>
    </div>
</div>




<?php   
    include_once("../footer.php");
?>