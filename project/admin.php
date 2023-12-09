<?php
$host = 'localhost';
$db = 'book_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

    $sql = "INSERT INTO packages (title, description, image_url) VALUES ('$title', '$description', '$image_url')";
    $conn->query($sql);

    header("Location: package.php");
    exit();
}

if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM packages WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
    }

}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM packages WHERE id = $id";
    $conn->query($sql);

    header("Location: package.php");
    exit();
}
$sql = "SELECT * FROM packages";
$result = $conn->query($sql);

$packages = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $packages[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts -->

<section class="header">

    <a href="home.php" class="logo">travel&tour</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="admin.php">admin</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


<div class="heading" style="background: url(images/header-bg-1.jpeg) no-repeat">
    <h1>admin</h1>
</div>

    <!-- about section starts -->

<section class="about">

    <div class="image">
        <img src="images/about-img.jpeg" alt="">
    </div>

    <form method="post" action="admin.php">
    <label for="title" class="jdl">Judul Wisata : </label>
    <input type="text" placeholder="enter your title" name="title" required><br>

    <label for="description" class="jdl">Deskripsi  : </label>
    <textarea placeholder="enter your deskripsi" name="description" required></textarea><br>

    <label for="image_url" class="jdl">URL Gambar : </label>
    <input type="text" placeholder="tambahkan URL gambar" name="image_url" required><br>

    <button type="submit" class="jdl">Tambahkan Paket</button>
    </form>

    <h2 class="jdl">Paket Perjalanan yang di tambahkan </h2>
    <ul>
            <?php foreach ($packages as $package): ?>
        <li>
            <strong><?php echo $package['title']; ?></strong>
            <p><?php echo $package['description']; ?></p>
            <img src="<?php echo $package['image_url']; ?>" alt="<?php echo $package['title']; ?>" width="100">
        </li>
        <?php endforeach; ?>
    </ul>

</section>
<!-- footer section starts -->

<section class="footer">

    <div class="box-container">
        
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +62 856-9779-2981</a>
            <a href="#"> <i class="fas fa-phone"></i> +62 856-9779-2982</a>
            <a href="#"> <i class="fas fa-envelope"></i> anismubarokah21@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Ciamis, Pamarican - 46382</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook"></i> facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedIn</a>
        </div>
    </div>

    <div class="credit"> created by <span>Anis Mubarokah</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="script.js"></script>
</body>
</html>