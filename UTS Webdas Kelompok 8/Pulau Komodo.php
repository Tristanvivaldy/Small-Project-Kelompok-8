<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEFATRI</title>
    <link rel="stylesheet" href="css/pulaukomodo.css">
    <script src="https://kit.fontawesome.com/8ee4a9293b.js" crossorigin="anonymous"></script>
</head>
<body >
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
        <div class="isi">
        <img src="assets/pulau komodo/fotokomodo2.jpg" alt="" width="500px" height="300px" class="fotok1">
    <div class="judul">
        Pulau Komodo
    </div>
    <div class="tulisan1">
        <p>
            <p>Pulau Komodo adalah sebuah pulau yang terletak di Kepulauan Nusa Tenggara, berada di sebelah timur Pulau Sumbawa, yang dipisahkan oleh Selat Sape. Pulau Komodo dikenal sebagai habitat asli hewan komodo. </p>
                <br>
                <p>Pulau ini termasuk salah satu kawasan Taman Nasional Komodo yang dikelola oleh Pemerintah Pusat. </p>
                    <br>
                    <p>Secara administratif, pulau ini termasuk wilayah Kabupaten Manggarai Barat, Kecamatan Komodo, Provinsi Nusa Tenggara Timur, Indonesia. Pulau Komodo merupakan ujung paling barat Provinsi Nusa Tenggara Timur, berbatasan dengan Provinsi Nusa Tenggara Barat.</p>
                        <br>
                        <p> Di Pulau Komodo, hewan komodo hidup dan berkembang biak dengan baik. Hingga Agustus 2009, di pulau ini terdapat sekitar 1300 ekor komodo. Ditambah dengan pulau lain, seperti Pulau Rinca dan dan Gili Motang, jumlah mereka keseluruhan mencapai sekitar 2500 ekor. Ada pula sekitar 100 ekor komodo di Cagar Alam Wae Wuul di daratan Pulau Flores tapi tidak termasuk wilayah Taman Nasional Komodo.</p>
                            <br>
                            <p> Selain komodo, pulau ini juga menyimpan eksotisme flora yang beragam kayu sepang yang oleh warga sekitar digunakan sebagi obat dan bahan pewarna pakaian, pohon nitak ini atau sterculia oblongata di yakini berguna sebagai obat dan bijinya gurih dan enak seperti kacang polong.</p>
                                <br>
                                <p> Pulau Komodo juga diterima sebagai Situs Warisan Dunia UNESCO, karena dalam wilayah Taman Nasional Komodo, bersama dengan Pulau Rinca, Pulau Padar dan Gili Motang</p>
        </p>
    </div>
    <div class="akses">
        <h2>Akses Menuju Pulau Komodo</h2><br>
        <p>
            Transportasi menuju Pulau Komodo dapat melalui jalur laut, darat, dan udara. 
            Anda dapat menggunakan pesawat dari Denpasar menuju Labuan Bajo yang memakan waktu 1,5 jam. 
            Ada juga bus yang menghubungkan Denpasar dan Labuan Bajo, sembari menyeberang dengan kapal ferry. 
            Juga, tersedia kapal yang berlayar dari Tanjung Benoa, Bali, 
            menuju Labuan Bajo yang memakan waktu perjalanan 1 hari.
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
    </div>
</body>
</html>