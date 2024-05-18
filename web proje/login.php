<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çorum Web -Hakkımda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
        <div class="container" id="arayuz">
            <div class="logo">FORM</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.html">Hakkımda</a></li>
                    <li><a href="ozgecmis.html">Özgeçmiş</a></li>
                    <li><a href="sehrim.html">Şehrim</a></li>
                    <li><a href="mirasimiz.html">Mirasımız</a></li>
                    <li><a href="havadurumu.html">Hava Durumu</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="iletisimformu.html">İletişim Formu</a></li>
                </ul>
            </nav>
            <div class="hamburger" id="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </header>

<br><br><br><br><br>

<?php
// Kullanıcı tarafından gönderilen e-posta ve şifre alınıyor
$email = $_POST['email'];
$password = $_POST['password']; // şifre alanının adını password olarak değiştir

$dogrumail ="abdullah.cobaner@ogr.sakarya.edu.tr";
$dogrusifre ="B231210097";

// Kullanıcı adı ve şifre kontrolü, bu örnek basit bir kontrol şeklidir, gerçek bir uygulamada daha karmaşık olmalıdır
if ($email == $dogrumail && $password == $dogrusifre) {
    echo '<div class="alert alert-danger" role="alert">
            GİRİŞ BAŞARILI ANASAYFAYA YÖNLENDİRİLİYORSUNUZ.
          </div>';
    echo '<script>setTimeout(function(){window.location.href = "index.html";}, 2000);</script>';
} else  {
    // Eğer kullanıcı adı veya şifre yanlışsa, kullanıcıyı tekrar giriş sayfasına yönlendir ve bilgi ver
    echo '<div class="alert alert-danger" role="alert">
            E-posta veya şifre yanlış. Lütfen tekrar deneyin.
          </div>';
    echo '<script>setTimeout(function(){window.location.href = "login.html";}, 2000);</script>'; // 2 saniye sonra tekrar login sayfasına yönlendir
}
?>


<br><br><br><br><br><br><br><br>

<footer>
    <p>Telif Hakkı © 2024 - Abdullah Anıl Çobaner -Hakkımda</p>
</footer>
<script src="script.js"></script>
</body>
</html>
