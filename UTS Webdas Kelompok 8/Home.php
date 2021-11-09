<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEFATRI</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<?php 
    session_start();
    $nama = $_GET['nama'];
    $email = $_GET ['email'];
    $gender = $_GET ['gender'];
    $ttl = $_GET ['tgl'];
    $tentang = $_GET ['bio'];
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['gender'] =  $gender;
    $_SESSION['tgl'] = $ttl;
    $_SESSION['bio'] = $tentang;
    
    $urlprofil = "Profile.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";    
    $urlhome = "Home.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";   
    $urlgallery = "Gallery.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urlabout = "About.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urlra = "Raja Ampat.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urlraf = "Raja Ampat Foto.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urlpk = "Pulau Komodo.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urlpkf = "Pulau Komodo foto.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urlgb = "Gunung Bromo.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urlgbf = "Gunung Bromo Foto.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urldt = "Danau Toba.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urldtf = "Danau Toba foto.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urlcb = "Candi Borobudur.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    $urlcbf = "Candi Borobudur foto.php?nama=$nama&email=$email&gender=$gender&tgl=$ttl&bio=$tentang&submit=Submit";
    ?>
<body>
    <!-- Buat bikin nav paling atas -->
    <div class="navjudul">
        <div class="namaweb"><sup>" HE</sup>FA<sup>TRI "</sup></div>
        <img src="assets/Logo HFT.png" class="logoHFT">    
    </div>

    <!-- Buat bikin nav menu -->
    <div class="navbar">
    <a href="<?php echo $urlhome ?>" class="dipilih">Home</a>
            <button class="drpbtn">Destination
                <a href="<?php echo $urlpk ?>" class="isitempat">Pulau Komodo</a>
                <a href="<?php echo $urlra ?>" class="isitempat">Raja Ampat</a>
                <a href="<?php echo $urlcb ?>" class="isitempat">Candi Borobudur</a>
                <a href="<?php echo $urldt ?>" class="isitempat">Danau Toba</a>
                <a href="<?php echo $urlgb ?>" class="isitempat">Gunung Bromo</a>
            </button>
            <a href="<?php echo $urlgallery ?>" class="menukiri">Gallery</a>
            <a href="<?php echo $urlabout ?>" class="menukiri">About</a>
            <a href="<?php echo $urlprofil ?>" class="menukanan">Profile</a>
    </div>
    <!-- Tampilan Home -->
    <div class="box">
<div id="gambarslide">
<section id="gbr">
    <img src="assets/Home/Candi Borobudur.jpg" alt="gambar1" id="g1">
    <img src="assets/Home/Danau Toba.jpg" alt="gambar2" id="g2">
    <img src="assets/Home/Gunung Bromo.jpg" alt="gambar3" id="g3">
    <img src="assets/Home/Pulau Komodo.jpg" alt="gambar4" id="g4">
    <img src="assets/Home/Raja Ampat.jpg" alt="gambar5" id="g5">
</section>
</div>
<div id="btn">
    <a href="assets/Home/Candi Borobudur.jpg" class="buton"></a>
    <a href="assets/Home/Danau Toba.jpg" class="buton"></a>
    <a href="assets/Home/Gunung Bromo.jpg" class="buton"></a>
    <a href="assets/Home/Pulau Komodo.jpg" class="buton"></a>
    <a href="assets/Home/Raja Ampat.jpg" class="buton"></a>
</div>
    </div>
    <?php session_destroy(); ?>
</body>
</html>