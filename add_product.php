<html>
<head>
  <title>Add Product</title>
</head>

<body>
<a href="index.php"> Go Back </a>

  <form action="add_product.php"
  method="post" name="form1>
  <table width="25%" border="0">
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
                    name="Submit" value="Add Product"
                  </form>


  <?php
if (isset($_POST['Submit'])){
$id = $_POST['id'];
$name = $_POST['name'];
$importir_id = $_POST['importir_id'];
$photo = $_POST['photo'];
$qty = $_POST['qty'];
$price = $_POST['price'];

}
// include database connection file

include("config.php");

// Insert user data into table

$result = mysqli_query($mysqli,"INSERT INTO
  product_tb(id,name,importir_id,photo,qty,price)
  VALUES('$id','$name','$importir_id,'$photo','$qty','$price')");

  echo "product added successfully"
  <a href='index.php'>View Product</a>;

                   ?>
</body>
</html>
