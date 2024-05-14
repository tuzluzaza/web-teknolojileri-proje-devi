<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "İsim: " . $_POST["isim"] . "<br>";
        echo "Soyisim: " . $_POST["soyisim"] . "<br>";
        echo "Cinsiyet: " . $_POST["cinsiyet"] . "<br>";
        echo "Yaş Aralığı: ";
        if (!empty($_POST["yas_araligi"])) {
            echo implode(", ", $_POST["yas_araligi"]) . "<br>";
        } else {
            echo "Seçilmedi <br>";
        }
        echo "Yaşadığı Bölge: " . $_POST["bolge"] . "<br>";
        echo "Profil Fotoğrafı: " . $_FILES["profil_foto"]["name"] . "<br>";
        echo "İş Yapılan Sektör: " . $_POST["is_yapilan_sektor"] . "<br>";
        echo "Görüşler: " . $_POST["gorusler"] . "<br>";
        echo "Telefon Numarası: " . $_POST["telefon"] . "<br>";
        echo "Email Adresi: " . $_POST["email"] . "<br>";
    }
    ?>