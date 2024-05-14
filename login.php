<?php
    $kuladi = $_POST["exampleInputEmail1"];
    $sifre = $_POST["exampleInputPassword1"];

    $bkuladi = "abdullah.cobaner@ogr.sakarya.edu.tr";
    $bsifre = "B231210097";

    if ($kuladi == $bkuladi && $sifre == $bsifre) {
        // Giriş başarılı ise yönlendir
        header("Location: login.php");
        exit; // Yönlendirmeden sonra kodun devam etmemesi için
    } else {
        // Eşleşme yoksa hata mesajı göster
        echo "E-posta adresi veya şifre hatalı. Lütfen tekrar deneyin.";
    }
?>
