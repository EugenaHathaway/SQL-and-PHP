<?php
include("config.php");

$result = mysqli_query($mysqli,"SELECT * FROM
  product_tb ORDER BY id DESC");


  ?>

  <html>
  <head>
    <title>DW-IMcomp</title>
  </head>
  <body>

    <table width = 80% border = 1>
      <tr>
        <th>id</th> <th>name</th>
        <th>importir_id</th> <th>photo</th>
        <th>qty</th> <th>price</th>
        <th>aksi</th>
      </tr>

      <?php


      while($product_id = mysqli_fetch_assoc($result)){
        "<tr>";
        "<td>".$product_id['id']."</td>";
        "<td>".$product_id['name']."</td>";
        "<td>".$product_id['importir_id']."</td>";
        "<td>".$product_id['photo']."</td>";
        "<td>".$product_id['qty']."</td>";
        "<td>".$product_id['price']."</td>";
        "<td><a href = "update_product.php?id=$product_id['id']"Edit</a>
        <a href = "delete_product.php?id=$product_id['id']"delete</a>;
      }
      ?>
      </table>

      //  <?php
      // while($product_id = mysqli_fetch_assoc($result)){
      //   ?>
      //    <tr>
      //        <td><?=$product_id['id']?></td>
      //        <td><?=$product_id['name']?></td>
      //        <td><?=$product_id['importir_id']?></td>
      //        <td><?=$product_id['photo']?></td>
      //        <td><?=$product_id['qty']?></td>
      //        <td><?=$product_id['price']?></td>
      //        <td>
      //           <a href="update_product.php?id=<?=$product_id['id']?>">Edit</a>
      //           <a href="delete_product.php?id=<?=$product_id['id']?>">Delete</a>
      //        </td>
      //     </tr>
      // <?php } ?>


      <a href="add_product.php">Add Product</a>

      </body>
      </html>
