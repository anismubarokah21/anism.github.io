<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "book_db";

$connection = mysqli_connect($hostname, $username, $password, $db_name);

if (!$connection) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if ($request === false) {
        die('Error: ' . $connection->error);
    }

    $request->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

    $result = $request->execute();

    if ($result) {
        header('location: book.php');
    } else {
        echo 'Error: ' . $request->error;
    }

    $request->close();
} else {
    echo 'Something went wrong. Please try again.';
}

mysqli_close($connection);
?>