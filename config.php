//config is where i link the 'test' SQL database to PHP
<?php
 $databaseHost = "localhost";
 $databaseName = "test";
 $databaseUsername = "root";
 $databasePassword = "root";

 $mysqli = $mysqli_connect($databaseHost, $databaseName,
 $databaseUsername, $databasePassword);
?>
