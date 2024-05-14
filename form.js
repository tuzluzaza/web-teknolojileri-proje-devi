function toggleCheckbox(id) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.id !== id) {
            checkbox.checked = false;
        }
    });
}

function validateForm() {
    var isim = document.getElementById("isim").value;
    var soyisim = document.getElementById("soyisim").value;
    var cinsiyet = document.querySelector('input[name="cinsiyet"]:checked');
    var yas_araligi = document.querySelectorAll('input[name="yas_araligi"]:checked');
    var bolge = document.getElementById("bolge").value;
    var profil_foto = document.getElementById("profil_foto").value;
    var is_yapilan_sektor = document.getElementById("is_yapilan_sektor").value;
    var gorusler = document.getElementById("gorusler").value;
    var telefon = document.getElementById("telefon").value;
    var email = document.getElementById("email").value;

    if (isim.trim() == "" || soyisim.trim() == "" || cinsiyet == null || yas_araligi.length == 0 || bolge == "" || profil_foto == "" || is_yapilan_sektor == "" || gorusler.trim() == "" || telefon.trim() == "" || email.trim() == "") {
        alert("Lütfen tüm alanları doldurun.");
        return false;
    }

    var telefonPattern = /^[0-9]{11}$/;
    if (!telefon.match(telefonPattern)) {
        alert("Lütfen geçerli bir telefon numarası girin. (Örn: 5555555555)");
        return false;
    }

    var emailPattern = /\S+@\S+\.\S+/;
    if (!email.match(emailPattern)) {
        alert("Lütfen geçerli bir email adresi girin.");
        return false;
    }

    return true;
}