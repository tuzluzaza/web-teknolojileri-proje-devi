
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

<div class="container" id="corumbilgi">

  <p>ÇORUM WEB İLETİŞİM FORMU</p>

</div>

<br><br><br>


<div class="container" id="formmm">

    <h2>FORM BİLGİLERİ</h2>
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
<script src="script.js"></script>
</body>
</html>
