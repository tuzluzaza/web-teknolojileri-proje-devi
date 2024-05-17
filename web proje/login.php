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

<header class="header">
    <a href="index.html" class="logo">HAKKIMDA</a>

    <nav class="navbar">
    <a href="index.html">Hakkımda</a>
        <a href="ozgecmis.html">Özgeçmiş</a>
        <a href="sehrim.html">Şehrim</a>
        <a href="mirasimiz.html">Mirasımız</a>
        <a href="havadurumu.html">Hava Durumu</a>
        <a href="login.html">Log in</a>
        <a href="iletisimformu.html">Form Oluştur</a>
    </nav>
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
    header('Location: index.html');
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

</body>
</html>
