<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEFATRI</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION ['submit'])) {
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
    };
    ?>
    <div class="center">
        <h1><i>Login</i></h1>

    <form method="GET" action="Profile.php">

            <div class="txt_field">
            <input type="text" name="nama" id="nama" required>
            <span></span>
            <label>Username</label>  
            </div>

            <div class="txt_field">
            <input type="email" name="email" required>
            <span></span>
             <label>Email</label>  
            </div>

            <div class="radio_field">
                <label>Gender</label><br><br>
             <input type="radio" id="Male" name="gender" value="Male"> Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" name="gender" value="Female"> Female
             <span></span>
            </div>
            <br>
            <div class="date_field">
                <p>Date of Birth</p><br>
                <input type="date" name="tgl" required>
                <span></span>
                </div>
                  <br> <br>
                <div class="txt_area">
                    <p>Tell Me About Yourself</p>
                    <textarea  cols="40" rows="5" name="bio"></textarea>
                    <span></span>
                    </div>
            <br><br>
            <input type="submit" name='submit' value="Submit">
    </form>
    </div>
    <?php session_destroy(); ?>

</body>
</html>