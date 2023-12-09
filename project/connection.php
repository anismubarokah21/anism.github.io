<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "book_db";

$connection = mysqli_connect($hostname, $username, $password, $db_name);

if (!$connection) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

header('Location: book.php');
exit;

?>