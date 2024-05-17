$(document).ready(function() {
    $('#jquerySubmit').click(function() {
        // Form validation
        let errors = ""; // Hataları bir araya toplamak için boş bir dize oluşturuyoruz
        
        // Check if name is not empty
        if ($('#isim').val().trim() === '') {
            errors += 'Lütfen isminizi giriniz.\n';
        }

        // Check if surname is not empty
        if ($('#soyisim').val().trim() === '') {
            errors += 'Lütfen soyisminizi giriniz.\n';
        }

        // Check if gender is selected
        if (!$('input[name="cinsiyet"]:checked').val()) {
            errors += 'Lütfen cinsiyetinizi seçiniz.\n';
        }

        // Check if age range is selected
        if (!$('input[name="yas"]:checked').val()) {
            errors += 'Lütfen yaş aralığınızı seçiniz.\n';
        }

        // Check if region is selected
        if ($('#bolge').val() === null) {
            errors += 'Lütfen yaşadığınız bölgeyi seçiniz.\n';
        }

        // Check if sector is selected
        if ($('#is_yapilan_sektor').val() === null) {
            errors += 'Lütfen iş yapılan sektörü seçiniz.\n';
        }

        // Check if phone number is valid
        let phonePattern = /^[0-9]{11}$/;
        if (!phonePattern.test($('#telefon').val())) {
            errors += 'Lütfen geçerli bir telefon numarası giriniz (11 haneli).\n';
        }

        // Check if email is valid
        let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test($('#email').val())) {
            errors += 'Lütfen geçerli bir email adresi giriniz.\n';
        }

        // If there are errors, display them; otherwise, submit the form
        if (errors !== "") {
            alert(errors); // Tüm hataları tek bir uyarı olarak gösteriyoruz
        } else {
            $('#contactForm').submit(); // Formu gönderiyoruz
        }
    });
});
