<?php
require "config/database.php";
$db =conectarDB();

if ($db->connect_errno) {
    // Print the connection error message
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // You can also log the error message to a file or other logging mechanism
    // error_log("Failed to connect to MySQL: " . mysqli_connect_error());
    exit(); // Exit the script if there's a connection error
}


if($_POST){
    $noteID = $_POST['id'];;
    $query = "delete from nota where id = $noteID";
    mysqli_query($db,$query);
}
mysqli_close($db);
header("Location:../index.php");