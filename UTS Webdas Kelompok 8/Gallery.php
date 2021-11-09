<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEFATRI</title>
    <link rel="stylesheet" href="css/gallery.css">
</head>
<body background="assets/Home/Background.jpg">
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
            <button class="drpbtn">Destination
                <a href="<?php echo $urlpk ?>" class="isitempat">Pulau Komodo</a>
                <a href="<?php echo $urlra ?>" class="isitempat">Raja Ampat</a>
                <a href="<?php echo $urlcb ?>" class="isitempat">Candi Borobudur</a>
                <a href="<?php echo $urldt ?>" class="isitempat">Danau Toba</a>
                <a href="<?php echo $urlgb ?>" class="isitempat">Gunung Bromo</a>
            </button>
            <a href="<?php echo $urlgallery ?>" class="menukiri dipilih">Gallery</a>
            <a href="<?php echo $urlabout ?>" class="menukiri">About</a>
            <a href="<?php echo $urlprofil ?>" class="menukanan">Profile</a>
    </div>

     <!-- Hover gambar untuk ke foto lain-->
     <div id="isikotak">
     <table>
       <tr>
        <td>
    <a href="<?php echo $urlraf ?>">
    <div class="image">
    <img class="image_img" src="assets/Gallery/Raja Ampat.jpg">
    <div class="image_overlay">
    <div class="image_title">Raja Ampat</div>
    <p class="image_description">
       click to see more photos.
    </p>
    </div>
    </div>
    </a>
    </td>

   <td>
    <a href="<?php echo $urlgbf ?>">
    <div class="image">
    <img class="image_img" src="assets/Gallery/Gunung Bromo.JPG">
    <div class="image_overlay">
    <div class="image_title">Gunung Bromo</div>
    <p class="image_description">
       click to see more photos.
    </p>
    </div>
    </div>
   </a>
   </td>

  <td>
    <a href="<?php echo $urlpkf ?>">
    <div class="image">
    <img class="image_img" src="assets/Gallery/Pulau Komodo.jpg">
    <div class="image_overlay">
    <div class="image_title">Pulau Komodo</div>
    <p class="image_description">
      click to see more photos.
    </p>
    </div>
    </div>
   </a>
   </td>
   </tr>
  </table>

  <table>
    <tr>
    <td>
    <a href="<?php echo $urlcbf ?>">
    <div class="image">
    <img class="image_img" src="assets/Gallery/Candi Borobudur.jpg">
    <div class="image_overlay">
    <div class="image_title">Candi Borobudur</div>
    <p class="image_description">
      click to see more photos.
    </p>
    </div>
    </div>
    </a>
    </td>

    <td>
    <a href="<?php echo $urldtf ?>">
    <div class="image">
    <img class="image_img" src="assets/Gallery/Dana Toba.jpg">
    <div class="image_overlay">
    <div class="image_title">Danau Toba</div>
    <p class="image_description">
      click to see more photos.
    </p>
    </div>
    </div>
    </a>
    </td>
    </tr>
   </table>
  </div>
<!--Foto-->



</body>
</html>