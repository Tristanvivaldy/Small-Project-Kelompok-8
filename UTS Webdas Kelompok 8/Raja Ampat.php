<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEFATRI</title>
    <link rel="stylesheet" href="css/rajaampat.css">
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
        <img src="assets/Gallery/Raja Ampat.jpg" alt="" width="500px" height="300px">
    </div>
    <div class="judul">
        Raja Ampat
    </div>
    <div class="tulisan1">
       <p> Kabupaten Raja Ampat adalah salah satu kabupaten di provinsi Papua Barat, Indonesia. Ibukota kabupaten ini terletak di Waisai. Kabupaten ini memiliki 610 pulau, termasuk kepulauan Raja Ampat. Empat di antaranya, yakni Pulau Misool, Salawati, Batanta dan Waigeo, merupakan pulau-pulau besar. Dari seluruh pulau hanya 35 pulau yang berpenghuni sedangkan pulau lainnya tidak berpenghuni dan sebagian besar belum memiliki nama. Kabupaten ini memiliki total luas 67.379,60 km² dengan rincian luas daratan 7.559,60 km² dan luas lautan 59.820,00 km².</p>
       <br>
        <p> Kabupaten Raja Ampat adalah kabupaten yang wilayahnya sebagian besar terdiri dari gugusan pulau yang terletak pada posisi 2°25' lintang utara – 4°25' lintang selatan dan 130° – 132° 55’ bujur timur. Kabupaten ini memiliki luas wilayah ±6.084,5 km². Kabupaten ini terdiri dari kurang lebih 600 buah pulau besar dan kecil, yang termasuk ke dalam pulau besar diantaranya adalah Pulau Salawati; Pulau Butanta; Pulau Misool dan Pulau Waigeo yang merupakan pulau non vulkanik, berbukit-bukit yang sebagian besar ditutupi oleh hutan hujan tropis yang lebat. Sedangkan pulau-pulau kecil yang tersebar di antara pulau besar tersebut ada yang merupakan pulau karang dan pulau non vulkanik yang banyak ditumbuhi oleh pohon kelapa dan semak belukar. </p>
    </div>
    <div class="akses">
        <h2>Akses Menuju Kepulauan Raja Ampat</h2> <br>
        <p>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menuju ke Sorong, Papua Barat</h3> <br>
<p>Untuk menuju ke Raja Ampat, destinasi pertama yang harus dituju dari Jakarta adalah Sorong, Papua Barat. Ada sejumlah cara menuju ke Provinsi Papua Barat, dengan moda transportasi udara ataupun laut. Untuk cara tercepat bisa menggunakan pesawat, sementara cara lainnya bisa dengan menggunakan kapal laut. </p> <br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dari Bandara ke Pelabuhan Rakyat Sorong</h3> <br>
<p>Setibanya di Sorong, kamu harus melanjutkan perjalanan ke Raja Ampat. Perjalanan bisa dilakukan dengan dua cara, yaitu menuju ke Raja Ampat dengan menggunakan kapal feri atau menggunakan pesawat. </p> <br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dari Pelabuhan Rakyat Sorong ke Raja Ampat</h3> <br>
<p>Di Pelabuhan Rakyat Sorong, ada satu cara menuju ke Raja Ampat, yaitu dengan menggunakan kapal. Namun, ada dua opsi tipe kapal yang bisa dipilih, yang didasarkan pada cepat tidaknya sampai ke Pelabuhan Waisai, Raja Ampat dan harga tiketnya.
Untuk yang cepat sampai dengan tiket harga yang sedikit di atas rata-rata, kamu bisa memilih kapal feri cepat. Jadwal penyeberangan feri cepat dari Sorong ke Waisai sehari dua kali perjalanan, yaitu pukul 9.00 WIT dan 14.00 WIT dengan pelayanan Senin hingga Jumat. Untuk hari Sabtu, kapal diberangkatkan dari Sorong ke Waisai pada pukul 9.00 dan 12.00. </p> <br> 

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transportasi di Raja Ampat</h3> <br>
<p>Setelah tiba di Raja Ampat, kamu akan diminta membayar Tarif Layanan Pemeliharaan Lingkungan (TLPL) dengan biaya 500,000 IDR di pelabuhan atau kantor Kabupaten Raja Ampat. </p> <br>

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