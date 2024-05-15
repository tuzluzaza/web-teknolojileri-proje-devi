
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çorum Web -İletişim Formu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<header class="header">
    <a href="index.html" class="logo">İLETİŞİM FORMU</a>



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

<div class="container" id="corumbilgi">

  <p>ÇORUM WEB İLETİŞİM FORMU</p>

</div>

<br><br><br>


<div class="container" id="formmm">

    <h2>FORM BILGILERI</h2>
    <br>
    <?php
    // Formdan gelen bilgileri al
    $isim = $_POST['isim'];
    $soyisim = $_POST['soyisim'];
    $cinsiyet = $_POST['cinsiyet'];
    $yas = $_POST['yas'];
    $bolge = $_POST['bolge'];
  
    $is_yapilan_sektor = $_POST['is_yapilan_sektor'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $gorusler = $_POST['gorusler'];

    // Gönderilen bilgileri ekrana yazdır
    echo "<p><strong>İsim:</strong> $isim</p>";
    echo "<hr>";

    echo "<p><strong>Soyisim:</strong> $soyisim</p>";
    echo "<hr>";

    echo "<p><strong>Cinsiyet:</strong> $cinsiyet</p>";
    echo "<hr>";
  
    echo "<p><strong>Yaş Aralığı:</strong> $yas</p>";
    echo "<hr>";
  
    echo "<p><strong>Yaşadığınız Bölge:</strong> $bolge</p>";
    echo "<hr>";
 
    echo "<p><strong>İş Yapılan Sektör:</strong> $is_yapilan_sektor</p>";
    echo "<hr>";
  
    echo "<p><strong>Telefon Numarası:</strong> $telefon</p>";
    echo "<hr>";
 
    echo "<p><strong>Email Adresi:</strong> $email</p>";
    echo "<hr>";

    echo "<p><strong>Görüşler:</strong> $gorusler</p>";
    ?>
</div>

<br><br><br><br><br><br><br><br>

<footer>
    <p>Telif Hakkı © 2024 - Abdullah Anıl Çobaner - İletişim Formu</p>
</footer>
<script src="form.js"></script>
</body>
</html>
