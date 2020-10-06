<?php

include(config.php);

if(isset($_POST['update']))
{
$id = $_POST['id'];
$name = $_POST['name'];
$importir_id = $_POST['importir_id'];
$photo = $_POST['photo'];
$qty = $_POST['qty'];
$price = $_POST['price'];

$result = mysqli_query($mysqli,"UPDATE Product
SET id='$id',name='$name',importir_id='$importir_id',
photo = '$photo',qty = 'qty',price = 'price'
WHERE id=$id");

  header("Location:index.php")
}
 ?>

 <?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM
 product_tb WHERE id=$id")

 while($product_id = mysqli_fetch_array($result))
 {
   $id = $product_id[id];
   $name = $product_id[name];
   $importir_id = $product_id[importir_id];
   $photo = $product_id[photo];
   $qty = $product_id[qty];
   $price = $product_id[price];


 }
 ?>

 <html>
<head>Update product</head>

<body>
  <form name = "update product" method = post
  action = "update_product.php">

  <table border = "0">
    <tr>
      <td>id</td>
      <td><input type = "text"
        name = "id" value = <?php
        echo $id; ?></td>
    </tr>

    <tr>
      <td>name</td>
      <td><input type = "text"
        name = "name" value = <?php
        echo $name; ?></td>
    </tr>

    <tr>
      <td>importir_id</td>
      <td><input type = "text"
        name = "importir_id" value = <?php
        echo $importir_id; ?></td>
    </tr>

    <tr>
      <td>photo</td>
      <td><input type = "text"
        name = "photo" value = <?php
        echo $photo; ?></td>
    </tr>

    <tr>
      <td>qty</td>
      <td><input type = "text"
        name = "qty" value = <?php
        echo $qty; ?></td>

        <tr>
          <td>price</td>
          <td><input type = "text"
            name = "price" value = <?php
            echo $price; ?></td>
        </tr>
    </tr>

    <tr>
      <td>id</td>
      <td><input type = "text"
        name = "id" value = <?php
        echo $id; ?></td>
    </tr>

    <tr>
      <td><input type = "hidden"
        name = "id" value = <?php
        echo $_GET [id]; ?></td>
    </tr>

    <tr>
      <td><input type = "submit"
        name = "update" value = update
      </td>
    </tr>
</body>

 </html>
