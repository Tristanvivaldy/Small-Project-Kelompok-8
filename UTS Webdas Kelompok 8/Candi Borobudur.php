<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEFATRI</title>
    <link rel="stylesheet" href="css/borobudur.css">
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
    <div class="fotob1">
        <img src="assets/Borobudur/borobudur1.jpg" alt="" width="500px" height="300px">
    </div>
    <div class="judul">
        Candi Borobudur
    </div>
    <Div class="tulisan1">
      <p>  Borobudur (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦧꦫꦧꦸꦝꦸꦂ, translit. Candhi Barabudhur) adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta. Candi dengan banyak stupa ini didirikan oleh para penganut agama Buddha Mahayana sekitar tahun 800-an Masehi pada masa pemerintahan wangsa Syailendra. Borobudur adalah candi atau kuil Buddha terbesar di dunia, sekaligus salah satu monumen Buddha terbesar di dunia.</p>
            <br>
        <p> Monumen ini terdiri atas enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha. Borobudur memiliki koleksi relief Buddha terlengkap dan terbanyak di dunia. Stupa utama terbesar teletak di tengah sekaligus memahkotai bangunan ini, dikelilingi oleh tiga barisan melingkar 72 stupa berlubang yang di dalamnya terdapat arca Buddha tengah duduk bersila dalam posisi teratai sempurna dengan mudra (sikap tangan) Dharmachakra mudra (memutar roda dharma).</p>
            <br>    
            <p> Monumen ini merupakan model alam semesta dan dibangun sebagai tempat suci untuk memuliakan Buddha sekaligus berfungsi sebagai tempat ziarah untuk menuntun umat manusia beralih dari alam nafsu duniawi menuju pencerahan dan kebijaksanaan sesuai ajaran Buddha. Para peziarah masuk melalui sisi timur dan memulai ritual di dasar candi dengan berjalan melingkari bangunan suci ini searah jarum jam, sambil terus naik ke undakan berikutnya melalui tiga tingkatan ranah dalam kosmologi Buddha. Ketiga tingkatan itu adalah Kāmadhātu (ranah hawa nafsu), Rupadhatu (ranah berwujud), dan Arupadhatu (ranah tak berwujud). Dalam perjalanannya para peziarah berjalan melalui serangkaian lorong dan tangga dengan menyaksikan tak kurang dari 1.460 panel relief indah yang terukir pada dinding dan pagar langkan.</p>
                <br>
                <p>Menurut bukti-bukti sejarah, Borobudur ditinggalkan pada abad ke-14 seiring melemahnya pengaruh kerajaan Hindu dan Buddha di Jawa serta mulai masuknya pengaruh Islam. Dunia mulai menyadari keberadaan bangunan ini sejak ditemukan 1814 oleh Sir Thomas Stamford Raffles, yang saat itu menjabat sebagai Gubernur Jenderal Inggris atas Jawa. Sejak saat itu Borobudur telah mengalami serangkaian upaya penyelamatan dan pemugaran (perbaikan kembali). Proyek pemugaran terbesar digelar pada kurun waktu 1975 hingga 1982 atas upaya Pemerintah Republik Indonesia dan UNESCO, kemudian situs bersejarah ini masuk dalam daftar Situs Warisan Dunia.</p>
                    <br>
                    <p> Borobudur kini masih digunakan sebagai tempat ziarah keagamaan; tiap tahun umat Buddha yang datang dari seluruh Indonesia dan mancanegara berkumpul di Borobudur untuk memperingati Trisuci Waisak. Dalam dunia pariwisata, Borobudur adalah objek wisata tunggal di Indonesia yang paling banyak dikunjungi wisatawan.</p>
    </Div>
    <div class="akses">
        <h2>Akses Menuju Borobudur</h2> <br>
        <p>
Borobudur berjarak satu jam dari Yogyakarta dan dua jam dari Semarang. Perjalanannya melewati kota-kota kecil dan ladang sawah. Borobudur terletak di sebuah tepi desa bernama Desa Borobudur, yang mayoritas penduduknya adalah petani dan penjual cinderamata.

Sepanjang perjalanan ke Borobudur, Anda akan dimanjakan dengan udara sejuk nan segar khas Kota Magelang, serta pemandangan alam di antara dua gunung Merbabu dan Merapi.

Cara mudah ke Borobudur adalah dengan menyewa mobil, motor, atau bergabung dalam tur. Anda bisa menyewanya di hotel atau penginapan Anda, bahkan Anda bisa menyewa mobil berikut pengemudinya.

Jika Anda naik taksi dari pusat Kota Yogyakarta ke Borobudur, tarifnya sekitar Rp. 200.000, dan harga pastinya dapat diketahui dari loket taksi Yogyakarta yaitu Rp. 190.000.

Selain itu, Anda bisa naik angkutan umum. Naiklah bus atau mini bus dari terminal bus Yogyakarta. Ada angkutan bus kecil langsung dari Yogya ke Borobudur, yang melayani pengunjung setiap hari, setiap 10 menit.

Bus yang paling dikenal bernama Cemara Tunggal, ongkosnya Rp. 12.000 sekali jalan. Lalu Anda turun di Candi Mendut. Setelah itu Anda bisa jalan atau menyewa kuda menuju Candi Pawon. Candi Pawon dan Candi Borobudur hanya berjarak sekitar 300 meter.
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