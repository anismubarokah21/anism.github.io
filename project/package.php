<?php
// Koneksi ke database
$host = 'localhost';
$db = 'book_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil paket perjalanan yang sudah ada
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
    <title>package</title>


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

<!-- header section-ends -->

<div class="heading" style="background: url(images/header-bg-2.jpeg) no-repeat">
    <h1>packages</h1>
</div>

<!-- packages section starts -->

<section class="packages">
    <h1 class="heading-title">top destinations</h1>

    <div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/img-1.jpg" alt="">
        </div>
        <div class="content">
            <h3>trip</h3>
            <p>Selamat datang di perjalanan spiritual yang tak terlupakan ke Mekkah, 
                    tanah suci umat Islam. Pengalaman penuh makna ini tidak hanya tentang 
                    perjalanan fisik, tetapi juga tentang pencarian spiritual dan transformasi 
                    diri. Di situs web kami, kami dengan bangga menyajikan perjalanan 
                    ke Mekkah yang disusun dengan penuh kebijaksanaan dan kepedulian.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-2.jpeg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di pengalaman petualangan tak terlupakan di Labuan Bajo, 
                surganya eksplorasi alam yang menakjubkan. Melalui situs web kami, 
                kami mengajak Anda untuk mengeksplorasi keindahan pulau-pulau tropis,
                air jernih, dan keanekaragaman hayati laut yang menakjubkan.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-3.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di petualangan seru di Pulau Bali, destinasi tropis 
                yang memukau dengan keindahan alamnya yang luar biasa. 
                Melalui situs web kami, kami mengajak Anda untuk merasakan 
                pesona pantai-pantai eksotis, budaya yang kaya, dan petualangan tak terlupakan di Bali.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-4.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di perjalanan tak terlupakan ke Korea, negara yang memadukan 
                pesona tradisional dengan kecanggihan modern. Melalui situs web petualangan 
                dan tur kami, kami mengundang Anda untuk merasakan keajaiban kebudayaan, 
                kuliner lezat, dan pemandangan alam yang menakjubkan di seluruh penjuru Korea.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-5.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di petualangan mendaki yang tak terlupakan ke puncak keindahan 
                alam, Gunung Prau. Melalui situs web petualangan dan tur kami, kami mengajak 
                Anda untuk merasakan keindahan alami, udara segar pegunungan, 
                dan panorama yang menakjubkan di perjalanan mendaki ini.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-6.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di petualangan seru selancar di destinasi pantai yang 
                menakjubkan melalui situs web petualangan dan tur kami. Kami mengajak Anda 
                untuk merasakan sensasi ombak yang memukau, pasir putih yang lembut, dan 
                pemandangan laut yang mengagumkan dalam petualangan selancar yang tak terlupakan.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-7.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di petualangan tak terlupakan di Pantai Batu Hiu, destinasi 
                selancar yang menawarkan kombinasi sempurna antara keindahan alam dan 
                ombak yang menantang. Melalui situs web petualangan dan tur kami, kami 
                mengajak Anda untuk merasakan ketegangan selancar, keindahan 
                pantai yang menakjubkan, dan petualangan laut yang seru di Pantai Batu Hiu.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-8.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di petualangan seru di Ancol, destinasi multifungsi yang 
                menggabungkan keindahan pantai, hiburan berkualitas, dan berbagai kegiatan 
                rekreasi. Melalui situs web petualangan dan tur kami, kami mengajak Anda 
                untuk mengeksplorasi keajaiban Ancol, tempat 
                yang menawarkan petualangan yang menyenangkan dan kenangan tak terlupakan.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-9.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di petualangan tak terlupakan di Pantai Banda Aceh, destinasi 
                yang memukau dengan keindahan alamnya yang eksotis dan kekayaan budayanya 
                yang mendalam. Melalui situs web petualangan dan tur kami, kami mengundang
                Anda untuk mengeksplorasi pesona laut yang luar biasa, 
                warisan budaya yang kaya, dan petualangan tak terlupakan di Pantai Banda Aceh.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-10.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di petualangan luar biasa di Gurun Sahara, destinasi magis 
                yang memukau dengan kemegahan pasir yang tak berujung dan keheningan yang 
                mengagumkan. Melalui situs web petualangan dan tur kami, kami mengajak Anda 
                untuk merasakan keindahan 
                tak terbatas gurun yang menakjubkan dan budaya yang kaya di Gurun Sahara.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-11.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di petualangan seru di Pantai Pangandaran, destinasi yang 
                memukau dengan keindahan pantai pasir putih, hutan mangrove yang hijau, 
                dan kehidupan laut yang beragam. Melalui situs web petualangan dan tur kami, 
                kami mengajak Anda untuk merasakan pesona alam Pangandaran, 
                di mana petualangan dan keindahan bertemu di tepi Samudra Hindia.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-12.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Selamat datang di petualangan seru di Yogyakarta, tempat di mana kekayaan 
                budaya bertemu dengan pesona alam yang memukau. Melalui situs web petualangan
                dan tur kami, kami mengajak Anda untuk menjelajahi keajaiban Keraton dan keindahan alam Prambanan, 
                serta menikmati petualangan tak terlupakan di tanah budaya yang kaya ini.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <?php foreach ($packages as $package): ?>
            <div class="box">
                <div class="image">
                    <img src="<?php echo $package['image_url']; ?>" alt="">
                </div>
                <div class="content">
                    <h3><?php echo $package['title']; ?></h3>
                    <p><?php echo $package['description']; ?></p>
                    <a href="book.php" class="btn">book now</a>
                    
                    <!-- Tambahkan tautan Edit dan Hapus -->
                    <a href="admin.php?action=edit&id=<?php echo $package['id']; ?>" class="edit-btn">Edit</a>
                    <a href="admin.php?action=delete&id=<?php echo $package['id']; ?>" class="delete-btn">Delete</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="load-more"><span class="btn">load more</span></div>
</section>

<!-- packages section-ends -->



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