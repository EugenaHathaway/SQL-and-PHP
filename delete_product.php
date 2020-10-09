<?php
include("config.php);

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM product_tb WHERE id=$id");

header("location:index.php");
?>
