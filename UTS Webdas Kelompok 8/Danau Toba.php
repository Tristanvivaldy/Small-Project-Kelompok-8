<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEFATRI</title>
    <link rel="stylesheet" href="css/danautoba.css">
    <script src="https://kit.fontawesome.com/8ee4a9293b.js" crossorigin="anonymous"></script>
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
    <div class="navjudul">
        <div class="namaweb"><sup>" HE</sup>FA<sup>TRI "</sup></div>
        <img src="assets/Logo HFT.png" class="logoHFT">    
    </div>

    <!-- Buat bikin nav menu -->
    <div class="navbar">
            <a href="<?php echo $urlhome ?>" class="menukiri">Home</a>
            <button class="drpbtn dipilih">Destination
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
    <div class="fotogb1">
        <img src="assets/Gallery/Danau Toba3.jpg" alt="" width="500px" height="300px">
    </div>
    <div class="judul">
        Danau Toba
    </div>
    <div class="tulisan1">
       <p> Danau Toba adalah danau alami berukuran besar di Indonesia yang berada di kaldera Gunung Supervulkan. Danau ini memiliki panjang 100 kilometer (62 mil), lebar 30 kilometer (19 mi), dan kedalaman 505 meter (1657 ft). Danau ini terletak di tengah pulau Sumatra bagian utara dengan ketinggian permukaan sekitar 900 meter (2953 ft). Danau ini membentang dari 2.88°N 98.52°E sampai 2.35°N 99.1°E. Ini adalah danau terbesar di Indonesia dan danau vulkanik terbesar di dunia.</p>
       <br>
        <p> Danau Toba adalah lokasi letusan gunung berapi super masif berkekuatan VEI 8 sekitar 69.000 sampai 77.000 tahun yang lalu yang memicu perubahan iklim global. Metode penanggalan terkini menetapkan bahwa 74.000 tahun yang lalu lebih akurat. Letusan ini merupakan letusan eksplosif terbesar di Bumi dalam kurun 25 juta tahun terakhir. Menurut teori bencana Toba, letusan ini berdampak besar bagi populasi manusia di seluruh dunia; dampak letusan menewaskan sebagian besar manusia yang hidup waktu itu dan diyakini menyebabkan penyusutan populasi di Afrika timur tengah dan India sehingga memengaruhi genetika populasi manusia di seluruh dunia sampai sekarang.</p>    
      </div>
    <div class="akses">
        <h2>Akses Menuju Danau Toba</h2> <br>
        <p>
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 Akses dan Rute Menuju Danau Toba</h3> <br> 
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lewat Udara</h3> <br>
<p>Kota Medan adalah gerbang internasional, jadi setiap hari ada layanan penerbangan dari beberapa maskapai penerbangan, dari Bandara Kualanamu, Medan dan semua kota besar di Indonesia. Juga ada penerbangan internasional dari Medan ke Malaysia, Singapura dan Thailand.</p><br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lewat Darat</h3> <br>
<p>Parapat, sebuah kota di dekat Danau Toba, jaraknya sekitar 176 km dari kota Medan dapat dicapai hanya sekitar enam jam dengan bus. Bus biasanya menawarkan dua rute; Medan-Parapat atau Medan-Berastagi. Agen-agen perjalanan di kota Medan bisa membantu Sobat Pesona untuk mengatur penyewaan mobil dan supir selama perjalanan darat ini. Nah, kalau Sobat Pesona datang dari arah selatan lewat Bukittinggi dan Tarutung, ada juga bus yang tersedia dan bisa dipakai untuk mencapai Danau Toba.</p> <br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lewat Air</h3> <br>
<p>Begitu sampai di Parapat, Sobat Pesona bisa naik kapal ferry ke Pulau Samosir. Kapal-kapal ferry ini dijadwalkan berangkat setiap satu setengah jam. Ada dua titik pendaratan kapal ferry di pulau Samosir; yang pertama adalah Desa Tomok, dan yang kedua adalah Desa Tuktuk, keduanya adalah desa tradisional di pulau tersebut. Sobat Pesona bisa menemukan beberapa pilihan hotel dan restoran di kedua desa ini.</p> <br>
    </div>
    <div class="rating">
        <input type="radio" id="star1"><label for="star1"></label>
        <input type="radio" id="star2"><label for="star2"></label>
        <input type="radio" id="star3"><label for="star3"></label>
        <input type="radio" id="star4"><label for="star4"></label>
        <input type="radio" id="star5"><label for="star5"></label>
        <h6>(5/5)</h6>
      </div>
</body>
</html>