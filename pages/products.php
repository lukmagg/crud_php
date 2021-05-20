<?php session_start(); ?>

<?php   
    include_once("menu.php");
    include_once("../php/conn.php");
?>


<!-- Aca obtenemos todos los products de la base de datos. -->
<?php 
    // Realizar una consulta SQL: todos los registros de la tabla products
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    if (!$result) {
        echo "Lo sentimos, no se pudo realizar la consulta.";
        exit;
    }
    $products = $result; 

    // la funcion verify es para asignarle el value al boton de cada producto
    function verify($id){
        if($_SESSION['prod'.$id] == null){
            return 'Agregar al carro';
        }
        return 'Eliminar del carro';
        
    }
?>


<div class="container mt-5">
    <div class="row">
        <?php 
            foreach($products as $p):
        ?>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="../images/<?= $p['slug'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $p['title'] ?></h5>
                    <p class="card-text"><strong><?= $p['price'] . ' €' ?></strong></p>
                    <input id="<?= 'bt_add' . $p['id'] ?>" type="submit" onclick="accion(<?= $p['id'] ?>)" class="btn btn-primary color-boton" value="<?= verify($p['id']) ?>">
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Uso de ajax para agregar/eliminar productos al carro de compras -->

<!-- test -->
<script>
    function accion(parametro){
        var id_product = {
            'id_product' : parametro
        }
        // obtengo el boton segun id 
        var bt_add = document.getElementById("bt_add"+parametro);

        if(bt_add.getAttribute("value") == 'Agregar al carro'){
            $.ajax({
                type:'POST',
                url: '../php/insertToShop.php',
                data: id_product,
                success:function(response){
                    if(response == 'success'){
                        bt_add.setAttribute("value", "Eliminar del carro");
                    } 
                },
                error:function(response){
                    alert('error!');
                }
            })
        } else {
            $.ajax({
                type:'POST',
                url: '../php/deleteFromShop.php',
                data: id_product,
                success:function(response){
                    if(response == 'success'){
                        bt_add.setAttribute("value", "Agregar al carro");
                    } 
                },
                error:function(response){
                    alert('error!');
                }
            })
        }
    }
</script>


<?php   
    include_once("footer.php");
?>