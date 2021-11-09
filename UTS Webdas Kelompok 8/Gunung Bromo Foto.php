<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEFATRI</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
         <!-- Buat bikin nav paling atas -->
         <div class="navjudul1">
            <div class="namaweb1"><sup>" HE</sup>FA<sup>TRI "</sup></div>
            <img src="assets/Logo HFT.png" class="logoHFT1">    
        </div>
    
        <!-- Buat bikin nav menu -->
        <div class="navbar1">
        <a href="<?php echo $urlhome ?>" class="menukiri1">Home</a>
            <button class="drpbtn1">Destination
                <a href="<?php echo $urlpk ?>" class="isitempat1">Pulau Komodo</a>
                <a href="<?php echo $urlra ?>" class="isitempat1">Raja Ampat</a>
                <a href="<?php echo $urlcb ?>" class="isitempat1">Candi Borobudur</a>
                <a href="<?php echo $urldt ?>" class="isitempat1">Danau Toba</a>
                <a href="<?php echo $urlgb ?>" class="isitempat1">Gunung Bromo</a>
            </button>
            <a href="<?php echo $urlgallery ?>" class="menukiri1 dipilih1">Gallery</a>
            <a href="<?php echo $urlabout ?>" class="menukiri1">About</a>
            <a href="<?php echo $urlprofil ?>" class="menukanan1">Profile</a>
        </div>
        <div id="isikotak">
        <font style="margin-left:540px">Gunung Bromo</font>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/Gallery/Gunung Bromo2.jpg" alt="...">
          </div >
          <div class="carousel-item">
            <img src="assets/Gallery/Gunung Bromo3.jpg" alt="...">
          </div>
          </div>
          <div class="carousel-item">
            <img src="assets/Gallery/Gunung Bromo4.jpg" alt="...">
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="margin-top:330px ;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="margin-top:330px ;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

</body>
</html>