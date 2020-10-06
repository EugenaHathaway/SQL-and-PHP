<?php
include("config.php);

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM $product_id");

header("location:index.php");
?>
