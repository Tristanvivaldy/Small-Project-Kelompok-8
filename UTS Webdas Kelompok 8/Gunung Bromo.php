<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEFATRI</title>
    <link rel="stylesheet" href="css/bromo.css">
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
        <img src="assets/Bromo/bromo1.jpg" alt="" width="500px" height="300px">
    </div>
    <div class="judul">
        Gunung Bromo
    </div>
    <div class="tulisan1">
       <p> Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.</p>
            <br>
        <p> tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah ± 800 meter (utara-selatan) dan ± 600 meter (timur-barat). Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo. </p>
    </div>
    <div class="akses">
        <h2>Akses Menuju Gunung Bromo</h2> <br>
        <p>
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Rute Utama Menuju Ke Gunung Bromo</h3> <br>
            <p>Gunung Bromo ini memiliki bentuk yang saling bertautan antara lembah dengan kaldera dan lautan pasir dengan luas 10 kilometer. Dengan diameter 800 meter dari arah utara selatan dan 600 meter dari timur barat.
Sebagai gunung Merapi yang masih aktif, sebenarnya gunung ini cukup berbahaya, namun kecantikan kawasan gunung Bromo ini membuat para wisatawan rela berbondong-bondong menuju ke sana.

Dan untuk bisa menikmati berbagai spot wisata Bromo di atas, Anda butuh perjuangan. Dan biasanya terdapat 4 jalur dan rute menuju ke Gunung Bromo yang umum para wisatawan gunakan. Berikut ulasannya.</p> <br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jalur Pertama, Melalui Pintu Barat dari Pasuruan</h3> <br>
<p>Rute jalan pertama menuju kawasan gunung Bromo yaitu melewati pintu barat dari Pasuruan. Anda bisa masuk melewati desa Tosari kemudian menyusuri medan lautan pasir yang lumayan terjal.

Sehingga untuk menuju ke sana, Anda bisa menyewa mobil Jeep yang biasanya sudah mereka sediakan sekitar desa Tosari.</p><br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jalur Kedua, Melewati Pintu Masuk dari Probolinggo</h3> <br>
<p>Alternatif jalur kedua yaitu melalui pintu utara dari Probolinggo. Anda bisa melewati Tongas, kemudian menuju ke pintu masuk gunung Bromo yang berada desa Cemara Lawang.

Jalan yang di lalui untuk menuju kawasan gunung Bromo tidak begitu berat ketimbang jalur lainnya. Selain itu lereng yang ada di sana juga tidak begitu curam. Sehingga untuk menuju ke sana Anda bisa hanya berjalan kaki atau bersepeda motor.</p> <br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jalur Ketiga, Melalui Pintu Utara dari Malang</h3> <br>
<p>Rute akses selanjutnya yaitu melalui pintu utara dari kota Malang. Anda bisa masuk dari daerah Tumpang kemudian ke Pronojiwo. Melalui rute ini Anda juga akan di suguhkan pemandangan hutan hijau yang begitu mempesona.

Dari Pronojiwo, jika Anda bisa lurus ke selatan menuju Ranu Pane, dan jika ke utara Anda bisa memasuki kawasan lautan pasir bromo yang tepat berada di selatan Bromo. Untuk sampai ke puncak gunung Bromo, Anda cukup mengikuti jalur lautan pasir berbisik.</p> <br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alternatif Jalur Lain dari Lumajang</h3> <br>
<p>>Selain tiga rute jalan menuju ke gunung Bromo di atas, alternatif jalur lain yang bisa Anda pilih yaitu dari Lumajang dan menuju arah desa Ranu Pane. Kemudian anda dapat menyusuri gunung Bromo melalui lautan pasir. Jalur ini bisa di lewati sepeda motor selama 3 jam.

Pada area ini Anda juga akan di suguhkan pemandangan padang rumput savana dan berbagai tanaman khas pegunungan.

Akan tetapi, pastikan Anda ke sana di siang hari dan di saat tidak ada kabut, sebab area di sana termasuk sangat sepi dan hampir tidak ada persinggahan sama sekali.</p> <br>
        </p>
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