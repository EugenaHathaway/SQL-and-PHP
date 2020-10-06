<html>
<head>
  <title>Add Product</title>
</head>

<body>
<a href="index.php"> Go Back </a>

  <form action="add_product.php"
  method="post" name="form1>
  <table>
    <tr>
      <td>id</td>
      <td><input type="text"
        name="id"></td>

        <td>name</td>
        <td><input type="text"
          name="name"></td>

          <td>importir_id</td>
          <td><input type="text"
            name="importir_id"></td>

            <td>photo</td>
            <td><input type="text"
              name="photo"></td>

              <td>qty</td>
              <td><input type="text"
                name="qty"></td>

                <td>price</td>
                <td><input type="text"
                  name="price"></td

                  <td></td>
                  <td><input type="submit"
                    name="submit" value"Add Product"
                  </form>

                  <?php
if (isset($_POST['submit'])){
$id = $_post['id'];
$id = $_post['name'];
$id = $_post['importir_id'];
$id = $_post['photo'];
$id = $_post['qty'];
$id = $_post['price'];

}
include("config.php");
$resutl = mysqli_query($mysqli,"INSERT INTO
  product_tb(id,name,importir_id,photo,qty,price)
  VALUES('$id','$name','$importir_id,'$photo','$qty','$price')");

  echo "product added successfully";
  <a href='index.php'>View Product</a>

                   ?>
</body>
</html>
