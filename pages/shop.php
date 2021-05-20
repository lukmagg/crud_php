<?php session_start(); ?>

<?php   
    include_once("menu.php");
    include_once("../php/conn.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
</head>
<body>

<div class="container">
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Titulo</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>

    <?php
        $query = "SELECT * FROM products inner JOIN shop on products.id = shop.id_product";
        $result = $conn->query($query);

        foreach($result as $r):
    ?>

    <tr>
      <th scope="row">1</th>
      <td><?= $r['code'] ?></td>
      <td><?= $r['title'] ?></td>
      <td><?= $r['price'] ?></td>
    </tr>
    
    <?php endforeach; ?>
  </tbody>
</table>
</div>




</body>
</html>














<?php   
    include_once("footer.php");
?>